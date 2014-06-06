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
  <div data-role="page" id="reanck" data-theme="a">
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
<!--インプラント-->
    <div data-role="content">
      <h3>オンライン予約|Reservation</h3>
      <form action="reservationcom.html" method="post">
      	<p>診断(初診/再診)</p>
      	<p>お名前</p>
      	<p>フリガナ</p>
      	<p>メールアドレス</p>
      	<p>メールアドレス確認</p>
      	<p>電話番号</p>
      	<p>郵便番号</p>
      	<p>都道府県</p>
      	<p>住所(市区郡)</p>
      	<p>第1希望日</p>
      	<p>第2希望日</p>
      	<p>第3希望日</p>
      	<p>備考</p>
        <input type="submit" value="送信">
      </form>
    </div>
<?php get_footer(); ?>