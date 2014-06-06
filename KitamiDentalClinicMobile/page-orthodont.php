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
  <div data-role="page" id="corr" data-theme="a">
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
<!--矯正歯科-->
    <div data-role="content">
    <h2><img src="<?php bloginfo('template_url'); ?>/images/orthodontics/mvImage.jpg" width="820" height="180" alt="矯正歯科"></h2>
      <h3>矯正歯科とは</h3>
      <p>歯の並びが悪いと噛み合わせだけではなく、顔の形成・滑舌・運動などさまざまな事柄に影響します。
		 歯を正しく矯正することによって改善の兆しが出てくるかもしれません。
		 小さなお子様だけでなく大人の方も治療できるのでご安心ください。</p>
      <h4>矯正治療の流れ</h4>
      <div class="panel" data-role="collapsible-set">
        <div data-role="collapsible" data-collapsed="false">
          <h3>カウンセリング</h3>
          <p>初めて矯正治療に訪れていただいた際、治療方法・期間・料金を説明します。
			 長期間の治療になる為、歯科医師が矯正の必要がないと判断した場合は
			 治療強要はせず、なぜ必要ないのかを説明し、患者様にご判断をお任せします。</p>
        </div>
        <div data-role="collapsible" data-collapsed="true">
          <h3>歯の検査</h3>
          <p>患者様の資料作成の為、レントゲン・歯型取り・口内撮影・顔の撮影をします。</p>
        </div>
        <div data-role="collapsible" data-collapsed="true">
          <h3>歯の矯正治療</h3>
          <p>検査結果が出た後、はじめて矯正治療のスタートになります。
			 1ヶ月に1～2度のペースで通院して頂き、約20～30回の通院で治療終了です。</p>
        </div>
        <div data-role="collapsible" data-collapsed="true">
          <h3>治療終了</h3>
          <p>治療前の資料と比較するため、再度検査して頂き、治療前・治療後を比較します。
			 その後、数回の虫歯・歯周病予防を行っていきます。</p>
        </div>
      </div>
    </div>
<?php get_footer(); ?>