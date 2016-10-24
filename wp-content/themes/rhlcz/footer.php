<?php
 /**
 * The template for displaying the footer.
 *
 *
 * @package Customizr
 * @since Customizr 3.0
 */
  	do_action( '__before_footer' ); ?>
  		<!-- FOOTER -->
		<footer id="footer" class="<?php echo tc__f('tc_footer_classes', '') ?>">
  		 	<?php do_action( '__footer' ); // hook of footer widget and colophon?>
  		</footer>
      <div class="container" style="display:none">
        <section class="row">
          <div class="span 8 left">
            <ul> 
                <li>销售热线：（86）-21-56468279</li>
				<li>邮箱：<a href="mailto:ownwin@vip.126.com">ownwin@vip.126.com</a></li> 
           </ul>
         </div>
         <div class="right span2">
		 <ul>
			<li>客服热性：（86）-0-18962690817</li>
			<li>邮箱：<a href="mailto:sht12015@vip.126.com">sht12015@vip.126.com</a></li>
		 </ul>
         </div>
         <div class="span2">
             <ul>
			<li>友情链接：</li>
			<li><a href="http://www.richardhough.co.uk">www.richardhough.co.uk</a></li>
			<li><a href="http://nccmco.com/">http://nccmco.com/</a></li>
		 </ul>
          </div>
      </section>
      </div>
    

    </div><!-- //#tc-page-wrapper -->
		<?php
    do_action( '__after_page_wrap' );
		wp_footer(); //do not remove, used by the theme and many plugins
	  do_action( '__after_footer' ); ?>
	</body>
	<?php do_action( '__after_body' ); ?>
</html>