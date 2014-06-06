<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="歯のことなら北見デンタルクリニックにお任せ下さい。">
<meta name="keywords" content="歯医者,虫歯,歯の矯正,インプラント,歯周病,大阪,北区">
<title>北見デンタルクリニック | HOME</title>
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="screen">
<link href="<?php bloginfo('template_url'); ?>/css/onreser.css" rel="stylesheet" type="text/css" media="all">
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
      <div class="inqWap">
        <h2><img src="<?php bloginfo('template_url'); ?>/images/inquiry/mvImage.jpg" width="820" height="180" alt="お問い合わせイメージ"></h2>
        <h3 class="inqTitle"><img src="<?php bloginfo('template_url'); ?>/images/inquiry/title.gif" width="211" height="38" alt="お問い合わせタイトル"></h3>
        <div class="itWap">
          <p>診察時間:9:00～13:00 14:00～18:00<br>
          休診日:祝日・日曜日<br>
          上記の時間内に限り、受付をしております。また休診日(祝日・日曜日)は予約が出来ませんので、ご了承下さい。<br>
          前日・当日予約など、お急ぎの方は、お手数掛けますが直接医院にお電話下さい。<br>
          オンライン予約が完了しましたら、診察時間以内なら当日中、診察時間外なら、次の診察時間内にメールでご連絡致します。          </p>
          <p class="hissu"><span>※</span>は必須項目になります。</p>
		  <form action="#" method="post">
          <table>
          	<tr>
              <td class="title"><span>※</span>診察&nbsp;(初診/再診)</td>
              <td>
            	<label><input type="radio" name="mdl" value="ラジオ" id="mdl_0">&nbsp;初診</label>&nbsp;&nbsp;
                <label><input type="radio" name="mdl" value="ラジオ" id="mdl_1">&nbsp;再診&nbsp;(通院ありの方)</label>
              </td>
            </tr>
            <tr>
              <td class="title"><span>※</span><label for="name">お名前</label></td>
              <td><input name="name" type="text" id="name" size="25" maxlength="255"></td>
            </tr>
            <tr>
              <td class="title"><span>※</span>メールアドレス</td>
              <td><input name="mail" type="text" id="mail" size="40" maxlength="255"></td>
            </tr>
            <tr>
              <td class="title"><span>※</span>メールアドレス&nbsp;確認</td>
              <td><input name="cmail" type="text" id="cmail" size="40" maxlength="255"></td>
            </tr>
            <tr>
              <td class="title"><span>※</span>電話番号</td>
              <td><input name="tel" type="text" id="tel" size="20" maxlength="255"></td>
            </tr>
            <tr>
              <td class="title"><span>※</span>郵便番号</td>
              <td><input name="zipcode" type="text" id="zipcode" size="9" maxlength="8"></td>
            </tr>
            <tr>
              <td class="title"><span>※</span>都道府県</td>
              <td><select name="todohuken" id="todohuken">
                <option value="0">都道府県を選んでください</option>
                <option value="1">北海道</option>
                <option value="2">青森県</option>
                <option value="3">岩手県</option>
                <option value="4">宮城県</option>
                <option value="5">秋田県</option>
                <option value="6">山形県</option>
                <option value="7">福島県</option>
                <option value="8">茨城県</option>
                <option value="9">栃木県</option>
                <option value="10">群馬県</option>
                <option value="11">埼玉県</option>
                <option value="12">千葉県</option>
                <option value="13">東京都</option>
                <option value="14">神奈川県</option>
                <option value="15">新潟県</option>
                <option value="16">富山県</option>
                <option value="17">石川県</option>
                <option value="18">福井県</option>
                <option value="19">山梨県</option>
                <option value="20">長野県</option>
                <option value="21">岐阜県</option>
                <option value="22">静岡県</option>
                <option value="23">愛知県</option>
                <option value="24">三重県</option>
                <option value="25">滋賀県</option>
                <option value="26">京都府</option>
                <option value="27">大阪府</option>
                <option value="28">兵庫県</option>
                <option value="29">奈良県</option>
                <option value="30">和歌山県</option>
                <option value="31">鳥取県</option>
                <option value="32">島根県</option>
                <option value="33">岡山県</option>
                <option value="34">広島県</option>
                <option value="35">山口県</option>
                <option value="36">徳島県</option>
                <option value="37">香川県</option>
                <option value="38">愛媛県</option>
                <option value="39">高知県</option>
                <option value="40">福岡県</option>
                <option value="41">佐賀県</option>
                <option value="42">長崎県</option>
                <option value="43">熊本県</option>
                <option value="44">大分県</option>
                <option value="45">宮崎県</option>
                <option value="46">鹿児島県</option>
                <option value="47">沖縄県</option>
              </select></td>
            </tr>
            <tr>
              <td class="title"><span>※</span>住所</td>
              <td><input name="address" type="text" id="address" size="50" maxlength="255"></td>
            </tr>
             <tr>
              <td class="title"><span>※</span>第一希望日</td>
              <td><input name="nen" type="text" id="nen" size="4" maxlength="4">&nbsp;年&nbsp;
                  <input name="man" type="text" id="man" size="2" maxlength="2">&nbsp;月&nbsp;
                  <input name="day" type="text" id="day" size="2" maxlength="2">&nbsp;日&nbsp;
                  <select name="hour" id="hour">
                  	<option value="0" selected>9</option>
                  	<option value="1">10</option>
                  	<option value="2">11</option>
                  	<option value="3">12</option>
                  	<option value="4">14</option>
                  	<option value="5">15</option>
                  	<option value="6">16</option>
                  	<option value="7">17</option>
                  	<option value="8">18</option>
                  </select>&nbsp;時&nbsp;
                  <select name="min" id="min">
                  	<option value="0" selected>0</option>
                  	<option value="1">5</option>
                  	<option value="2">10</option>
                  	<option value="3">15</option>
                  	<option value="4">20</option>
                  	<option value="5">25</option>
                  	<option value="6">30</option>
                  	<option value="7">35</option>
                  	<option value="8">40</option>
                  	<option value="9">45</option>
                  	<option value="10">50</option>
                 	<option value="11">55</option>
                  </select>&nbsp;分&nbsp;
                </td>
             </tr>
             <tr>
              <td class="title">第二希望日</td>
              <td><input name="nen" type="text" id="nen" size="4" maxlength="4">&nbsp;年&nbsp;
                  <input name="man" type="text" id="man" size="2" maxlength="2">&nbsp;月&nbsp;
                  <input name="day" type="text" id="day" size="2" maxlength="2">&nbsp;日&nbsp;
                  <select name="hour" id="hour">
                  	<option value="0" selected>9</option>
                  	<option value="1">10</option>
                  	<option value="2">11</option>
                  	<option value="3">12</option>
                  	<option value="4">14</option>
                  	<option value="5">15</option>
                  	<option value="6">16</option>
                  	<option value="7">17</option>
                  	<option value="8">18</option>
                  </select>&nbsp;時&nbsp;
                  <select name="min" id="min">
                  	<option value="0" selected>0</option>
                  	<option value="1">5</option>
                  	<option value="2">10</option>
                  	<option value="3">15</option>
                  	<option value="4">20</option>
                  	<option value="5">25</option>
                  	<option value="6">30</option>
                  	<option value="7">35</option>
                  	<option value="8">40</option>
                  	<option value="9">45</option>
                  	<option value="10">50</option>
                 	<option value="11">55</option>
                  </select>&nbsp;分&nbsp;</td>
            </tr>
             <tr>
              <td class="title">第三希望日</td>
              <td><input name="nen" type="text" id="nen" size="4" maxlength="4">&nbsp;年&nbsp;
                  <input name="man" type="text" id="man" size="2" maxlength="2">&nbsp;月&nbsp;
                  <input name="day" type="text" id="day" size="2" maxlength="2">&nbsp;日&nbsp;
                  <select name="hour" id="hour">
                  	<option value="0" selected>9</option>
                  	<option value="1">10</option>
                  	<option value="2">11</option>
                  	<option value="3">12</option>
                  	<option value="4">14</option>
                  	<option value="5">15</option>
                  	<option value="6">16</option>
                  	<option value="7">17</option>
                  	<option value="8">18</option>
                  </select>&nbsp;時&nbsp;
                  <select name="min" id="min">
                  	<option value="0" selected>0</option>
                  	<option value="1">5</option>
                  	<option value="2">10</option>
                  	<option value="3">15</option>
                  	<option value="4">20</option>
                  	<option value="5">25</option>
                  	<option value="6">30</option>
                  	<option value="7">35</option>
                  	<option value="8">40</option>
                  	<option value="9">45</option>
                  	<option value="10">50</option>
                 	<option value="11">55</option>
                  </select>&nbsp;分&nbsp;</td>
            </tr>
             <tr>
              <td class="title"><span>※</span>備考</td>
              <td><textarea name="comment" cols="50" rows="5" id="comment"></textarea></td>
            </tr>
          </table>
		  </form>
		  <p class="checkbtm"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/inquiry/check.gif" width="135" height="40" alt="確認画面へ"></a></p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>