<?php
   /* Template Name: Home */
   get_header(); ?>
<div class="container-fluid bg-lightgreen">
   <div class="text-center py-4">
      <img src="https://stalinks.com/wp-content/uploads/2020/01/Layer-12.png" alt="" width="745" height="256" class="mt-5 size-full wp-image-111  " />
   </div>
   <?php the_field ('introduction')?>
</div>
<div class="container">
   <div class="header-center text-center mt-5 mb-5">
      <?php the_field ('content_1')?>
   </div>
   <div class="row justify-center p-3">
      <div class="col">
         <img class="mx-auto d-block" src="https://stalinks.com/wp-content/uploads/2020/01/1.png">
         <div class=" text-center m-2 p-2">
            <?php the_field ('icon_1')?>
         </div>
      </div>
      <div class="col">
         <img class="mx-auto d-block" src="https://stalinks.com/wp-content/uploads/2020/01/2.png">
         <div class=" text-center m-2 p-2">
            <?php the_field ('icon_2')?>
         </div>
      </div>
      <div class="col">
         <img class="mx-auto d-block" src="https://stalinks.com/wp-content/uploads/2020/01/3.png">
         <div class=" text-center m-2 p-2">
            <?php the_field ('icon_3')?>
         </div>
      </div>
   </div>
   <div class="row m-4 p-4">
      <div class="col">
         <img class="mx-auto d-block" src="https://stalinks.com/wp-content/uploads/2020/01/4.png">
         <div class=" text-center m-2 p-2">
            <?php the_field ('icon_4')?>
         </div>
      </div>
      <div class="col">
         <img class="mx-auto d-block" src="https://stalinks.com/wp-content/uploads/2020/01/5.png">
         <div class=" text-center m-2 p-2">
            <?php the_field ('icon_5')?>
         </div>
      </div>
   </div>
</div>
<div class="container-fluid middle-bg ">
   <div class="text-center img-quote">
      <img src="https://stalinks.com/wp-content/uploads/2020/01/quote.png">
   </div>
   <div class="container ">
      <div class="bg-white">
         <?php
            echo do_shortcode('[slide-anything id="304"]');
         ?>
      </div>
   </div>
</div>
<div class="container">
      <div class="contact-form mb-5">
         <div class="header-center text-center mt-5 mb-5">
            <?php the_field ('content_2')?>
         </div>
         <?php the_field ('contact_us')?>
      </div>
</div>
<!-- /.container -->
<?php
get_footer();