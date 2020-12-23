<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_4
 */

?>

    </div>
    <!-- #content -->

    <div class="container-fluid bg-dark">
        <!-- fluid-bgdark -->
        <!-- Footer -->
        <footer>

            <div class="container">
                <div class="row">

                    <div class="col-7 mt-3 ">

                        <img src="https://stalinks.com/wp-content/uploads/2020/01/stalinksss.png">

                        <p class="text-justify"> <?php  the_field('footer_description',pll_current_language('slug')); ?> </p>

                        <div class="d-inline p-2 float-left ">
                            <!-- icons -->

<!--                             <a href="#"> <i class="fab fa-facebook p-2 icons mx-2"></i> </a>
                            <a href="#"> <i class="fab fa-instagram p-2 icons mx-2"></i></a>
                            <a href="#"> <i class="fab fa-twitter p-2 icons mx-2"></i> </a>
                            <a href="#"> <i class="fab fa-google p-2 icons mx-2"></i> </a> -->

                        </div>
                        <!-- icons -->

                    </div>

                    <div class="col-1">

                        <!-- dummy -->
                    </div>

                    <div class="col-4 mt-3 p-3 ">

                 <h4 class="text-uppercase font-weight-bold blog-text ml-5 mb-3"> <?php echo get_field('footer_article_title',pll_current_language('slug')); ?></h4>
 <ul>

					      <?php
					        $column_1 = get_field('footer_articles',pll_current_language('slug'));
					        if($column_1 != ""){ ?>
					          <?php foreach ($column_1 as $column_1s) {
					            ?>
									<li class="mb-2"><a title="<?php echo $column_1s['article_title']; ?>" style="text-decoration:none!important; color:#787777;" href="<?php echo $column_1s['article_link']; ?>" target="_blank"><?php echo $column_1s['article_title']; ?></a></li>
					            <?php
					            }
					          ?>
					      <?php } ?>
					</ul>

                    </div>

                </div>
            </div>

            <?php wp_footer(); ?>
        </footer>
        <!-- Footer -->

    </div>
    <!-- fluid-bgdark -->

    <!-- Footer Text -->

    <div class="site-info p-3 text-center">
        <?php echo get_field('footer_text',pll_current_language('slug')); ?>
    </div>
    <!-- Footer Text -->

    </body>

    </html>