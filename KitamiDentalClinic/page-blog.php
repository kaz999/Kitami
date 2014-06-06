<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="歯のことなら北見デンタルクリニックにお任せ下さい。">
<meta name="keywords" content="歯医者,虫歯,歯の矯正,インプラント,歯周病,大阪,北区">
<title>北見デンタルクリニック | HOME</title>
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="screen">
<link href="<?php bloginfo('template_url'); ?>/css/blog.css" rel="stylesheet" type="text/css" media="all">
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/slide/jquery.easing.1.3.js"></script>
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
<?php wp_head(); ?>
</head>
<body>
<!--Header-->
<div class="headerbg">
  <div class="header">
    <header>
      <h1><a href="<?php echo home_url('/'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/home/logo2.gif" width="260" height="120" alt="<?php bloginfo('name'); ?>"></a></h1>
      <nav class="hLink">
        <ul>
          <li><a href="<?php echo get_page_link(21); ?>" id="inquiry">お問い合わせ</a></li>
          <li><a href="<?php echo get_page_link(23); ?>" id="online">オンライン予約</a></li>
        </ul>
      </nav>
      <p><img src="<?php bloginfo('template_url'); ?>/images/home/hText.jpg" width="230" height="120" alt="予約お問い合わせ"></p>
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
      <div class="bgWap">
  		<h2><img src="<?php bloginfo('template_url'); ?>/images/blog/mvImage.jpg" width="820" height="180" alt="スタッフブログイメージ"></h2>
        <h3 class="bgTitle"><img src="<?php bloginfo('template_url'); ?>/images/blog/title.gif" width="251" height="38" alt="スタッフブログタイトル"></h3>
        <div class="bgText">
  			<div class="cate">
    			<section>
      				<h3><img src="<?php bloginfo('template_url'); ?>/images/blog/cateTitle.gif" width="155" height="26" alt="カテゴリー"></h3>
      				<p><a href="#">歯の情報(3)</a></p>
      				<p class="line">-----------------</p>
      				<p class="cateBm"><a href="#">医院情報(1)</a></p>
      			</section>
  			</div>
          	<div class="cateText">
            	<section>
                    <div class="cpImage">
                      <p><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/blog/Article01.jpg" width="150" height="150" alt="image"></a></p>
                    </div>
                    <div class="cpWap">
                      <div class="cpTitle">
                        <p class="blogTitle"><a href="#">定期健診について</a></p>
                        <p class="time">2014/01/01</p>
                      </div>
                      <p class="cpText">定期健診を受けて頂くと、虫歯・歯周病の早期発見や、歯の健康を保つ<a href="#"><span>...続きを見る</span></a></p>
                      <p class="category">Category&nbsp;<a href="#">歯の情報</a></p>
                    </div>
				</section>
          	</div>
            <div class="cateText">
            	<section>
                    <div class="cpImage">
                      <p><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/blog/Article02.jpg" width="150" height="150" alt="image"></a></p>
                    </div>
                    <div class="cpWap">
                      <div class="cpTitle">
                        <p class="blogTitle"><a href="#">歯石除去をご検討下さい</a></p>
                        <p class="time">2014/01/01</p>
                      </div>
                      <p class="cpText">歯石は普段の歯磨きではなかなか除去することが出来ません。原因は歯垢が固まった<a href="#"><span>...続きを見る</span></a></p>
                      <p class="category">Category&nbsp;<a href="#">医院情報</a></p>
                    </div>
				</section>
          	</div>
            <div class="cateText">
            	<section>
                    <div class="cpImage">
                      <p><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/blog/Article03.jpg" width="150" height="150" alt="image"></a></p>
                    </div>
                    <div class="cpWap">
                      <div class="cpTitle">
                        <p class="blogTitle"><a href="#">正しい歯磨きを心掛けましょう</a></p>
                        <p class="time">2014/01/01</p>
                      </div>
                      <p class="cpText">来院された患者様のほとんどは正しい歯磨きが出来ていないのが現状です。当医院では<a href="#"><span>...続きを見る</span></a></p>
                      <p class="category">Category&nbsp;<a href="#">歯の情報</a></p>
                    </div>
				</section>
          	</div>
            <div class="cateText">
            	<section>
                    <div class="cpImage">
                      <p><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/blog/Article05.jpg" width="150" height="150" alt="image"></a></p>
                    </div>
                    <div class="cpWap">
                      <div class="cpTitle">
                        <p class="blogTitle"><a href="#">虫歯と歯周病の危険性</a></p>
                        <p class="time">2014/01/01</p>
                      </div>
                      <p class="cpText">虫歯と歯周病は誰でもなりうる、私たちにとって非常に身近な病気です。<a href="#"><span>...続きを見る</span></a></p>
                      <p class="category">Category&nbsp;<a href="#">歯の情報</a></p>
                    </div>
				</section>
          	</div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>