<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="歯のことなら北見デンタルクリニックにお任せ下さい。">
<meta name="keywords" content="歯医者,虫歯,歯の矯正,インプラント,歯周病,大阪,北区">
<title><?php bloginfo('name'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
<link href="<?php bloginfo('template_url'); ?>/css/kitamiMbl.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet" type="text/css">
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script>
     $(document).bind("mobileinit", function(){
        $.mobile.ajaxEnabled = false;
    });
</script>
<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script></head>
<body>
<div data-role="page" id="index" data-theme="a">
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
<div data-role="content"><!--content要素-->
