<?php
   /*
   * Template Name: Contact Viet
   */
 
get_header(); ?>

<?php
	$default_sidebar_position = get_theme_mod( 'default_sidebar_position', 'right' );
?>
 <div class="contact-body">
		<div class="container">
		 <div class="row m-5 px-5">
			 <div class="col-md-12">
				  

                     <?php
				the_content();

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-bootstrap-4' ),
					'after'  => '</div>',
				) );
			?>

                  
				 
				 
				 </div>
				 	 
			 </div>
					    

    </div>
	 </div>
	 
	 
	 
	
<?php
get_footer();
