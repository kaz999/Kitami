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
  <div data-role="page" id="inq" data-theme="a">
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
    <h2><img src="<?php bloginfo('template_url'); ?>/images/access/mvImage.jpg" width="820" height="180" alt="お問い合わせ"></h2>
      <h3>お問い合わせ|Inquiry</h3>
      <form action="inquiryck.html" method="post">
      <div data-role="fieldcontain" class="ui-hide-label">
        <label for="name">お名前:</label>
        <input type="text" name="name" id="name" value="" placeholder="お名前" />
      </div>
      <div data-role="fieldcontain" class="ui-hide-label">
        <label for="mail">メールアドレス:</label>
        <input type="email" name="mail" id="mail" value="" placeholder="メールアドレス" />
      </div>
      <div data-role="fieldcontain" class="ui-hide-label">
        <label for="mailck">メールアドレス確認:</label>
        <input type="email" name="mailck" id="mailck" value="" placeholder="メールアドレス確認" />
      </div>
      <div data-role="fieldcontain" class="ui-hide-label">
        <label for="tel">電話番号:</label>
        <input type="tel" name="tel" id="tel" value="" placeholder="電話番号" />
      </div>
      <div data-role="fieldcontain" class="ui-hide-label">
        <label for="textarea">お問い合わせ内容</label>
        <textarea name="textarea" id="textarea" value="" placeholder="お問い合わせ内容" /></textarea>
      </div>
      <input type="submit" value="確認画面へ">
      </form>
    </div>
<?php get_footer(); ?>