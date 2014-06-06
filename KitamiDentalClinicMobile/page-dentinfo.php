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
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/rollover.js"></script>
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
</head>
<body>
<!--Header-->
<div class="headerbg">
  <div class="header">
    <header>
      <h1><a href="<?php echo home_url('/'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/home/logo.gif" width="230" height="90" alt="<?php bloginfo('name'); ?>"></a></h1>
      <nav class="hLink">
        <ul>
          <li><a href="<?php echo get_page_link(21); ?>" id="inquiry">お問い合わせ</a></li>
          <li><a href="<?php echo get_page_link(23); ?>" id="online">オンライン予約</a></li>
        </ul>
      </nav>
      <p><img src="<?php bloginfo('template_url'); ?>/images/home/hText.gif" width="230" height="120" alt="予約お問い合わせ"></p>
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
  	  	<h2><img src="<?php bloginfo('template_url'); ?>/images/general/mvImage_nt.jpg" width="820" height="180" alt="一般歯科"></h2>
  			<h3 class="dTitle"><img src="<?php bloginfo('template_url'); ?>/images/general/title.gif" width="235" height="38" alt="一般歯科"></h3>
			<div class="dwText">
          		<section>
            		<h3>一般歯科とは...</h3>
            			<p>一般歯科とは、虫歯や歯周病などの治療を目的とした診療のことをいいます。<br>
           			    大半の患者様の治療が一般歯科に属します。また予防・早期発見の為に定期検診も行っています。</p>
            	</section>
          		<section>
            		<h3>虫歯治療...</h3>
            			<p>虫歯は、歯に付着した食べかすや細菌が歯垢となり、その歯垢が酸を産出して虫歯になります。<br>
                          虫歯になった歯は自然に治癒することはありませんので、虫歯の原因となる細菌を全て除去する必要があります。<br>
                          通常の治療では保険適応内ですが、歯磨きの習慣を欠かさないことや定期検診等を利用してしっかりと<br>
                          予防することが大事です。</p>
            	</section>
          		<section>
            		<h3>歯周病治療...</h3>
            			<p>歯周病は、溜まった歯垢が原因で歯肉が炎症したり、歯槽骨(歯を支えている部分)が破壊されることをいいます。<br>
                          初期段階ではそれほど痛みはありませんが、進行することで生活に支障がでる程の痛みが走ることもありますので<br>
                          早期治療をおすすめします。</p>
            	</section>
          		<section>
            		<h3>その他...</h3>
            			<p>定期検診や歯石除去も行っていますので、現在、歯に異常がない人でも受け付けています。<br>
						   また少しでも歯に違和感があれば検診致しますので、ご気軽にご来院下さい。</p>
           		</section>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>