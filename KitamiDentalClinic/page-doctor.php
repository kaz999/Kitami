<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="歯のことなら北見デンタルクリニックにお任せ下さい。">
<meta name="keywords" content="歯医者,虫歯,歯の矯正,インプラント,歯周病,大阪,北区">
<title>北見デンタルクリニック | HOME</title>
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="screen">
<link href="<?php bloginfo('template_url'); ?>/css/doctor.css" rel="stylesheet" type="text/css" media="screen">
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/slide/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
<script type="text/javascript">
	//お問い合わせ・オンライン予約イメージのアニメーション
    $(document).ready(function() {
        $('.hLink ul li a')　// アニメーションをつける要素を指定
          .hover(function() {
        $(this).stop().animate({ top: 0 }, 180);
            //  " top: 6 " の部分を変更で移動する位置を変更
            //  " , 150 " の部分でマウスオーバー時のスピードを変更
          }, function() {
        $(this).stop().animate({ top: -6 }, 180);
            //  " top: 0 " の部分を変更で戻る位置を変更
            //  " , 150 " の部分でマウスアウト時のスピードを変更
          });
    });
</script>
<?php wp_head(); ?>
</head>
<body>
<!--Header-->
<div class="headerbg">
  <div class="header">
    <header>
      <h1><a href="<?php echo home_url('/'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/home/logo2.gif" width="260" height="120" alt="<?php bloginfo('name'); ?>"></a></h1>
      <nav class="hLink">
        <ul>
          <li><a href="<?php echo get_page_link(21); ?>" id="inquiry">お問い合わせ</a></li>
          <li><a href="<?php echo get_page_link(23); ?>" id="online">オンライン予約</a></li>
        </ul>
      </nav>
      <p><img src="<?php bloginfo('template_url'); ?>/images/home/hText.jpg" width="230" height="120" alt="予約お問い合わせ"></p>
    </header>
  </div>
</div>
<!--Navigation-->
<div class="navbg">
  <nav>
    <ul id="globalNavi">
      <li><a href="<?php echo home_url('/'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/home/gnHome_off.gif" width="180" height="58" alt="ホーム" /></a></li>
      <li><a href="<?php echo get_page_link(9); ?>"><img src="<?php bloginfo('template_url'); ?>/images/home/gnDent_off.gif" width="180" height="58" alt="歯科案内" /></a>
      	  <ul class="drop">
		  	<li><a href="<?php echo get_page_link(9); ?>">一般歯科</a></li>
			<li><a href="<?php echo get_page_link(11); ?>">矯正歯科</a></li>
			<li><a href="<?php echo get_page_link(13); ?>" id="imp">インプラント</a></li>
	    </ul>
      </li>
      <li><a href="<?php echo get_page_link(15); ?>"><img src="<?php bloginfo('template_url'); ?>/images/home/gnDocter_off.gif" width="180" height="58" alt="ドクター紹介" /></a></li>
      <li><a href="<?php echo get_page_link(17); ?>"><img src="<?php bloginfo('template_url'); ?>/images/home/gnAccess_off.gif" width="180" height="58" alt="アクセス" /></a></li>
      <li><a href="<?php echo get_page_link(19); ?>"><img src="<?php bloginfo('template_url'); ?>/images/home/gnStaff_off.gif" width="180" height="58" alt="スタッフブログ" /></a></li>
    </ul>
  </nav>
</div>
<!--Contents-->
<div class="contentsback">
  <div class="container">
    <div class="contents">
      <div class="dcWap">
        <h2><img src="<?php bloginfo('template_url'); ?>/images/doctor/mvImage.jpg" width="820" height="180" alt="ドクター紹介イメージ"></h2>
        <div class="dcTitle">
          <h3><img src="<?php bloginfo('template_url'); ?>/images/doctor/title04_doctar.gif" width="203" height="38" alt="ドクター紹介タイトル"></h3>
          <div class="dcText">
          	<section>
              <div class="doctor">
                <div class="picName">
                  <p><img src="<?php bloginfo('template_url'); ?>/images/doctor/human01.png" width="150" height="180" alt="人物イメージ01"></p>
                  <p class="name">田中康彦<br>
                  <span>Tanaka&nbsp;Yasuhiko</span></p>
                </div>
                <div class="cWord">
                  <p class="tcareer">経歴<span>Personal history</span></p>
                  <p class="career">2000年&nbsp;大坂歯科大学<span>Osaka&nbsp;dental&nbsp;university</span>&nbsp;卒業</p>
                  <p class="tword">一言<span>A single word</span></p>
                  <p class="word">歯医者といえば痛い・怖いという印象をお持ちの方も多いかと思います。<br>
                  当医院では出来るだけ痛みのない処置を心掛けていますので<br>
                  安心してご来院下さい。</p>
                </div>
              </div>
            </section>
          	<section>
              <div class="doctor">
                <div class="picName">
                  <p><img src="<?php bloginfo('template_url'); ?>/images/doctor/human02.png" width="150" height="180" alt="人物イメージ02"></p>
                  <p class="name">鈴木忠志<br>
                  <span>Suzuki Tadashi</span></p>
                </div>
                <div class="cWord">
                  <p class="tcareer">経歴<span>Personal history</span></p>
                  <p class="career">2006年 北九州大学歯学部歯学科 <span>kitakyusyu university</span> 卒業</p>
                  <p class="tword">一言<span>A single word</span></p>
                  <p class="word">歯垢は、通常の磨き方ではなかなか取れずに歯石になってしまうことが<br>
                  多々あります。歯石になってしまうと歯磨きでは取れなくなってしまうので<br>
                  当クリニックで検査してみませんか？</p>
                </div>
              </div>
            </section>
          	<section>
              <div class="doctor">
                <div class="picName">
                  <p><img src="<?php bloginfo('template_url'); ?>/images/doctor/human03.png" width="150" height="180" alt="人物イメージ03"></p>
                  <p class="name">岡本靖<br>
                  <span>okamoto yasushi</span></p>
                </div>
                <div class="cWord">
                  <p class="tcareer">経歴<span>Personal history</span></p>
                  <p class="career">2007年 奥翅大学歯学部歯学科 <span>ouu university</span> 卒業</p>
                  <p class="tword">一言<span>A single word</span></p>
                  <p class="word">矯正治療やインプラント治療の手術をしたはいいが、メンテナンスをしない<br>
                  クリニックが増えているようです。当クリニックでは定期的にメンテナンスと<br>
                  検査を実地しているので、安心してご来院下さい。</p>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>