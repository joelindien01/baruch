<?php wp_footer(); ?>

<!-- Begin Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">


            <!-- Social -->
            <div class="col-sm-12 mg25-xs">
                <div class="heading-footer"><h4>Contacts</h4></div>
<?php

$args = array( 'post_type' => 'team', 'posts_per_page' => 1, 'category_name'=>'accueil' );
$loop = new WP_Query( $args );
global $more;


if(have_posts()): while ( $loop->have_posts() ) : $loop->the_post();

    $facebook = get_post_meta($post->ID,'_facebook',true);
    $linkedin = get_post_meta($post->ID,'_linkedin',true);
    $github = get_post_meta($post->ID,'_github',true);
    $twitter = get_post_meta($post->ID,'_twitter',true);
    $mail = get_post_meta($post->ID,'_mail',true);

    ?>

                <a href="<?php echo $twitter ?>" class="btn btn-social-icon btn-titter btn-lg">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="mailto:<?php echo $mail ?>" class="btn btn-social-icon btn-envelope btn-lg">
                    <i class="fa fa-envelope"></i>
                </a>
                <a href="<?php echo $facebook ?>" class="btn btn-social-icon btn-faebook btn-lg">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="<?php echo $linkedin ?>" class="btn btn-social-icon btn-linedin btn-lg">
                    <i class="fa fa-linkedin"></i>
                </a>


<?php endwhile; endif;?>
            </div>
        </div><!-- /row -->

        <!-- Copyright -->
        <div class="row">
            <hr class="dark-hr">
            <div class="col-sm-11 col-xs-10">
                <p class="copyright">© 2015<b> Baruch Amoussou-Djangan</b>.</p>
            </div>
            <!--<div class="col-sm-1 col-xs-2 text-right">
                <a href="#" class="scroll-top"><div class="footer-scrolltop-holder"><span class="footer-scrolltop">up</span></div></a>
            </div>-->
        </div><!-- /row -->
    </div><!-- /container -->
</footer><!-- /footer -->
<!-- End Footer -->


</div><!-- /boxed -->
	</div><!-- /bg boxed-->
	<!-- End Boxed or Fullwidth Layout -->
	
	<!-- Javascript Files -->
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/hover-dropdown.js"></script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.easing.min.js"></script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.mixitup.min.js"></script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/scrollReveal.js"></script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.snippet.min.js"></script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.fitvids.js"></script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/style-switcher.js"></script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/activate-snippet.js"></script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/skrollr.min.js"></script>
    <script>
		var config = {
		easing: 'hustle',
		mobile:  true,
		delay:  'onload'
		}
		window.sr = new scrollReveal( config );
    </script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/main.js"></script>
</body>
</html>