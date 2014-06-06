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
  <div data-role="page" id="sitemap" data-theme="a">
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
    <h2><img src="<?php bloginfo('template_url'); ?>/images/sitemap/mvImage.jpg" width="820" height="180" alt="サイトマップ"></h2>
    	<h3>サイトマップ|sitemap</h3>
    	<p><a href="<?php echo home_url('/'); ?>">ホーム</a></p>
    	<p><a href="<?php echo get_page_link(12); ?>">一般歯科について</a></p>
    	<p><a href="<?php echo get_page_link(14); ?>">矯正歯科について</a></p>
    	<p><a href="<?php echo get_page_link(16); ?>">インプラントについて</a></p>
    	<p><a href="<?php echo get_page_link(18); ?>">ドクター紹介</a></p>
    	<p><a href="<?php echo get_page_link(20); ?>">アクセス</a></p>
    	<p><a href="<?php echo get_page_link(28); ?>">求人情報</a></p>
    	<p><a href="<?php echo get_page_link(26); ?>">お問い合わせ</a></p>
    	<p><a href="<?php echo get_page_link(24); ?>">オンライン予約</a></p>
    </div>
<!--Contents End-->
<?php get_footer(); ?>