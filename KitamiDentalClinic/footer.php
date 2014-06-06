<!--Footer-->
<div class="footerbg">
  <div class="footer">
    <footer>
		<div class="fwp">
  			<div class="fLink">
    			<ul class="link01">
      				<li><span><a href="<?php echo home_url('/'); ?>">ホーム</a></span></li>
      				<li>歯科案内</li>
      				<li class="dentLi"><a href="<?php echo get_page_link(9); ?>">一般歯科</a></li>
      				<li class="dentLi"><a href="<?php echo get_page_link(11); ?>">矯正歯科</a></li>
      				<li class="dentLi"><a href="<?php echo get_page_link(13); ?>">インプラント</a></li>
      				<li><a href="<?php echo get_page_link(15); ?>">ドクター紹介</a></li>
      				<li><a href="<?php echo get_page_link(17); ?>">アクセス</a></li>
      			</ul>
    			<ul class="link02">
      				<li><a href="<?php echo get_page_link(19); ?>">スタッフブログ</a></li>
      				<li><a href="<?php echo get_page_link(21); ?>">お問い合わせ</a></li>
                    <li><a href="<?php echo get_page_link(23); ?>">オンライン予防</a></li>
      				<li><a href="<?php echo get_page_link(25); ?>">求人情報</a></li>
      				<li><a href="<?php echo get_page_link(27); ?>">サイトマップ</a></li>
      			</ul>
  			</div>
  			<div class="access">
    			<div class="aText">
      				<h3>Access アクセス</h3>
      				<p>〒530-0034<br>大阪府大阪市北区錦町4-33</p>
                    <p class="tel">TEL&nbsp;06-639-8149</p>
      			</div>
    		<p class="aImg"><img src="<?php bloginfo('template_url'); ?>/images/access/accesssml.png" width="200" height="200" alt="アクセスイメージ"></p>
  		</div>
	</div>
	<p class="cr">&copy;&nbsp;2014&nbsp;<?php bloginfo('name'); ?></p>
    </footer>
  </div>
</div>
<p id="toPageTop"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/pageTop.png" width="40" height="110" alt="ページトップ" /></a></p>
<?php wp_footer(); ?>
</body>
</html>
