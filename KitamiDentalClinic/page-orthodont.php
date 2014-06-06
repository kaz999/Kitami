<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="歯のことなら北見デンタルクリニックにお任せ下さい。">
<meta name="keywords" content="歯医者,虫歯,歯の矯正,インプラント,歯周病,大阪,北区">
<title>北見デンタルクリニック | HOME</title>
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="screen">
<link href="<?php bloginfo('template_url'); ?>/css/dent.css" rel="stylesheet" type="text/css" media="screen">
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
      <div class="dWap">
  		<h2><img src="<?php bloginfo('template_url'); ?>/images/orthodontics/mvImage.jpg" width="820" height="180" alt="矯正歯科イメージ"></h2>
        <h3 class="dTitle"><img src="<?php bloginfo('template_url'); ?>/images/orthodontics/title.gif" width="205" height="38" alt="矯正歯科タイトル"></h3>
        <div class="dwText">
		  <section>
    			<h3>矯正歯科とは...</h3>
    			<p>歯の並びが悪いと噛み合わせだけではなく、顔の形成・滑舌・運動などさまざまな事柄に影響します。<br>
       			   歯を正しく矯正することによって改善の兆しが出てくるかもしれません。<br>
       			   小さなお子様だけでなく大人の方も治療できるのでご安心ください。</p>
  			</section>
          	<section>
            	<h3>矯正治療の流れ</h3>
                <div class="ort">
                  <h4>カウンセリング</h4>
                  <p>初めて矯正治療に訪れていただいた際、治療方法・期間・料金を説明します。<br>
                    長期間の治療になる為、歯科医師が矯正の必要がないと判断した場合は<br>
                    治療強要はせず、なぜ必要ないのかを説明し、患者様にご判断をお任せします。</p>
                  <p class="arrow"><img src="<?php bloginfo('template_url'); ?>/images/orthodontics/arrow.png" width="45" height="45" alt="矢印"></p>
                  <h4>歯の検査</h4>
                  <p>患者様の資料作成の為、レントゲン・歯型取り・口内撮影・顔の撮影をします。</p>
                  <p class="arrow"><img src="<?php bloginfo('template_url'); ?>/images/orthodontics/arrow.png" width="45" height="45" alt="矢印"></p>
                  <h4>歯の矯正治療</h4>
                  <p>検査結果が出た後、はじめて矯正治療のスタートになります。<br>
                    1ヶ月に1～2度のペースで通院して頂き、約20～30回の通院で治療終了です。</p>
                  <p class="arrow"><img src="<?php bloginfo('template_url'); ?>/images/orthodontics/arrow.png" width="45" height="45" alt="矢印"></p>
                  <h4>治療終了</h4>
                  <p>治療前の資料と比較するため、再度検査して頂き、治療前・治療後を比較します。<br>
                    その後、数回の虫歯・歯周病予防を行っていきます。</p>
                </div>
          	</section>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>