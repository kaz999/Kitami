<!DOCTYPE html> 
<html> 
  <head> 
  <meta charset="UTF-8">
  <title>北見デンタルクリニック</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
  <link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet" type="text/css">
  <link href="<?php bloginfo('template_url'); ?>/css/kitamiMbl.css" rel="stylesheet" type="text/css">
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
  <div data-role="page" id="acc" data-theme="a">
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
    <h2><img src="<?php bloginfo('template_url'); ?>/images/access/mvImage.jpg" width="820" height="180" alt="アクセス"></h2>
      <h3>アクセス|Access</h3>
      <h3><img src="<?php bloginfo('template_url'); ?>/images/access/access.gif" width="530" height="450" alt="アクセス"></h3>
      <h4>住所</h4>
      	 <p>〒530-0034<br>
		 大阪府大阪市北区錦町4-33<br>
		 JR天満駅の出入口2番を出て徒歩5分</p>
	  <h4>Tel</h4>
	     <p>06-639-8149<br>
		 Fax<br>
	 	 09-639-8148</p>
    </div>
<?php get_footer(); ?>