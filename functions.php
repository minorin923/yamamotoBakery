<?php //子テーマ用関数

/*デフォルトではサムネ表示できないので有効化する。*/
add_theme_support('post-thumbnails');

 /*子テーマのFunction.phpは親テーマの同ファイルよりも先に読み込まれる*/
 /*PHP動作に以下の定義関数を追加*/
add_action('wp_enqueue_scripts','theme_enqueue_styles');

 function theme_enqueue_styles(){
   /*ファイル読み込みキュー「parent-style」を作成して親テーマのCSSファイルを指定する。*/
    wp_enqueue_style('parent-style', get_template_directory_uri().'/style.css');
    wp_enqueue_style('child-style',get_template_directory_uri().'/css/style.css',array('parent-style'));

 }

 function twpp_setup_theme() {
    register_nav_menu( 'header-navigation', 'Header Navigation' );
  }

add_action( 'after_setup_theme', 'twpp_setup_theme' );


//liの「CSS class (オプション)」と余計なコード削除するコード
add_filter( 'nav_menu_css_class', 'my_css_attributes_filter', 100, 1 );
// add_filter( 'nav_menu_item_id', 'my_css_attributes_filter', 100, 1 );
// add_filter( 'page_css_class', 'my_css_attributes_filter', 100, 1 );
function my_css_attributes_filter( $var ) {
      //クラス配列に'nav-item'追加してその後
      return is_array($var) ? array_intersect(array_merge($var,array('nav-item')), array( 'nav-item','current-menu-item' )) : '';
}

//aタグに「CSS class (オプション)」を反映するコード
add_filter('walker_nav_menu_start_el', 'add_class_on_link', 10, 4);
function add_class_on_link($item_output, $item){
  return preg_replace('/(<a.*?)/', '$1' . " class='nav-link s-js_scroll'", $item_output);
}
// var_dump($item->classes[1]);
// $css_class = esc_attr( $item->classes[1] );
// if ($css_class) {
// return preg_replace('/(<a.*?)/', '$1' . " class='" . $css_class . "'", $item_output);
// }else{
// return $item_output;
// }
// }

//スラッグ表示
function add_page_columns_name($columns) {
  $columns['slug'] = "スラッグ";
  return $columns;
}
function add_page_column($column_name, $post_id) {
  if( $column_name == 'slug' ) {
      $post = get_post($post_id);
      $slug = $post->post_name;
      echo attribute_escape($slug);
  }
}
add_filter( 'manage_pages_columns', 'add_page_columns_name');
add_action( 'manage_pages_custom_column', 'add_page_column', 10, 2);


//固定ページを表示させる際の自動整形(pタグ挿入処理など)を無効にする
add_filter('the_content', 'wpautop_filter', 9);
function wpautop_filter($content) {
    global $post;
    $remove_filter = false;
     
    $arr_types = array('page'); //自動整形を無効にする投稿タイプを記述
    $post_type = get_post_type( $post->ID );
    if (in_array($post_type, $arr_types)) $remove_filter = true;
     
    if ( $remove_filter ) {
       remove_filter('the_content', 'wpautop');
       remove_filter('the_excerpt', 'wpautop');
    }
     
    return $content;
}

//テキストエディタの自動整形処理を制御する(整形を無効にする)
function my_customize_mce_options( $init ) {
  global $allowedposttags;

  $init['valid_elements']          = '*[*]';
  $init['extended_valid_elements'] = '*[*]';
  $init['valid_children']          = '+a[' . implode( '|', array_keys( $allowedposttags ) ) . ']';
  $init['indent']                  = true;
  $init['wpautop']                 = false;
  $init['force_p_newlines'] = false;
  $init['force_br_newlines'] = true;
  $init['forced_root_block'] = '';

  return $init;
}
 add_filter( 'tiny_mce_before_init', 'my_customize_mce_options' );


 //　一覧記事取得関数 --------------------------------------------------------------------------------
