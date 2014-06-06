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
      <div class="dWap">
  		<h2><img src="<?php bloginfo('template_url'); ?>/images/implant/mvImage.jpg" width="820" height="180" alt="インプラントイメージ"></h2>
        <h3 class="dTitle"><img src="<?php bloginfo('template_url'); ?>/images/implant/title.gif" width="210" height="38" alt="インプラントタイトル"></h3>
        <div class="dwText">
          <section>
            <h3>インプラントとは...</h3>
            <p>インプラントとは、失った歯根の代替として人工歯根を埋め込む治療のことをいいます。<br>
            インプラント治療をすることで、天然の歯とほぼ変わらない感覚を保つことができます。</p>
          </section>
          <section>
            <h3>インプラント治療の流れ</h3>
            <div class="imp">
              <h4>カウンセリングと検査</h4>
              	<p>人工歯根を何本埋め込むか、埋め込む場所・大きさ等によって治療法は異なりますので<br>
              	   しっかりと検討した上でご説明させて頂きます。</p>
              	<p class="arrow"><img src="<?php bloginfo('template_url'); ?>/images/implant/arrow.png" width="45" height="45" alt="矢印"></p>
              <h4>一次手術</h4>
              	<p>あごの骨にインプラント(人工歯根)を埋め込みます。</p>
              	<p class="arrow"><img src="<?php bloginfo('template_url'); ?>/images/implant/arrow.png" width="45" height="45" alt="矢印"></p>
              <h4>一次手術終了</h4>
              	<p>一次手術が終了後、3ヶ月～6ヶ月の治癒期間をおきます。<br>
              	   この治癒期間中は、仮の歯を使用します。</p>
              	<p class="arrow"><img src="<?php bloginfo('template_url'); ?>/images/implant/arrow.png" width="45" height="45" alt="矢印"></p>
              <h4>二次手術</h4>
              	<p>歯茎を開き、人工の歯を取り付けれるようにします。<br>
              	   二次手術後の治癒期間は約1週間～6週間です。</p>
              	<p class="arrow"><img src="<?php bloginfo('template_url'); ?>/images/implant/arrow.png" width="45" height="45" alt="矢印"></p>
              <h4>人工の歯を製作及び取付</h4>
              	<p>歯茎の治癒後、患者様に合わせて人工の歯を製作し<br>
              	   インプラント(人工歯根)に取り付け固定します。</p>
              	<p class="arrow"><img src="<?php bloginfo('template_url'); ?>/images/implant/arrow.png" width="45" height="45" alt="矢印"></p>
              <h4>治療の完了とメンテナンス</h4>
              	<p>インプラントと人工の歯の状態や噛み合わせを調べます。<br>
              	   この際、歯科医師がブラッシングの指導をします。</p>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>