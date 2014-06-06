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
  <div data-role="page" id="imp" data-theme="a">
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
    <h2><img src="<?php bloginfo('template_url'); ?>/images/implant/mvImage.jpg" width="820" height="180" alt="インプラント"></h2>
      <h3>インプラントとは</h3>
      <p>インプラントとは、失った歯根の代替として人工歯根を埋め込む治療のことをいいます。<br>
      	 インプラント治療をすることで、天然の歯とほぼ変わらない感覚を保つことができます。</p>
      <h4>インプラント治療の流れ</h4>
      <div data-role="collapsible-set" class="panel">
        <div data-collapsed="false" data-role="collapsible">
          <h3>カウンセリングと検査</h3>
          <p>人工歯根を何本埋め込むか、埋め込む場所・大きさ等によって治療法は異なりますので
          	 しっかりと検討した上でご説明させて頂きます。</p>
        </div>
        <div data-role="collapsible" data-collapsed="true">
          <h3>一次手術</h3>
          <p>あごの骨にインプラント(人工歯根)を埋め込みます。</p>
        </div>
        <div data-role="collapsible" data-collapsed="true">
          <h3>一次手術終了</h3>
          <p>一次手術が終了後、3ヶ月～6ヶ月の治癒期間をおきます。
          	 この治癒期間中は、仮の歯を使用します。</p>
        </div>
        <div data-role="collapsible" data-collapsed="true">
          <h3>二次手術</h3>
          <p>歯茎を開き、人工の歯を取り付けれるようにします。
          	 二次手術後の治癒期間は約1週間～6週間です。</p>
        </div>
        <div data-role="collapsible" data-collapsed="true">
          <h3>人工の歯を製作及び取付</h3>
          <p>歯茎の治癒後、患者様に合わせて人工の歯を製作し
          	 インプラント(人工歯根)に取り付け固定します。</p>
        </div>
        <div data-role="collapsible" data-collapsed="true">
          <h3>治療の完了とメンテナンス</h3>
          <p>インプラントと人工の歯の状態や噛み合わせを調べます。
	  	     この際、歯科医師がブラッシングの指導をします。</p>
        </div>
      </div>
    </div>
<?php get_footer(); ?>