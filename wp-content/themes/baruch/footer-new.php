<?php wp_footer(); ?>
			<!-- Begin Footer -->
			<footer class="footer">
				<div class="container">
					<div class="row">
						<!-- About -->
						<div class="col-sm-4">
						<?php

                                    query_posts('category_name=footer1&showposts=1');

                                    if(have_posts()): while(have_posts()) :the_post(); ?>
					
							<div class="heading-footer"><h4> <?php the_title(); ?></h4></div>
							<p><?php the_content(); ?></p>
							 <?php endwhile; endif;?>
						</div>
						
						<!-- Social -->
						<div class="col-sm-4 mb30-xs">
											
					
							<div class="heading-footer"><h4>Réseaux sociaux</h4></div>
							
							<a class="btn btn-social-icon btn-facebook btn-lg" href="https://www.facebook.com/digitimmo.net">
								<i class="fa fa-facebook"></i>
							</a>
							
							<a class="btn btn-social-icon btn-google-plus btn-lg" href="#">
								<i class="fa fa-google-plus"></i>
							</a>
							
						</div>

						<!-- Contact -->
						<div class="col-sm-4 mg25-xs">
						<?php

                                    query_posts('category_name=footer3&showposts=1');

                                    if(have_posts()): while(have_posts()) :the_post(); ?>
					
							<div class="heading-footer"><h4><?php the_title(); ?></h4></div>
							<?php the_content(); ?>
							<?php endwhile; endif;?>
						</div>

						
					</div><!-- /row -->

					<!-- Copyright -->
					<div class="row">
						<hr class="dark-hr">
						<div class="col-sm-11 col-xs-10">
							<p class="copyright">© 2015 DIGITIMMO. All rights reserved. </p>
						</div>
						<div class="col-sm-1 col-xs-2 text-right">
							<a href="#" class="scroll-top"><div class="footer-scrolltop-holder"><span class="ion-ios7-arrow-up footer-scrolltop"></span></div></a>
						</div>
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