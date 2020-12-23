<?php
   /**
    * The header for our theme
    *
    * This is the template that displays all of the <head> section and everything up until <div id="content">
    *
    * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
    *
    * @package WP_Bootstrap_4
    */
   
   ?>
<!doctype html>
<html <?php language_attributes(); ?>>
   <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="profile" href="http://gmpg.org/xfn/11">
      <link href="https://fonts.googleapis.com/css?family=Raleway:500&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
      <?php wp_head(); ?>
      <!-- Matomo -->
      <script type="text/javascript">
         var _paq = window._paq || [];
         /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
         _paq.push(['trackPageView']);
         _paq.push(['enableLinkTracking']);
         (function() {
           var u="//piwik.stalinks.com/";
           _paq.push(['setTrackerUrl', u+'matomo.php']);
           _paq.push(['setSiteId', '1']);
           var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
           g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
         })();
      </script>
      <!-- End Matomo Code -->
   </head>
   <body <?php body_class(); ?>>
      <div id="page" class="site">
         <a class="skip-link screen-reader-text" href="#content">
         <?php esc_html_e( 'Skip to content', 'wp-bootstrap-4' ); ?>
         </a>
         <header id="masthead" class="site-header <?php if ( get_theme_mod( 'sticky_header', 0 ) ) : echo 'sticky-top'; endif; ?>">
            <div class="container-fluid bg-green p-4">
               <div class="container">
                  <div class="row">
					   <div class="col-md-12">
					  <ul class="nav justify-content-end">
  <li class="nav-item mr-3">
     <a href="http://tools.stalinks.com" target="_blank">
                        <button type="button" class="btn btn-login bg-btn text-small"> LOG IN </button>
                        </a>
  </li>
  <li class="nav-item">
     <a href="http://tools.stalinks.com/registration" target="_blank">
                        <button type="button" class="btn btn-signup bg-btn text-small"> SIGN UP </button>
                        </a>
  </li>
 
</ul>
						     </div>
                    
                    
                  </div>
               </div>
            </div>
            <div class="container-fluid bg-light ">
               <div class="container">
                  <div class="row">
                     <div class="col-md-4 mt-2">
                        <?php
                           if (is_front_page() && is_home()) : ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="navbar-brand mb-0"><img src="https://stalinks.com/wp-content/uploads/2020/01/Capture.png"></a>
                        <!--	<?php bloginfo('name'); ?></h1> -->
                        <?php else : ?>
                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="navbar-brand mb-0"> <img src="https://stalinks.com/wp-content/uploads/2020/01/Capture.png"></a>
                        <!--	<?php bloginfo('name'); ?></h2>-->
                        <?php
                           endif;
                           
                           ?>
                     </div>
                     <div class="ml-auto col-md-8 ">
                        <?php
                           wp_nav_menu( array(
                           	'theme_location'  => 'menu-1',
                           	'menu_id'         => 'primary-menu',
                           	'container'       => 'div',
                           	'container_class' => 'collapse navbar-collapse',
                           	'container_id'    => 'primary-menu-wrap',
                           	'menu_class'      => 'navbar-nav ml-auto',
                                     'fallback_cb'     => '__return_false',
                                     'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                     'depth'           => 2,
                                     'walker'          => new WP_bootstrap_4_walker_nav_menu()
                           ) );
                           ?>
                        <?php if( get_theme_mod( 'header_within_container', 0 ) ) : ?>
                        <i class="fas fa-shopping-cart"></i>
                     </div>
                  </div>
                  <!-- /.container -->
                  <?php endif; ?>
                  </nav>
                  <!-- #site-navigation -->
               </div>
            </div>
      </div>
      </div>
      </header>
      <!-- #masthead -->
      <script type="text/javascript">
         $(function() {
             $('.selectpicker').selectpicker();
         });
      </script>