// "count" = 表示記事数, "category" = カテゴリ番号 "classname" = 付与クラス
// 呼び出し元での指定も可能 -> [getArticleList count="x" category="y" classname="z"]
function getCatItems($atts, $content = null) {
	extract(shortcode_atts(array(
	  "count" => '4',
    "category_id" => '12',
    "classname" =>'s-'
	), $atts));
	
	// 処理中のpost変数をoldpost変数に退避
	global $post;
	$oldpost = $post;
	
	// カテゴリーの記事データ取得
	$myposts = get_posts('numberposts='.$count.'&order=DESC&orderby=post_date&category='.$category_id);
	
	if($myposts) {
		// 記事がある場合↓
		// $retHtml = '<div class="getPostDispArea">';
		// 取得した記事の個数分繰り返す
		foreach($myposts as $post) :
			// 投稿ごとの区切りのdiv
      $retHtml .= '<div class="'.$classname.'">';
      $retHtml.= '<a class="'.$classname.'_link" href="' . get_permalink() . '">'; 
      // 記事オブジェクトの整形
      setup_postdata($post);
 
			// サムネイルの有無チェック
			if ( has_post_thumbnail() ) {
        // サムネイルがある場合↓
        $retHtml .= '<div class="'.$classname.'_link_image s-aspectFixed--4-3">';
        $retHtml .= '<div class=" s-aspectFixed_frame">' . get_the_post_thumbnail($page->ID, 'thumbnail',array( 'class' => 's-aspectFixed_frame_image' ));
        $retHtml .= '<span class="'.$classname.'_link_image_category">'. get_the_category()[0]->name .'</span>';
        $retHtml .= '</div></div>';
			} else {
				// サムネイルがない場合↓※何も表示しない
				$retHtml .= '';
			}
			
			// 文章のみのエリアをdivで囲う
			$retHtml .= '<div class="'.$classname.'_link_textBox">';
      $retHtml .= '<p class="'.$classname.'_link_textBox--date">'. get_the_date() .'</p>';
      $retHtml .= '<p class="'.$classname.'_link_textBox--title">'.  the_title("","",false)  .'</p>';
      
      $retHtml .='</div></a></div>';
    endforeach;
    
	} else {
		// 記事がない場合↓
		$retHtml='<p>記事がありません。</p>';
	}
	
	// oldpost変数をpost変数に戻す
	$post = $oldpost;
	
	return $retHtml;
}
// 呼び出しの指定
add_shortcode("getArticleList", "getCatItems");


/*アーカイブのDB参照変更 */
add_filter('getarchives_where', 'custom_archives_where', 10, 2);
add_filter('getarchives_join', 'custom_archives_join', 10, 2);
function custom_archives_join($x, $r) {
  global $wpdb;
  $cat_ID = $r['cat'];
  if (isset($cat_ID)) {
    return $x . " INNER JOIN $wpdb->term_relationships ON ($wpdb->posts.ID = $wpdb->term_relationships.object_id) INNER JOIN $wpdb->term_taxonomy ON ($wpdb->term_relationships.term_taxonomy_id = $wpdb->term_taxonomy.term_taxonomy_id)";
  } else {
    return $x;
  }
}
function custom_archives_where($x, $r) {
  global $wpdb;
  $cat_ID = $r['cat'];
  if (isset($cat_ID)) {
    return $x . " AND $wpdb->term_taxonomy.taxonomy = 'category' AND $wpdb->term_taxonomy.term_id IN ($cat_ID)";
  } else {
    $x;
  }
}

/*カテゴリ別アーカイブ出力メソッド定義 */
function wp_get_cat_archives($opts, $cat) {
  $args = wp_parse_args($opts, array('echo' => '1')); // default echo is 1.
  $echo = $args['echo'] != '0'; // remember the original echo flag.
  $args['echo'] = 0;
  $args['cat'] = $cat;
  $tag = ($args['format'] === 'option') ? 'option' : 'li';
  $archives = wp_get_archives(build_query($args));
  $archs = explode('</'.$tag.'>', $archives);
  $links = array();
  foreach ($archs as $archive) {
    $link = preg_replace("/='([^']+)'/", "='$1?cat={$cat}'", $archive);
    array_push($links, $link);
  }
  $result = implode('</'.$tag.'>', $links);
  if ($echo) {
    echo $result;
  } else {
    return $result;
  }
}

// カスタム投稿タイプの追加
add_action( 'init', 'create_post_type' );

function create_post_type() {
  register_post_type( 'news', // 投稿タイプ名の定義
    array(
      'label' => 'お知らせ', //WP管理画面の表示名
      'labels' => array(
      'name' => __( 'news' ), // 表示する投稿タイプ名
      'singular_name' => __( '新着情報' ),
      'all_items' => 'お知らせ一覧', //記事一覧ページの名前。
      ),
      'public' => true,
      'has_archive' => true, /* アーカイブページを持つ */
      'menu_position' =>5, //管理画面のメニュー順位
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' ,'comments' ),
      )
  );

  register_taxonomy(
    'news-cat', //備考1：のちほど「archive-event.php」にも必要です
    'news', //カテゴリのスラッグ
  array(
    'label' => 'カテゴリ一覧', //WP管理画面のサイドバーに表示する名前。自由指定可。
    'labels' => array(
    'add_new_item' => '新規追加', //WP管理画面のサイドバーに表示する新規追加ボタンの名前。自由指定可。
    ),
    'hierarchical' => true
    )
    );   
}


