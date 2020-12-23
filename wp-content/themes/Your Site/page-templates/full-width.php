<?php
   /*
   * Template Name: Blog
   */
   
   get_header(); ?>
<div class="container">
   <div class="row m-3 p-3">
      <?php
         $args = array(
             	'category_name' => 'blog-en',
           'posts_per_page' => 12,
           'orderby' => 'date',
         
         		);
         
         $child_pages=new WP_Query($args);
         
         
         while($child_pages->have_posts()): $child_pages->the_post();
         		$image_id = get_post_thumbnail_id();
         $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
         $image_title = get_the_title($image_id);
         
         ?>	
      <div class="col-sm-3">
         <a img title = "<?php echo $image_title; ?>" href="<?php the_permalink()?>">
         <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid mx-auto d-block article-latest-img" alt = "<?php echo $image_alt; ?>"> </a>
         <div class="m-2">
            <h5 class="blog-title"><?php the_title(); ?></h5>
            <p class="article-posts2">
            <p class="text-small"><?php echo wp_trim_words (get_the_content(), 20, '...');?>
            </p>
            <a id="readbtn"; target="_blank" href="<?php the_permalink()?>" class ="btn btn-view3"> Read More </a>
         </div>
      </div>
      <?php endwhile; wp_reset_postdata();?>
   </div>
</div>
<?php
get_footer();