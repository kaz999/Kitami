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
  <div data-role="page" id="rec" data-theme="a">
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
    <h2><img src="<?php bloginfo('template_url'); ?>/images/recruit/mvImage.jpg" width="820" height="180" alt="求人情報"></h2>
      <h3>求人情報|Recruit</h3>
  	  <h4>歯科医師(正社員/非常勤)</h4>
  	  <p>対象者:歯科医師免許必須</p>
  	  <p>勤務時間:9:30～18:30 休憩1時間</p>
  	  <p>勤務内容:歯科医師業務全般</p>
  	  <p>給与:未経験・経験年数により異なります。</p>
  	  <p>休日:週休２日制 年末年始/夏季休暇 </p>
  	  <p>福利厚生:厚生年金・雇用保険・労災保険・健康保険</p>
  	  <p>その他:有給休暇・交通費支給(全額)・健康診断・資格サポート</p>
      <h4>歯科衛生士(正社員/非常勤)</h4>
  	  <p>対象者:歯科衛生士免許必須</p>
  	  <p>勤務時間:9:30～18:30 休憩1時間</p>
  	  <p>勤務内容:歯科衛生士業務全般</p>
  	  <p>給与:未経験・経験年数により異なります。</p>
  	  <p>休日:週休２日制 年末年始/夏季休暇 </p>
  	  <p>福利厚生:厚生年金・雇用保険・労災保険・健康保険</p>
  	  <p>その他:有給休暇・交通費支給(全額)・健康診断・資格サポート</p>
      <h4>受付(正社員/アルバイト)</h4>
  	  <p>対象者:免許不要・経験不問</p>
  	  <p>勤務時間:9:30～18:30 休憩1時間</p>
  	  <p>勤務内容:歯科助手・受付業務全般</p>
  	  <p>給与:未経験・経験年数により異なります。</p>
  	  <p>休日:週休２日制 年末年始/夏季休暇 </p>
  	  <p>福利厚生:厚生年金・雇用保険・労災保険・健康保険</p>
  	  <p>その他:有給休暇・交通費支給(全額)・健康診断・資格サポート</p>
    </div>
<?php get_footer(); ?>