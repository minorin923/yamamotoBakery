
/*各種アニメーション用js */
$(function(){

  /*(1)フェードインアニメーション*/
  var fadeIn_default = 'm-Js_FadeIn';
  var fadeIn_action = 'm-Js_FadeIn_action';
   /*ページ表示時*/
   window.onload = function() {
   scroll_effect();
    /* スクロール時*/
    $(window).scroll(function(){
    scroll_effect();
    });

    function scroll_effect(){
    $("."+fadeIn_default).each(function(){
      var elemPos = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > elemPos - windowHeight){
      $(this).addClass(fadeIn_action);
      }
    });
    }
  };

  /*(2)ページ内スクロールアニメーション */
  var scroll_default = 'm-Js_Scroll';
  // #で始まるアンカーをクリックした場合に処理
  $('.'+scroll_default).click(function() {
    // スクロールの速度
    var speed = 400; // ミリ秒
    // アンカーの値取得
    var href= $(this).attr("href");
    // 移動先を取得
    var target = $(href == "#" || href == "" ? 'html' : href);
    // 移動先の位置補正値(px)
    var offset = -120;
    // 移動先を数値で取得
    var position = target.offset().top + offset;
    // スムーススクロール
    $('body,html').animate({scrollTop:position}, speed, 'swing');
    return false;
  });


});