<?php get_header("new"); ?>

<!--
--><?php /*if (have_posts()) : while (have_posts()) : the_post();
	the_content();
endwhile; endif; */?>

    <!-- Begin Content Section -->
    <section class="mt40 mb40">
        <div class="container">
            <div class="row">

                <!-- Blog Posts -->
                <div class="col-sm-8">
<?php
query_posts('category_name=blog&showposts=2');

if(have_posts()): while(have_posts()) :the_post();
    ?>
                    <div class="blog-post mb40">
                        <?php
                        /*<img class="img-responsive full-width" src="images/backgrounds/stock10.jpg" alt="">*/
                        the_post_thumbnail('full', array('class' => 'img-responsive full-width')); ?>

                        <div class="blog-post-holder">
                            <ul class="list-inline posted-info">

                                <li>Posté le <?php the_time('m-d-Y'); ?></li>
                            </ul>
                            <hr align="left" class="mt15 mb10" style="width:50px;">
                            <h2><a href="#"><?php the_title() ;?></a></h2>
                            <p><?php /*the_content() ;*/?> </p>
                            <?php the_excerpt(); ?>
                           <!-- <a href="<?php echo get_post_meta($post->ID,'_lien',true); ?>" class="btn btn-rw btn-primary mt10">Read more</a> -->
                        </div>
                    </div>

<?php wp_paginate(); endwhile;


endif;?>
                   <?php  ?>

                    <nav class="text-center">
                        <!--<ul class="pagination no-margin">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>-->
                    </nav>

                </div>

                <!-- Sidebar -->
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section><!-- /content -->
    <!-- End Content Section -->


<?php get_footer("new"); ?>
