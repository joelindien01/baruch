<?php get_header(); ?>
<!-- Home -->
<section id="home" class="fill">
    <div class="home-background parallax-section">
        <div class="container-fluid">
            <div class="row">
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
                <div class="home-box col-xs-12">
                    <div>
                        <?php the_post_thumbnail('accueil'); ?>
                        <!--<img src="/images/avatar.jpg" alt="">-->
                        <h1><?php the_title(); ?></h1>
                        <p><?php the_content(); ?></p>

                    </div>
                    <div class="social">
                        <ul>
                            <li><a href="<?php echo $facebook ?>"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="<?php echo $twitter ?>"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="<?php echo $linkedin ?>"><i class="fa fa-linkedin"></i></a></li>
                           <!-- <li><a href="<?php /*echo $github */?>"><i class="fa fa-github-alt"></i></a></li>-->
                            <li><a href="mailto:<?php echo $mail ?>"><i class="fa fa-envelope"></i></a></li>
                        </ul>
                    </div>
                </div>
                <?php endwhile; endif;?>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
</section>
<!-- end Home -->

<!-- Education -->
<?php /*
<section id="education">
    <div class="container-fluid">
        <div class="row">
            <div class="section-background col-xs-12 col-sm-6" data-mh="match-edu">
                <!--<h2>A propos</h2>-->


                <!--<ul class="resume-box">
                    <li>
                        <div class="year" data-mh="match-edu-box-1">
                            <div>
                                <h4>2012-2014</h4>
                                <span>Master Degree</span>
                            </div>
                        </div>
                        <div class="box-content" data-mh="match-edu-box-1">
                            <h4>Computer University</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        </div>
                    </li>
                    <li>
                        <div class="year" data-mh="match-edu-box-2">
                            <div>
                                <h4>2010-2012</h4>
                                <span>Bachelor Degree</span>
                            </div>
                        </div>
                        <div class="box-content" data-mh="match-edu-box-2">
                            <h4>Design University</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        </div>
                    </li>
                    <li>
                        <div class="year" data-mh="match-edu-box-3">
                            <div>
                                <h4>2008-2010</h4>
                                <span>Bachelor Degree</span>
                            </div>
                        </div>
                        <div class="box-content" data-mh="match-edu-box-3">
                            <h4>Science University</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        </div>
                    </li>
                </ul>-->
            </div>
            <!-- Skills -->
            <div class="skills-background col-xs-12 col-sm-6" style="height:640px">
                <div class="black-layer">
                    <div class="middle-content">
                        <!-- Skill 1 -->
                        <div class="skill-bar">
                            <input type="text" value="0" data-number="90" class="dial">
                            <h4>HTML5</h4>
                        </div>
                        <!-- Skill 2 -->
                        <div class="skill-bar">
                            <input type="text" value="0" data-number="75" class="dial">
                            <h4>PHP</h4>
                        </div>
                        <!-- Skill 3 -->
                        <div class="skill-bar">
                            <input type="text" value="0" data-number="85" class="dial">
                            <h4>CSS3</h4>
                        </div>
                        <!-- end Skill 3 -->
                    </div>
                </div>
            </div><!-- end Skills -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!-- end Education -->

*/
?>

