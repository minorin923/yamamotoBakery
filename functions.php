<?php
// 親テーマがある場合、子テーマのfunction.phpは親テーマの同ファイルよりも先に読み込まれる


//index
/*(1) 各種機能アクティベート */
/*(2) CSSファイル読み込み*/
/*(3) カスタム投稿タイプの追加*/
/*(4) ショートコード定義  */
/*(5) ウィジェット定義*/
/*(6) サイドバー・ウィジェット登録*/
/*(7) ナビゲーションバー周りの設定*/
/*(8) wordpressの自動整形機能の制御*/



/*(1) 各種機能アクティベート */
//[1]サムネ表示有効化
add_theme_support('post-thumbnails');



/*(2) CSSファイル読み込み*/
//[1]テーマのCSSファイル読み込み設定
function theme_enqueue_styles()
{
  // ファイル読み込みキュー「parent-style」を作成して親テーマのCSSファイルを指定する。
  // (親テーマがない場合は自身のCSSファイルを指定する)
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('child-style', get_template_directory_uri() . '/css/style.css', array('parent-style'));
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');



/*(3) カスタム投稿タイプの追加*/
//[1] カスタム投稿タイプとカテゴリ・タグの定義
function create_post_type()
{
  register_post_type(
    'news', // 投稿タイプ名の定義
    array(
      'label' => 'お知らせ', //WP管理画面の表示名
      'labels' => array(
        'name' => __('ニュース'), // 表示する投稿タイプ名
        'singular_name' => __('新着情報'),
        'all_items' => 'お知らせ一覧', //記事一覧ページの名前。
      ),
      'public' => true,
      'has_archive' => true, /* アーカイブページを持つ */
      'menu_position' => 5, //管理画面のメニュー順位
      'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'comments'),
    )
  );

  register_taxonomy(
    'news-cat', //カテゴリ名
    'news', //カスタム投稿名
    array(
      'hierarchical' => true, //階層構造を持つかの指定
      'update_count_callback' => '_update_post_term_count',
      'label' => 'カテゴリー', //WP管理画面のサイドバーに表示する名前。自由指定可。
      'labels' => array(
        'add_new_item' => '新規追加', //WP管理画面のサイドバーに表示する新規追加ボタンの名前。自由指定可。
      ),
      'public' => true,
      'show_ui' => true
    )
  );
  register_taxonomy(
    'news-tag', //カテゴリ名
    'news', //カスタム投稿名
    array(
      'hierarchical' => false, //階層構造を持つかの指定
      'update_count_callback' => '_update_post_term_count',
      'label' => 'タグ', //WP管理画面のサイドバーに表示する名前。自由指定可。
      'labels' => array(
        'add_new_item' => '新規追加', //WP管理画面のサイドバーに表示する新規追加ボタンの名前。自由指定可。
      ),
      'public' => true,
      'show_ui' => true
    )
  );
}
add_action('init', 'create_post_type');

//[2-1] 管理画面にカテゴリ・タグを表示(DBにカテゴリ・タグの定義を追加)
function add_page_columns_name($columns)
{
  $columns['news-cat'] = "カテゴリ";
  $columns['news-tag'] = "タグ";
  return $columns;
}
add_filter('manage_news_posts_columns', 'add_page_columns_name');

//[2-2] 管理画面にカテゴリ・タグを表示(管理画面にカラム名を追加)
function add_page_column($column_name, $post_id)
{
  if ($column_name == 'news-cat') {
    echo get_the_term_list($id, 'news-cat', '', ', ');
  }
  if ($column_name == 'news-tag') {
    echo get_the_term_list($id, 'news-tag', '', ', ');
  }
}
add_action('manage_news_posts_custom_column', 'add_page_column', 10, 2);

//[3] 管理画面の要素名を並び替える
function sort_custom_columns($columns)
{
  $columns = array(
    'cb'     => '<input type="checkbox" />',
    'title'  => 'タイトル',
    'auther' => '投稿者',
    'news-cat' => 'カテゴリー',
    'news-tag' => 'タグ',
    'date'   => '日付'
  );
  return $columns;
}
add_filter('manage_news_posts_columns', 'sort_custom_columns');

//[4] 管理画面にカテゴリ毎でのソートボタンを追加
function add_post_taxonomy_restrict_filter()
{
  global $post_type;
  if ($post_type  == 'news') {
    echo '<select name="news-cat">';
    echo  '<option value="">カテゴリー一覧</option>';
    $terms = get_terms('news-cat');
    foreach ($terms as $term) {
      echo '<option value="' . $term->slug . '">' . $term->name . '</option>';
    }
    echo '</select>';
  }
}
add_action('restrict_manage_posts', 'add_post_taxonomy_restrict_filter');



/*(4) ショートコード定義  */
//[1] 記事一覧を表示させるショートコード
// ショートコード: [getArticleList count="a"  listtype="b"  post_type="c" taxonomy_"d"]
// "count" = 表示記事数,  "thumbnail"=サムネイル指定(true/flase)  "post_type" = 投稿記事タイプ "taxonomy" = カスタム投稿タイプのカテゴリのタクソノミー名
function getCatItems($atts, $content = null)
{
  extract(shortcode_atts(array(
    "count" => '4',
    "className" => 'news',
    "thumbnail" => false,
    "wordCount" => 12,
    "post_type" => 'post',
    "taxonomy" => ''
  ), $atts));


  // 処理中のpost変数をoldpost変数に退避
  global $post;
  $oldpost = $post;

  // カテゴリーの記事データ取得
  $myposts = get_posts('numberposts=' . $count . '&order=DESC&orderby=post_date&post_type=' . $post_type);

  if (!$myposts) {
    $post = $oldpost;
    return '<p>記事がありません。</p>';
  }

  foreach ($myposts as $post) {
    // 記事オブジェクトの整形
    setup_postdata($post);

    if ($taxonomy !== '') {
      $taxonomyArray = wp_get_object_terms($post->ID, $taxonomy);
      if (is_wp_error($taxonomyArray)) {
        //該当タクソノミーがない場合のWPError回避処理
        $taxonomyArray = array(new class{ public $name = 'unKnown'; public $description = '';});
      } 
    } else {
      $taxonomyArray = get_the_category();
    }

    $retHtml .= drawPostItem($post,$thumbnail,$wordCount,$taxonomyArray[0],$className);
  }

  // oldpost変数をpost変数に戻す
  $post = $oldpost;
  return $retHtml;
}

function drawPostItem($post,$thumbnail,$wordCount,$taxonomy,$itemClassName)
{
  $retHtml .= '<div class="' . $itemClassName . '">';
  $retHtml .= '<a class="post_link" href="' . get_permalink() . '">';

  if ($thumbnail) {
    $retHtml .= '<div class="post_link_image"><div class="imageFrame">';
    if (has_post_thumbnail()) {
      $retHtml .=  get_the_post_thumbnail($post->ID, 'thumbnail', array('class' => 'image'));
    } else {
      $retHtml .= '<div class="image" style="background-color:gray;"></div>';
    }
  }

  $retHtml .= '<span class="post_link_category" ' . $taxonomy->description . '>'  . $taxonomy->name . '</span>';

  if ($thumbnail) {$retHtml .= '</div></div>';}

  $retHtml .= '<div class="post_link_textBox">';
  $retHtml .= '<span class="post_link_textBox--date">' . get_the_date() . '</span>';
  $retHtml .= '<p class="post_link_textBox--title">' .  postTitleSet(the_title("", "", false),$wordCount)  . '</p>';
  $retHtml .= '</div></a></div>';
  
  return $retHtml;
}

function postTitleSet($str,$wordCount){
  $textCode ='UTF-8';
  if(mb_strlen($str,$textCode) > $wordCount){
    return (mb_substr($str,0,$wordCount,$textCode).'…');
  }
  return $str;
}


// 呼び出しの指定
add_shortcode("getArticleList", "getCatItems");



/*(5) ウィジェット定義*/
//[1] 年別->月別アーカイブウィジェット
class customarchive extends WP_Widget
{
  /*コンストラクタ*/
  function __construct()
  {
    /*親クラスコンストラクタ 引数( BaseID , Name ,Args('discription'=>'説明') )*/
    parent::__construct('customarchive', '年別月別アーカイブ', array('discription' => 'アーカイブ'));
  }

  /*WidgetをWebページに出力*/
  // @param array $args      'register_sidebar'で設定した「before_title, after_title, before_widget, after_widget」が入る
  // @param array $instance  Widgetの設定項目
  public function widget($args, $instance)
  {
    /*HTML出力 */
    echo $args['before_widget'];

    echo $args['before_title'];
    if ($instance['title'] != '') {
      echo apply_filters('widget_title', $instance['title']);
    }
    echo $args['after_title'];

    $post = "'post'";
    $posttype = "";
    if ($instance['post'] != '') {
      $post =  "'" . $instance['post'] . "'";
      $posttype = "/?post_type=" . $instance['post'];
    }

    $year_prev = null;
    global $wpdb;
    $months = $wpdb->get_results("SELECT DISTINCT MONTH( post_date ) AS month ,
                                        YEAR( post_date ) AS year,
                                        COUNT( id ) as post_count FROM $wpdb->posts
                                        WHERE post_status = 'publish' and post_date <= now( )
                                        and post_type = $post
                                        GROUP BY month , year
                                        ORDER BY post_date DESC");

    
    $count = 0; $year_count=0;
    foreach ($months as $month) {
      $year_current = $month->year;
      $count++;
      if ($year_current != $year_prev) {
        if ($year_prev != null) { 
          echo '</ul>';
          echo '<div class="widget--Archive_totalCount">('.$year_count.')</div>';
          echo '</div>';
          $year_count = 0;
        }
        echo '<div class="widget--Archive">';
        echo '<label class="widget--Archive_year toggleLabel" for="menuToggle' . $count . '">' . $month->year .'</label>';
        echo '<input id="menuToggle'.$count.'" class="toggleButton" type="checkbox" ></input>';
        echo '<ul class="widget--Archive_menu toggleTarget">';
      }
      echo '<li><a href="/' . $month->year . '/' . date("m", mktime(0, 0, 0, $month->month, 1, $month->year)) . $posttype . '">';
      echo ''.date("n", mktime(0, 0, 0, $month->month, 1, $month->year)) . '月';
      echo '</a><span>(' . $month->post_count . ')</span>';
      echo '</li>';
      $year_prev = $year_current;
      $year_count += $month->post_count;
    }
    echo '</ul>';
    echo '<div class="widget--Archive_totalCount">('.$year_count.')</div>';
    echo '</div>';
    echo $args['after_widget'];
  }

  /*Widgetの管理画面用フォーム設定 */
  // @param array $instance 設定項目
  // @return string|void
  public function form($instance)
  {
    echo '<p>';
    echo  '<label for="' . $this->get_field_id('title') . '">' . _e('Title:') . '</label>';
    echo  '<input type="text" class="widefat" id="' . $this->get_field_id('title') . '" name="' . $this->get_field_name('title') . '" value="' . esc_attr($instance['title']) . '">';
    echo  '<label for="' . $this->get_field_id('post') . '">' . _e('post:') . '</label>';
    echo  '<input type="text" class="widefat" id="' . $this->get_field_id('post') . '" name="' . $this->get_field_name('post') . '" value="' . esc_attr($instance['post']) . '">';
    echo '</p>';
  }

  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
    $instance['title'] = strip_tags($new_instance['title']);
    $instance['post'] = strip_tags($new_instance['post']);
    return $instance;
  }
}



/*(6) サイドバー・ウィジェット登録*/
add_action('widgets_init', function () {
  $before_widget ='<div class="widget">';
  $before_title = '<div class="widget_titleArea"><h2 class="widget_titleArea_title">';
  $after_title = '</h2></div><div class="widget_mainArea">';
  $after_widget = '</div></div>';
  //[1] サイドバーの登録
  register_sidebar(array(
    'name'          => 'サイドバー1',
    'id'            => 'widgetarea-1',
    'before_widget' => $before_widget,
    'after_widget'  => $after_widget,
    'before_title'  => $before_title,
    'after_title'   => $after_title,
  ));
  register_sidebar(array(
    'name'          => 'サイドバー2',
    'id'            => 'widgetarea-2',
    'before_widget' => $before_widget,
    'after_widget'  => $after_widget,
    'before_title'  => $before_title,
    'after_title'   => $after_title,
  ));
  register_sidebar(array(
    'name'          => 'サイドバー3',
    'id'            => 'widgetarea-3',
    'before_widget' => $before_widget,
    'after_widget'  => $after_widget,
    'before_title'  => $before_title,
    'after_title'   => $after_title,
  ));

  //[2] ウィジェットの追加
  register_widget('customarchive');  //WidgetをWordPressに登録する
});



/*(7) ナビゲーションバー周りの設定*/
//[1]ナビゲーションバーの登録
function twpp_setup_theme()
{
  //ナビゲーションバー「'header-navigation'」を登録する
  register_nav_menu('header-navigation', 'HeaderNavigation');
  register_nav_menu('header-navigation-sub', 'HeaderNavigation-sub');
  register_nav_menu('header-navigation-SNS', 'HeaderNavigation-SNS');
}
add_action('after_setup_theme', 'twpp_setup_theme');

//[2]ナビゲーションバーのliの余計なclass名を削除する
function my_css_attributes_filter($var)
{
  $addClassName = '';
  //1. li要素に$addClassName追加する
  //2. その後$addClassName,'current-menu-item'を除くすべてのclass名を削除する
  return is_array($var) ? array_intersect(array_merge($var, array($addClassName)), array($addClassName, 'current-menu-item')) : '';
}
add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);

