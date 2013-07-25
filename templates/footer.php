

<footer id="contact" class="content-info"  role="contentinfo">

<div class="wrapper footer-wrapper">
  
        <?php 
           // Custom widget Area Start
           if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer_1') ) : ?>
          <?php endif;
          // Custom widget Area End
          ?>              

		
			 <div class="footer-logo">
				<img alt="logo" src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png">
			</div>
		
		 <?php 
           // Custom widget Area Start
           if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer_2') ) : ?>
          <?php endif;
          // Custom widget Area End
          ?> 	


	<div class="copyright">		
    	We Are Thought Fox Ltd, Registered in England and Wales, no. 8051628.
	</div>

</div>		
</footer>

<!-- Optimized Google Analytics -->
  <script>var _gaq=[['_setAccount','UA-39223787-1'],['_trackPageview']];(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.src='//www.google-analytics.com/ga.js';s.parentNode.insertBefore(g,s)}(document,'script'))</script>
  


<?php wp_footer(); ?>