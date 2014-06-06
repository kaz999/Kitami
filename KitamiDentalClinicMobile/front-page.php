<?php get_header(); ?>
<!--Contents Start-->
    <div data-role="content">
		<!--歯科案内-->
        <h2><img src="<?php bloginfo('template_url'); ?>/images/home/mainv01.jpg" width="595" height="300" alt="北見デンタルクリニック"></h2>
      	<ul class="dent" data-dividertheme="a" data-inset="true" data-role="listview">
        	<li data-role="list-divider">歯科案内</li>
        	<li ><a href="<?php echo get_page_link(9); ?>"><img src="<?php bloginfo('template_url'); ?>/images/home/smoll04.jpg" >一般歯科について</a></li>
        	<li><a href="<?php echo get_page_link(11); ?>"><img src="<?php bloginfo('template_url'); ?>/images/home/smoll01.jpg" >矯正歯科について</a></li>
        	<li><a href="<?php echo get_page_link(13); ?>"><img src="<?php bloginfo('template_url'); ?>/images/home/smoll02.jpg" >インプラントについて</a></li>
      	</ul>
		<!--更新情報-->
      	<ul class="nList" data-dividertheme="a" data-inset="true" data-role="listview">
          <li data-role="list-divider">News 更新情報</li>
      	  <li>
      	    <h6>2014/08/10</h6>
      	    <p>モバイルに対応しました。</p>
    	  </li>
      	  <li>
      	    <h6>2014/07/06</h6>
      	    <p>スタッフブログを公開しました。</p>
    	  </li>
      	  <li>
      	    <h6>2014/03/21</h6>
      	    <p>オンライン予約・お問い合わせ機能<br>
            を追加しました。</p>
    	  </li>
      	  <li>
      	    <h6>2014/01/18</h6>
      	    <p>サイトをリニューアルしました。</p>
    	  </li>
   	 	</ul>
    	<!--ドクター紹介・アクセス・求人リンク-->
        <nav data-role="navbar">
        	<ul class="navList">
            	<li><a href="<?php echo get_page_link(15); ?>"  data-icon="star">ドクター紹介</a></li>
                <li><a href="<?php echo get_page_link(17); ?>" data-icon="info">アクセス</a></li>
                <li><a href="<?php echo get_page_link(25); ?>" data-icon="check">求人情報</a></li>
            </ul>
        </nav>
		<!--スタッフブログ-->
    	<ul class="bList" data-dividertheme="a" data-inset="true" data-role="listview">
          <li data-role="list-divider">Staff Blog スタッフブログ</li>
      	  <li>
      	    <h6>2014/07/01</h6>
      	    <p><a href="<?php echo get_page_link(19); ?>">定期健診について。</a></p>
    	  </li>
      	  <li>
      	    <h6>2014/06/01</h6>
      	    <p><a href="<?php echo get_page_link(19); ?>">歯石除去をご検討ください。</a></p>
    	  </li>
      	  <li>
      	    <h6>2014/05/01</h6>
      	    <p><a href="<?php echo get_page_link(19); ?>">正しい歯磨きを心掛けましょう。</a></p>
    	  </li>
   	 	</ul>
    </div>
<!--Contents End-->
<?php get_footer(); ?>