/*ウィジェット定義*/
class customarchive extends WP_Widget{

  /*コンストラクタ*/
  function __construct(){
    /*親クラスコンストラクタ 引数( BaseID , Name ,Args('discription'=>'説明') )*/
    parent::__construct( 'customarchive', '年別月別アーカイブ', array('discription'=>'アーカイブ') );
  }

  /*WidgetをWebページに出力*/
  // @param array $args      'register_sidebar'で設定した「before_title, after_title, before_widget, after_widget」が入る
	// @param array $instance  Widgetの設定項目
  public function widget( $args, $instance ){
    /*HTML出力 */
    echo $args['before_widget'];
    echo $args['before_title'];
    if($instance['title'] != ''){
      echo apply_filters('widget_title', $instance['title']);
    }
    echo $args['after_title'];

    $post = "'post'";
    $posttype = "";
    if($instance['post'] != ''){
      $post =  "'".$instance['post']."'";
      $posttype = "/?post_type=".$instance['post'];
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

    $count =0;
    foreach($months as $month) :
    $year_current = $month->year;
    $count++;
    if ($year_current != $year_prev){
      if ($year_prev != null){ 
        echo  '</ul></div>';
      }
      echo '<div><input id="menuToggle'.$count.'" class="menuToggle" type="checkbox" ></input>';
      echo '<label class="s-archiveYear" for="menuToggle'.$count.'">'.$month->year.'年</label>';
      echo '<ul class="archiveMenu">';
    }
    echo '<li><a href="/'.$month->year.'/'.date("m", mktime(0, 0, 0, $month->month, 1, $month->year)).$posttype.'">';
    echo date("n", mktime(0, 0, 0, $month->month, 1, $month->year)).'月';
    echo '('. $month->post_count.')';
    echo '</a></li>';
    $year_prev = $year_current;
    endforeach; 
    echo '</ul></div>';
    echo $args['after_widget'];
  } 

  /*Widgetの管理画面用フォーム設定 */
  // @param array $instance 設定項目
  // @return string|void
  public function form( $instance){
    echo '<p>';
      echo  '<label for="'.$this->get_field_id('title').'">'. _e('Title:').'</label>';
      echo  '<input type="text" class="widefat" id="'. $this->get_field_id('title').'" name="'. $this->get_field_name('title').'" value="'. esc_attr( $instance['title'] ).'">';
      echo  '<label for="'.$this->get_field_id('post').'">'. _e('post:').'</label>';
      echo  '<input type="text" class="widefat" id="'. $this->get_field_id('post').'" name="'. $this->get_field_name('post').'" value="'. esc_attr( $instance['post'] ).'">';
    echo '</p>';
      }

  function update($new_instance, $old_instance) {
    $instance = $old_instance;
    $instance['title'] = strip_tags($new_instance['title']);
    $instance['post'] = strip_tags($new_instance['post']);
    return $instance;
  }
}


 /*ウィジェット登録・ウィジェット用サイドバー追加*/
add_action( 'widgets_init', function () {
	register_sidebar( array(  //「サイドバー」を登録する
		'name'          => 'サイドバー1',
		'id'            => 'widgetarea-1',
		'before_widget' => '<div class="s-section_container s-widget">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<div class="s-section_container_titleArea"><h2 class="s-section_container_titleArea_title">',
		'after_title'   => '</h2></div><div class="s-section_container_mainArea">',
  ) );
  register_sidebar( array(  //「サイドバー」を登録する
		'name'          => 'サイドバー2',
		'id'            => 'widgetarea-2',
		'before_widget' => '<div class="s-section_container s-widget">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<div class="s-section_container_titleArea"><h2 class="s-section_container_titleArea_title">',
		'after_title'   => '</h2></div><div class="s-section_container_mainArea">',
  ) );
  register_sidebar( array(  //「サイドバー」を登録する
		'name'          => 'サイドバー3',
		'id'            => 'widgetarea-3',
		'before_widget' => '<div class="s-section_container s-widget">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<div class="s-section_container_titleArea"><h2 class="s-section_container_titleArea_title">',
		'after_title'   => '</h2></div><div class="s-section_container_mainArea">',
  ) );
  register_widget( 'customarchive' );  //WidgetをWordPressに登録する
});

