<?php
/**
 * The Header for Customizr.
 *
 * Displays all of the <head> section and everything up till <div id="main-wrapper">
 *
 * @package Customizr
 * @since Customizr 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<link rel="stylesheet"  href="http://cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css" media="all">
<!--<![endif]-->
	<?php
		//the '__before_body' hook is used by TC_header_main::$instance->tc_head_display()
		do_action( '__before_body' );
	?>

	<body <?php body_class(); ?> <?php echo apply_filters('tc_body_attributes' , 'itemscope itemtype="http://schema.org/WebPage"') ?>>

    <?php do_action( '__before_page_wrapper' ); ?>

    <div id="tc-page-wrap" class="<?php echo implode( " ", apply_filters('tc_page_wrap_class', array() ) ) ?>">
    <div class="bdsharebuttonbox"><a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"2","bdSize":"32"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>

  		<?php do_action( '__before_header' ); ?>

  	   	<header class="<?php echo implode( " ", apply_filters('tc_header_classes', array('tc-header' ,'clearfix', 'row-fluid') ) ) ?>" role="banner">
  			<?php
  				// The '__header' hook is used with the following callback functions (ordered by priorities) :
  				//TC_header_main::$instance->tc_logo_title_display(), TC_header_main::$instance->tc_tagline_display(), TC_header_main::$instance->tc_navbar_display()
  				do_action( '__header' );
  			?>
  		</header>
  		<?php
  		 	//This hook is used for the slider : TC_slider::$instance->tc_slider_display()
  			do_action ( '__after_header' )
  		?>
      <script type="text/javascript">
      jQuery( document ).ready(function() {
         var IfIsHome = jQuery('.carousel').hasClass('home-slider');
         var IfIsContact = jQuery('.carousel').hasClass('contact-us');
         var IfIsAbout= jQuery('.carousel').hasClass('aboutus');

         if(IfIsHome){
            jQuery('body').addClass('cms-home');
          } else if(IfIsContact){
            jQuery('body').addClass('cms-contact-us');
          } else if(IfIsAbout){
            jQuery('body').addClass('cms-about-us');
          }
    
    });


    
      </script>