<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="歯のことなら北見デンタルクリニックにお任せ下さい。">
<meta name="keywords" content="歯医者,虫歯,歯の矯正,インプラント,歯周病,大阪,北区">
<title>北見デンタルクリニック | HOME</title>
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="screen">
<link href="<?php bloginfo('template_url'); ?>/css/recruit.css" rel="stylesheet" type="text/css" media="all">
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
      <div class="rcutWap">
        <h2><img src="<?php bloginfo('template_url'); ?>/images/recruit/mvImage.jpg" width="820" height="180" alt="求人情報イメージ"></h2>
        <h3 class="rcutTitle"><img src="<?php bloginfo('template_url'); ?>/images/recruit/title.gif" width="167" height="38" alt="求人情報タイトル"></h3>
        <div class="rtWap">
  		<p>現在、募集中の職種は下記の通りです。</p>
          <table>
            <tr>
              <th colspan="2">歯科医師(正社員/非常勤)</th>
            </tr>
            <tr>
              <td class="title">対象者</td>
              <td class="text">歯科医師免許必須</td>
            </tr>
            <tr>
              <td class="title">勤務時間</td>
              <td class="text">9:30～18:30 休憩1時間</td>
            </tr>
            <tr>
              <td class="title">勤務内容</td>
              <td class="text">歯科医師業務全般</td>
            </tr>          
            <tr>
              <td class="title">給与</td>
              <td class="text">未経験・経験年数により異なります。</td>
            </tr>
            <tr>
              <td class="title">休日</td>
              <td class="text">週休２日制 年末年始/夏季休暇 </td>
            </tr>
            <tr>
              <td class="title">福利厚生</td>
              <td class="text">厚生年金・雇用保険・労災保険・健康保険</td>
            </tr>
            <tr>
              <td class="title">その他</td>
              <td class="text">有給休暇・交通費支給(全額)・健康診断・資格サポート</td>
            </tr>
          </table>
          <table>
            <tr>
              <th colspan="2">歯科衛生士(正社員/非常勤)</th>
            </tr>
            <tr>
              <td class="title">対象者</td>
              <td class="text">歯科衛生士免許必須</td>
            </tr>
            <tr>
              <td class="title">勤務時間</td>
              <td class="text">9:30～18:30 休憩1時間</td>
            </tr>
            <tr>
              <td class="title">勤務内容</td>
              <td class="text">歯科衛生士業務全般</td>
            </tr>          
            <tr>
              <td class="title">給与</td>
              <td class="text">未経験・経験年数により異なります。</td>
            </tr>
            <tr>
              <td class="title">休日</td>
              <td class="text">週休２日制 年末年始/夏季休暇 </td>
            </tr>
            <tr>
              <td class="title">福利厚生</td>
              <td class="text">厚生年金・雇用保険・労災保険・健康保険</td>
            </tr>
            <tr>
              <td class="title">その他</td>
              <td class="text">有給休暇・交通費支給(全額)・健康診断・資格サポート</td>
            </tr>
          </table>
          <table>
            <tr>
              <th colspan="2">受付(正社員/アルバイト)</th>
            </tr>
            <tr>
              <td class="title">対象者</td>
              <td class="text">免許不要・経験不問</td>
            </tr>
            <tr>
              <td class="title">勤務時間</td>
              <td class="text">9:30～18:30 休憩1時間</td>
            </tr>
            <tr>
              <td class="title">勤務内容</td>
              <td class="text">歯科助手・受付業務全般</td>
            </tr>          
            <tr>
              <td class="title">給与</td>
              <td class="text">未経験・経験年数により異なります。</td>
            </tr>
            <tr>
              <td class="title">休日</td>
              <td class="text">週休２日制 年末年始/夏季休暇 </td>
            </tr>
            <tr>
              <td class="title">福利厚生</td>
              <td class="text">厚生年金・雇用保険・労災保険・健康保険</td>
            </tr>
            <tr>
              <td class="title">その他</td>
              <td class="text">有給休暇・交通費支給(全額)・健康診断・資格サポート</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>