<!-- Portfolio -->
<?php /*
 <!-- Experience -->
<section id="experience">
    <div class="container-fluid">
        <div class="row">
            <div class="section-background col-xs-12 col-sm-6 col-sm-push-6" style="height:640px">
                <h2>Experience</h2>
                <ul class="resume-box">
                    <li>
                        <div class="year" data-mh="match-exp-box-1">
                            <div>
                                <h4>2013-2015</h4>
                                <span>ThemeForest</span>
                            </div>
                        </div>
                        <div class="box-content" data-mh="match-exp-box-1">
                            <h4>Front-End Developer</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        </div>
                    </li>
                    <li>
                        <div class="year" data-mh="match-exp-box-2">
                            <div>
                                <h4>2011-2013</h4>
                                <span>PhotoDune</span>
                            </div>
                        </div>
                        <div class="box-content" data-mh="match-exp-box-2">
                            <h4>Photographer</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        </div>
                    </li>
                    <li>
                        <div class="year" data-mh="match-exp-box-3">
                            <div>
                                <h4>2009-2011</h4>
                                <span>GraphicRiver</span>
                            </div>
                        </div>
                        <div class="box-content" data-mh="match-exp-box-3">
                            <h4>Graphic Designer</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Hire me -->
            <div class="hire-background col-xs-12 col-sm-6 col-sm-pull-6" data-mh="match-experience">
                <div class="white-layer">
                    <div class="middle-content">
                        <p>I'm Looking for a job</p>
                        <a href="#contact">Hire me</a>
                    </div>
                </div>
            </div>
            <!-- end Hire me -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!-- end Experience -->
 <section id="portfolio">
    <div class="container-fluid">
        <div class="row">
            <div class="section-background col-xs-12 col-sm-6" data-mh="match-portfolio">
                <h2>Portfolio</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
            </div>
            <div class="portfolio-content col-xs-12 col-sm-6" data-mh="match-portfolio">
                <div id="portfolioSlider" class="owl-carousel">
                    <!-- 1 -->
                    <div>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio-img-1.jpg" alt=""><!-- image url -->
                        <div class="image-layer">
                            <div class="image-title">
                                <h3>Project Title</h3>
                                <a class="lightbox-popup" href="#popup-1">view detail</a>
                            </div>
                        </div>
                        <!-- popup content -->
                        <div id="popup-1" class="mfp-hide popup-box">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio-img-1.jpg" alt=""><!-- image url -->
                            <div class="popup-content">
                                <h3>Project Title</h3>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla consequat massa quis enim.</p>
                            </div>
                        </div>
                        <!-- end popup content -->
                    </div>
                    <!-- 2 -->
                    <div>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio-img-2.jpg" alt=""><!-- image url -->
                        <div class="image-layer">
                            <div class="image-title">
                                <h3>Project Title</h3>
                                <a class="lightbox-popup" href="#popup-2">view detail</a>
                            </div>
                        </div>
                        <!-- popup content -->
                        <div id="popup-2" class="mfp-hide popup-box">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio-img-2.jpg" alt=""><!-- image url -->
                            <div class="popup-content">
                                <h3>Project Title</h3>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla consequat massa quis enim.</p>
                            </div>
                        </div>
                        <!-- end popup content -->
                    </div>
                    <!-- end 2 -->
                </div>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!-- end Portfolio -->

<!-- Services -->

<section id="services">
    <div class="container-fluid">
        <div class="row">
            <div class="section-background col-xs-12 col-sm-6 col-sm-push-6" style="height:640px">
                <h2>Services</h2>
                <!-- Service box 1 -->
                <div class="service-box">
                    <div>
                        <i class="fa fa-laptop"></i>
                    </div>
                    <div>
                        <h4>Web Development</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                    </div>
                </div>
                <!-- Service box 2 -->
                <div class="service-box">
                    <div>
                        <i class="fa fa-bar-chart"></i>
                    </div>
                    <div>
                        <h4>Analytics</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                    </div>
                </div>
                <!-- Service box 3 -->
                <div class="service-box">
                    <div>
                        <i class="fa fa-pencil"></i>
                    </div>
                    <div>
                        <h4>Web Design</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                    </div>
                </div>
                <!-- Service box 4 -->
                <div class="service-box">
                    <div>
                        <i class="fa fa-camera-retro"></i>
                    </div>
                    <div>
                        <h4>Photography</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                    </div>
                </div>
                <!--  Service box 5 -->
                <div class="service-box">
                    <div>
                        <i class="fa fa-apple"></i>
                    </div>
                    <div>
                        <h4>Mobile Application</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                    </div>
                </div>
                <!-- Service box 6 -->
                <div class="service-box">
                    <div>
                        <i class="fa fa-support"></i>
                    </div>
                    <div>
                        <h4>Support</h4>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                    </div>
                </div>
                <!-- end Service box 6 -->
            </div>
            <!-- Facts -->
            <div class="facts-background col-xs-12 col-sm-6 col-sm-pull-6" data-mh="match-services">
                <div class="black-layer">
                    <div class="middle-content">
                        <!-- Fact box 1 -->
                        <div class="fact-box">
                            <p data-to="127" data-append="+">0</p>
                            <h4>Cups of coffee</h4>
                        </div>
                        <!-- Fact box 2 -->
                        <div class="fact-box">
                            <p data-to="10" data-append="+">0</p>
                            <h4>Projects Done</h4>
                        </div>
                        <!-- Fact box 3 -->
                        <div class="fact-box">
                            <p data-to="300" data-append="+">0</p>
                            <h4>Happy Clients</h4>
                        </div>
                        <!-- end Fact box 3 -->
                    </div>
                </div>
            </div><!-- end Facts -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!-- end Services -->

<!-- Testimonial -->

<section id="testimonial">
    <div class="container-fluid">
        <div class="row">
            <div class="section-background col-xs-12 col-sm-6" data-mh="match-testimonial">
                <h2>Testimonial</h2>
                <!-- Testimonial box 1 -->
                <div class="testimonial-box clearfix">
                    <div>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/t-img-1.jpg" alt="">
                    </div>
                    <div>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean commodo ligula eget dolor. Phasellus viverra nulla ut metus varius laoreet.</p>
                        <h4>John Doe</h4>
                    </div>
                </div>
                <!-- Testimonial box 2 -->
                <div class="testimonial-box clearfix">
                    <div>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/t-img-1.jpg" alt="">
                    </div>
                    <div>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean commodo ligula eget dolor. Phasellus viverra nulla ut metus varius laoreet.</p>
                        <h4>Kathy Daniels</h4>
                    </div>
                </div>
                <!-- Testimonial box 3 -->
                <div class="testimonial-box clearfix">
                    <div>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/t-img-1.jpg" alt="">
                    </div>
                    <div>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean commodo ligula eget dolor. Phasellus viverra nulla ut metus varius laoreet.</p>
                        <h4>Alan Bates</h4>
                    </div>
                </div>
                <!-- end Testimonial box 3 -->
            </div>
            <!-- Clients -->
            <div class="clients-background col-xs-12 col-sm-6" data-mh="match-testimonial">
                <div class="white-layer">
                    <div class="middle-content">
                        <div id="clientSlider" class="owl-carousel">
                            <!-- Client box 1 -->
                            <div class="client-box">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/client-1.png" alt="">
                            </div>
                            <!-- Client box 2 -->
                            <div class="client-box">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/client-1.png" alt="">
                            </div>
                            <!-- Client box 3 -->
                            <div class="client-box">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/client-1.png" alt="">
                            </div>
                            <!-- Client box 4 -->
                            <div class="client-box">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/client-1.png" alt="">
                            </div>
                            <!-- Client box 5 -->
                            <div class="client-box">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/client-1.png" alt="">
                            </div>
                            <!-- Client box 6 -->
                            <div class="client-box">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/client-1.png" alt="">
                            </div>
                            <!-- end Client box 6 -->
                        </div>
                    </div>
                </div>
            </div><!-- end Clients -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!-- end Testimonial -->

<!-- Contact -->
<section id="contact">
    <div class="container-fluid">
        <div class="row">
            <div class="section-background col-xs-12 col-sm-6 col-sm-push-6" data-mh="match-contact">
                <h2>Get In Touch</h2>
                <ul class="info">
                    <li>
                        <i class="fa fa-map-marker"></i>
                        <span>Street Road, City, 123</span>
                    </li>
                    <li>
                        <i class="fa fa-envelope"></i>
                        <span>alexander@example.com</span>
                    </li>
                    <li>
                        <i class="fa fa-phone"></i>
                        <span>+(123) 456 789</span>
                    </li>
                </ul>
                <form method="post" id="contactform">
                    <div class="input-style">
                        <input type="text" id="name" name="name" placeholder="Name">
                    </div>
                    <div class="input-style">
                        <input type="email" id="email" name="email" placeholder="E-Mail">
                    </div>
                    <div class="text-style">
                        <textarea name="message" id="message" placeholder="Message"></textarea>
                    </div>
                    <input type="submit" id="submit" class="submit-style" name="submit" value="Send Message">
                    <div class="submit-result">
                        <p id="success">Your Message has been sent!</p>
                        <p id="error">Something went wrong, go back and try again!</p>
                    </div>
                </form>
            </div>
            <div class="google-maps col-xs-12 col-sm-6 col-sm-pull-6" data-mh="match-contact">
                <div id="map-canvas"></div>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<!-- end Contact --> */
 get_footer(); ?>
			