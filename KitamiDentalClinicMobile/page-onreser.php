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
  <div data-role="page" id="rean" data-theme="a">
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
    <h2><img src="<?php bloginfo('template_url'); ?>/images/access/mvImageo.jpg" width="820" height="180" alt="お問い合わせ"></h2>
      <h3>オンライン予約|Reservation</h3>
      <form action="reservationck.html" method="post">
      <div data-role="fieldcontain" class="ui-hide-label">
        <fieldset data-role="controlgroup">
          <legend>診断(初診/再診):</legend>
          <input type="radio" name="shindan" id="sd1" value=""  />
          <label for="sd1">初診</label>
          <input type="radio" name="shindan" id="sd2" value="" />
          <label for="sd2">再診</label>
        </fieldset>
      </div>
      <div data-role="fieldcontain" class="ui-hide-label">
        <label for="name_r">お名前:</label>
        <input type="text" name="name_r" id="name_r" value="" placeholder="お名前" />
      </div>
      <div data-role="fieldcontain" class="ui-hide-label">
        <label for="kana_r">フリガナ:</label>
        <input type="text" name="kana_r" id="kana_r" value="" placeholder="フリガナ" />
      </div>
	  <div data-role="fieldcontain" class="ui-hide-label">
        <label for="mail_r">メールアドレス:</label>
        <input type="email" name="mail_r" id="mail_r" value="" placeholder="メールアドレス" />
      </div>
      <div data-role="fieldcontain" class="ui-hide-label">
        <label for="mailck_r">メールアドレス確認:</label>
        <input type="email" name="mailck_r" id="mailck_r" value="" placeholder="メールアドレス確認" />
      </div>
      <div data-role="fieldcontain" class="ui-hide-label">
        <label for="tel_r">電話番号:</label>
        <input type="tel" name="tel_r" id="tel_r" value="" placeholder="電話番号" />
      </div>
      <div data-role="fieldcontain" class="ui-hide-label">
        <label for="tel_r">郵便番号:</label>
        <input type="number" name="tel_r" id="tel_r" value="" placeholder="郵便番号" />
      </div>
      <div data-role="fieldcontain" class="ui-hide-label">
        <label for="selectmenu" class="select">都道府県:</label>
        <select name="selectmenu" id="selectmenu" data-native-menu="false">
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
        </select>
      </div>
      <div data-role="fieldcontain" class="ui-hide-label">
        <label for="address_r">住所(市区郡):</label>
        <input type="text" name="address_r" id="address_r" value="" placeholder="住所(市区郡)" />
      </div>
      <div data-role="fieldcontain" class="ui-hide-label">
        <label for="kibo01_d">第1希望日:</label>
        <input type="data" name="kibo01_d" id="kibo01_d" value="" placeholder="第1希望日" />
      </div>
      <div data-role="fieldcontain" class="ui-hide-label">
        <label for="kibo01_t">第1希望時間:</label>
        <input type="time" name="kibo01_t" id="kibo01_t" value="" placeholder="第1希望時間" />
      </div>
      <div data-role="fieldcontain" class="ui-hide-label">
        <label for="kibo02_d">第2希望日:</label>
        <input type="data" name="kibo02_d" id="kibo02_d" value="" placeholder="第2希望日" />
      </div>
      <div data-role="fieldcontain" class="ui-hide-label">
        <label for="kibo02_t">第2希望時間:</label>
        <input type="time" name="kibo02_t" id="kibo02_t" value="" placeholder="第2希望時間" />
      </div>
      <div data-role="fieldcontain" class="ui-hide-label">
        <label for="kibo03_d">第3希望日:</label>
        <input type="data" name="kibo03_d" id="kibo03_d" value="" placeholder="第3希望日" />
      </div>
      <div data-role="fieldcontain" class="ui-hide-label">
        <label for="kibo03_t">第3希望時間:</label>
        <input type="time" name="kibo03_t" id="kibo03_t" value="" placeholder="第3希望時間" />
      </div>
      <div data-role="fieldcontain" class="ui-hide-label">
        <label for="textarea_r">備考:</label>
        <textarea cols="40" rows="8" name="textarea_r" id="textarea_r" placeholder="お問い合わせ内容"></textarea>
      </div>
      <input type="submit" value="確認画面へ">
      </form>
    </div>
<?php get_footer(); ?>