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
  <div data-role="page" id="gen" data-theme="a">
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
    <h2><img src="<?php bloginfo('template_url'); ?>/images/general/mvImage.jpg" width="820" height="180" alt="一般歯科"></h2>
      <h3>一般歯科とは</h3>
      <p>一般歯科とは、虫歯や歯周病などの治療を目的とした診療のことをいいます。
		 大半の患者様の治療が一般歯科に属します。また予防・早期発見の為に定期検診も行っています。</p>
      <div class="panel" data-role="collapsible-set">
        <div data-role="collapsible" data-collapsed="false">
          <h3>虫歯治療</h3>
          <p>虫歯は、歯に付着した食べかすや細菌が歯垢となり、その歯垢が酸を産出して虫歯になります。
		 虫歯になった歯は自然に治癒することはありませんので、虫歯の原因となる細菌を全て除去する必要があります。
		 通常の治療では保険適応内ですが、歯磨きの習慣を欠かさないことや定期検診等を利用してしっかりと
		 予防することが大事です。</p>
        </div>
        <div data-role="collapsible" data-collapsed="true">
          <h3>歯周病治療</h3>
          <p>歯周病は、溜まった歯垢が原因で歯肉が炎症したり、歯槽骨(歯を支えている部分)が破壊されることをいいます。
		 初期段階ではそれほど痛みはありませんが、進行することで生活に支障がでる程の痛みが走ることもありますので
		 早期治療をおすすめします。</p>
        </div>
        <div data-role="collapsible" data-collapsed="true">
          <h3>その他</h3>
          <p>定期検診や歯石除去も行っていますので、現在、歯に異常がない人でも受け付けています。
		 また少しでも歯に違和感があれば検診致しますので、ご気軽にご来院下さい。</p>
        </div>
      </div>
    </div>
<!--Contents End-->
<?php get_footer(); ?>