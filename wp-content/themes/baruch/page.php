<?php get_header("new"); ?>


<?php if (have_posts()) : while (have_posts()) : the_post();
	the_content();
endwhile; endif; ?>


    <!-- Begin Content Section -->
    <section class="mt40 mb40">
        <div class="container">
            <div class="row">

                <!-- Blog Posts -->
                <div class="col-sm-8">
                    <div class="blog-post mb40">
                        <img class="img-responsive full-width" src="images/backgrounds/stock10.jpg" alt="">
                        <div class="blog-post-holder">
                            <ul class="list-inline posted-info">
                                <li>By <a href="#">Denis Samardjiev</a></li>
                                <li>In <a href="#">Design</a></li>
                                <li>Posted January 1, 2015</li>
                            </ul>
                            <hr align="left" class="mt15 mb10" style="width:50px;">
                            <h2><a href="#">This is the offical post of the blog</a></h2>
                            <p>Nullam elementum tincidunt massa, a pulvinar leo ultricies ut. Ut fringilla lectus tellus, imperdiet molestie est volutpat at. Sed viverra cursus nibh, sed consectetur ipsum sollicitudin sed. Cras erat est, euismod id congue sed, sollicitudin sed odio. Nullam non metus in mi rhoncus efficitur...</p>
                            <a href="#" class="btn btn-rw btn-primary mt10">Read more</a>
                        </div>
                    </div>
                    <div class="blog-post mb40">
                        <img class="img-responsive full-width" src="images/backgrounds/stock11.jpg" alt="">
                        <div class="blog-post-holder">
                            <ul class="list-inline posted-info">
                                <li>By <a href="#">Denis Samardjiev</a></li>
                                <li>In <a href="#">Design</a></li>
                                <li>Posted January 1, 2015</li>
                            </ul>
                            <hr align="left" class="mt15 mb10" style="width:50px;">
                            <h2><a href="#">Another post about something, seaguls</a></h2>
                            <p>Nullam elementum tincidunt massa, a pulvinar leo ultricies ut. Ut fringilla lectus tellus, imperdiet molestie est volutpat at. Sed viverra cursus nibh, sed consectetur ipsum sollicitudin sed. Cras erat est, euismod id congue sed, sollicitudin sed odio. Nullam non metus in mi rhoncus efficitur...</p>
                            <a href="#" class="btn btn-rw btn-primary mt10">Read more</a>
                        </div>
                    </div>
                    <nav class="text-center">
                        <ul class="pagination no-margin">
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
                        </ul>
                    </nav>
                </div>

                <!-- Sidebar -->
                <div class="col-sm-4">
                    <div class="content-box content-box-bordered mt30-xs mb30">
                        <span class="ion-beaker bordered-icon-sm"></span>
                        <h4 class="pt15">Our Blog</h4>
                        <p class="no-margin">Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Integer a elit turpis. Phasellus non varius mi.</p>
                    </div>

                    <div class="blog-heading"><h3>About</h3></div>
                    <p class="mb30">Vivamus quis est a metus tincidunt viverra. Morbi condimentum tempor libero at cursus. Etiam sollicitudin venenatis arcu id vulputate. Phasellus in pharetra lorem, non suscipit mauris.</p>

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="#posts" role="tab" data-toggle="tab">Posts</a></li>
                        <li><a href="#info" role="tab" data-toggle="tab">Info</a></li>
                    </ul>
                    <div class="tab-content mb30">
                        <div class="tab-pane in active" id="posts">
                            <ul class="media-list">
                                <li class="media">
                                    <a class="pull-left" href="#"><img class="media-object" src="http://lorempixel.com/output/city-q-c-80-80-5.jpg" width="80" height="80" alt="image"></a>
                                    <div class="media-body">
                                        <p class="media-heading"><a href="#">Lorem ipsum dolor sit amet aut consectetur adipisicing elitl libero</a></p>
                                        <small>5 Jan, 2015<br><em><a href="#">Web,</a> <a href="#">Webdesign</a></em></small>
                                    </div>
                                </li>
                                <li class="media">
                                    <a class="pull-left" href="#"><img class="media-object" src="http://lorempixel.com/output/technics-q-c-80-80-9.jpg" width="80" height="80" alt="image"></a>
                                    <div class="media-body">
                                        <p class="media-heading"><a href="#">Lorem ipsum dolor sit amet in consectetur adipisicing</a></p>
                                        <small>17 Jan, 2015<br><em><a href="#">Artificial Intelligence</a></em></small>
                                    </div>
                                </li>
                                <li class="media">
                                    <a class="pull-left" href="#"><img class="media-object" src="http://lorempixel.com/output/animals-q-c-80-80-3.jpg" width="80" height="80" alt="image"></a>
                                    <div class="media-body">
                                        <p class="media-heading"><a href="#">Sit amet consectetur adipisicing elit incidunt minus</a></p>
                                        <small>23 Jan, 2015<br><em><a href="#">Art,</a> <a href="#">Lifestyles</a></em></small>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane" id="info">Donec tristique dignissim nisi, quis fermentum quam. Sed turpis ipsum, tempor vel malesuada ac, pharetra eu nunc. Aliquam condimentum mauris eget justo aliquam, in rhoncus libero egestas.
                            <a href="pages-about-1.html" class="btn btn-rw btn-primary btn-sm mt10">About</a></div>
                    </div>
                    <!-- End Nav tabs -->

                    <div class="blog-heading"><h3>Recent Posts</h3></div>
                    <ul class="list-unstyled latest-posts">
                        <li>
                            <h3 class="no-margin"><a href="#">Wireframe for the news view...</a></h3>
                            <small>5 Jan, 2015 / <a href="#">Web,</a> <a href="#">Webdesign</a></small>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam odio leo.</p>
                        </li>
                        <li>
                            <h3 class="no-margin"><a href="#">It is a long established fact that a reader</a></h3>
                            <small>17 Jan, 2015 / <a href="#">Artificial Intelligence</a></small>
                            <p>Pellentesque efficitur blandit dui, porta cursus velit imperdiet sit amet.</p>
                        </li>
                        <li>
                            <h3 class="no-margin"><a href="#">The point of using Lorem Ipsum</a></h3>
                            <small>19 Jan, 2015 / <a href="#">Hi-Tech,</a> <a href="#">Technology</a></small>
                            <p>Phasellus ullamcorper pellentesque ex. Cras venenatis elit orci, vitae dictum elit egestas a. Nunc nec auctor mauris, semper scelerisque nibh.</p>
                        </li>
                        <li>
                            <h3 class="no-margin"><a href="#">Many desktop publishing packages...</a></h3>
                            <small>23 Jan, 2015 / <a href="#">Art,</a> <a href="#">Lifestyles</a></small>
                            <p class="no-border">Integer vehicula sed justo ac dapibus. In sodales nunc non varius accumsan.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!-- /content -->
    <!-- End Content Section -->


<?php get_footer("new"); ?>