<?php get_header(); ?>
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
      <div class="cTop">
        <div class="mvInfo">
          <div class="box_skitter box_skitter_large">
            <ul>
              <li><img src="<?php bloginfo('template_url'); ?>/images/home/mainv01.jpg" class="cube">
              	  <div class="label_text"><p>image01</p></div></li>
              <li><img src="<?php bloginfo('template_url'); ?>/images/home/mainv06.jpg" class="horizontal">
              	  <div class="label_text"><p>image02</p></div></li>
              <li><img src="<?php bloginfo('template_url'); ?>/images/home/mainv02.jpg" class="block">
              	  <div class="label_text"><p>image03</p></div></li>
              <li><img src="<?php bloginfo('template_url'); ?>/images/home/mainv04.jpg" class="glassCube">
              	  <div class="label_text"><p>image04</p></div></li>
              <li><img src="<?php bloginfo('template_url'); ?>/images/home/mainv07.jpg" class="cubeSize">
              	  <div class="label_text"><p>image05</p></div></li>
            </ul>
          </div>
        </div>
        <div class="nInfo">
          <section>
            <h3><img src="<?php bloginfo('template_url'); ?>/images/home/news.gif" width="260" height="40" alt="News 更新情報"></h3>
            <div class="nBorder">
              <ul>
                <li class="nTime">2014/08/10</li>
               	<li>モバイルに対応しました。</li>
                <li class="nTime">2014/07/06</li>
               	<li>スタッフブログを公開しました。</li>
                <li class="nTime">2014/03/21</li>
               	<li>オンライン予約・お問い合わせ機能を追加しました。</li>
                <li class="nTime">2014/01/18</li>
               	<li class="liBtm">サイトをリニューアルしました。</li>
              </ul>
            </div>
          </section>
        </div>
      </div>
      <div class="cMiddle">
        <div class="dent01">
          <section>
            <h3><img src="<?php bloginfo('template_url'); ?>/images/home/dent01.gif" width="280" height="30" alt="一般歯科"></h3>
            <div class="cmBorder">
              <p class="cImg"><a href="<?php echo get_page_link(9); ?>"><img src="<?php bloginfo('template_url'); ?>/images/home/sImage01b_off.jpg" width="230" height="170" alt="一般歯科イメージ"></a></p>
              <p class="cText">虫歯治療・予防や歯周病の治療などを行います。<a href="<?php echo get_page_link(9); ?>">...詳細はこちらへ</a></p>
              </div>
            </section>
        </div>
        <div class="dent02">
          <section>
            <h3><img src="<?php bloginfo('template_url'); ?>/images/home/dent02.gif" width="280" height="30" alt="矯正歯科"></h3>
            <div class="cmBorder">
              <p class="cImg"><a href="<?php echo get_page_link(11); ?>"><img src="<?php bloginfo('template_url'); ?>/images/home/sImage03b_off.jpg" width="230" height="170" alt="矯正歯科イメージ"></a></p>
              <p class="cText">歯並びを整え、歯の機能性と見た目を改善します。<a href="<?php echo get_page_link(11); ?>">...詳細はこちらへ</a></p>
              </div>
            </section>
        </div>
        <div class="dent03">
          <section>
            <h3><img src="<?php bloginfo('template_url'); ?>/images/home/dent03.gif" width="280" height="30" alt="インプラント"></h3>
            <div class="cmBorder">
              <p class="cImg"><a href="<?php echo get_page_link(13); ?>"><img src="<?php bloginfo('template_url'); ?>/images/home/sImage02b_off.jpg" width="230" height="170" alt="インプラントイメージ"></a></p>
              <p class="cText">綿密	な治療計画で、失った歯を人口歯茎で補います。<a href="<?php echo get_page_link(13); ?>">...詳細はこちらへ</a></p>
              </div>
            </section>
        </div>
      </div>
      <div class="cBottom">
        <div class="recruit">
          <section>
            <h3><a href="<?php echo get_page_link(25); ?>"><img src="<?php bloginfo('template_url'); ?>/images/home/recruit_off.jpg" width="380" height="250" alt="求人募集"></a></h3>
            </section>
          </div>
        <div class="bInfo">
          <section>
            <h3><img src="<?php bloginfo('template_url'); ?>/images/home/staffblog.gif" width="475" height="36" alt="StaffBlog スタッフブログ更新情報"></h3>
            <div class="cbBorder">
              <p class="cbTop">2014/07/01<br>
                <span>定期健診について。定期健診を受けると虫<a href="<?php echo get_page_link(19); ?>">...続きを見る</a></span></p>
              <p>2014/06/01<br>
                <span>歯石除去をご検討ください。歯を健康に保<a href="<?php echo get_page_link(19); ?>">...続きを見る</a></span></p>
              <p class="cbbtm">2014/05/01<br>
                <span>正しい歯磨きを心掛けましょう。来店され<a href="<?php echo get_page_link(19); ?>">...続きを見る</a></span></p>
              </div>
            </section>
          </div>
        </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>