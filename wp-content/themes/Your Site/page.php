<?php

get_header(); ?>

<?php
	$default_sidebar_position = get_theme_mod( 'default_sidebar_position', 'right' );
?>
 <div class="contact-body">
		<div class="container">
		 <div class="row m-5 px-5">
			 <div class="col-md-12">
				  
			 <?php the_field ('contact_us')?> 
				 
				 </div>
				 	 
			 </div>
					    

    </div>
	 </div>
	 
	 
	
<?php
get_footer();
