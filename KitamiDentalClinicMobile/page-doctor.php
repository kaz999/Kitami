<!DOCTYPE html> 
<html> 
  <head> 
  <meta charset="UTF-8">
  <title>北見デンタルクリニック</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
  <link href="<?php bloginfo('template_url'); ?>/css/kitamiMbl.css" rel="stylesheet" type="text/css">
  <link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet" type="text/css">
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
  <div data-role="page" id="doc" data-theme="a">
<!--Header Start-->
    <div data-role="header" data-position="fixed">
      <h1><a href="<?php echo home_url('/'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/home/logoMbl.png" width="228" height="94" alt="北見デンタルクリニック"></a></h1>
      <a href="<?php echo home_url('/'); ?>" data-role="button" data-icon="home" data-iconpos="notext">ホーム</a>
      <a href="<?php echo get_page_link(27); ?>" data-role="button" data-icon="grid" data-iconpos="notext">サイトマップ</a>
      <div data-role="navbar">
    	<ul>
      		<li><a href="<?php echo get_page_link(21); ?>">お問い合わせ</a></li>
      		<li><a href="<?php echo get_page_link(23); ?>">オンライン予約</a></li>
      	</ul>
  	  </div>
    </div>
<!--Header End-->
<!--Contents Start-->
    <div data-role="content">
    <h2><img src="<?php bloginfo('template_url'); ?>/images/doctor/mvImage.jpg" width="820" height="180" alt="ドクター紹介"></h2>
      <h3>ドクター紹介|Doctor</h3>
  	  <h4>田中康彦 | Tanaka Yasuhiko</h4>
  	  <div class="panel" data-role="collapsible-set">
  	    <div data-role="collapsible">
  	      <h4>経歴</h4>
  	      <p>2000年 大坂歯科大学 卒業</p>
        </div>
  	    <div data-role="collapsible" data-collapsed="true">
  	      <h4>一言</h4>
  	      <p>歯医者といえば痛い・怖いという印象をお持ちの方も多いかと思います。
          	 当医院では出来るだけ痛みのない処置を心掛けていますので
          	 安心してご来院下さい。</p>
        </div>
      </div>
      <h4>鈴木忠志 | Suzuki Tadashi</h4>
      <div class="panel" data-role="collapsible-set">
  	    <div data-role="collapsible">
  	      <h4>経歴</h4>
  	      <p>2006年 北九州大学歯学部歯学科 卒業</p>
        </div>
  	    <div data-role="collapsible" data-collapsed="true">
  	      <h4>一言</h4>
  	      <p>歯垢は、通常の磨き方ではなかなか取れずに歯石になってしまうことが
		 	 多々あります。歯石になってしまうと歯磨きでは取れなくなってしまうので
		 	 当クリニックで検査してみませんか？</p>
        </div>
      </div>
      <h4>岡本靖 | okamoto yasushi</h4>
      <div class="panel" data-role="collapsible-set">
  	    <div data-role="collapsible">
  	      <h4>経歴</h4>
  	      <p>2007年 奥翅大学歯学部歯学科 卒業</p>
        </div>
  	    <div data-role="collapsible" data-collapsed="true">
  	      <h4>一言</h4>
  	      <p>矯正治療やインプラント治療の手術をしたはいいが、メンテナンスをしない
		 	 クリニックが増えているようです。当クリニックでは定期的にメンテナンスと
		 	 検査を実地しているので、安心してご来院下さい。</p>
        </div>
      </div>
    </div>
<?php get_footer(); ?>