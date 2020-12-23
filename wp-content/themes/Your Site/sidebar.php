<?php

$dafault_wordpress_sidebar = get_field('dafault_wordpress_sidebar','options');

?>

<aside id="secondary" class="widget-area sidebar-1-area mt-3r card">
	<?php 
		if($dafault_wordpress_sidebar == "Yes"){
			dynamic_sidebar( 'sidebar-1' );
		}else{
			?>
				<section id="search-2" class="widget border-bottom widget_search">
					<h2 class = "text-right" >Dynamic or Custom Sidebar</h2><br />
					<p>This sidebar is optional. you can use default wordpress sidebar or this custom sidebar</p>
					<p>Just tick yes or no in the options tab "Default Wordpress Side Bar"</p>
					<p>The file for this sidebar is <b>sidebar.php</b></p>
				</section>
			<?php
		}

	?>
</aside><!-- #secondary -->