//[3]ナビゲーションバーのaタグにclassを追加するコード
function add_class_on_link($item_output, $item)
{
  $addClassName = 'm-Js_Scroll';
  return preg_replace('/(<a.*?)/', '$1' . ' class="' . $addClassName . '"', $item_output);
}
add_filter('walker_nav_menu_start_el', 'add_class_on_link', 10, 4);



/*(8) wordpressの自動整形機能の制御*/
//[1] 固定ページを表示させる際の自動整形(pタグ挿入処理など)を無効にする
function wpautop_filter($content) {
global $post;
$remove_filter = false;
$arr_types = array('page'); //適用させる投稿タイプを指定
$post_type = get_post_type( $post->ID );
if (in_array($post_type, $arr_types)) $remove_filter = true;
if ( $remove_filter ) {
remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');
}
return $content;
}
add_filter('the_content', 'wpautop_filter', 9);

//[2] テキストエディタの自動整形処理を制御する(整形を無効にする)
function my_customize_mce_options($init)
{
  global $allowedposttags;

  $init['valid_elements']          = '*[*]';
  $init['extended_valid_elements'] = '*[*]';
  $init['valid_children']          = '+a[' . implode('|', array_keys($allowedposttags)) . ']';
  $init['indent']                  = true;
  $init['wpautop']                 = false;
  $init['force_p_newlines'] = false;
  $init['force_br_newlines'] = true;
  $init['forced_root_block'] = '';

  return $init;
}
add_filter('tiny_mce_before_init', 'my_customize_mce_options');
