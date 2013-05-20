<?php 
	$format = get_post_format();
			
		if ( false === $format ) {
	
	?>
		<?php get_template_part( 'templates/content', 'single' ); ?>
		
		<?php 
		}
	
	else  {
	
	?>
		<?php get_template_part( 'templates/content', get_post_format() ); ?>
	
	<?php 
	}
	
?>