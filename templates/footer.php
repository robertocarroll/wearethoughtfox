

<footer id="contact" class="content-info"  role="contentinfo">

<div class="wrapper footer-wrapper">
  
        <?php 
           // Custom widget Area Start
           if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer_1') ) : ?>
          <?php endif;
          // Custom widget Area End
          ?>              

		
			 <div class="footer-logo">
				<img alt="logo" src="<?php bloginfo('template_directory'); ?>/assets/images/logo.jpg">
			</div>
		

	<div class="copyright darkest-grey centre padding-below">		
    	We Are Thought Fox Ltd, Registered in England and Wales, no. 8051628.
	</div>

</div>		
</footer>

<?php wp_footer(); ?>