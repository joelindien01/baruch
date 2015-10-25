
<div class="col-sm-4">


 <!-- Nav tabs -->
 <ul class="nav nav-tabs" role="tablist">
  <li class="active"><a href="#posts" role="tab" data-toggle="tab">Articles</a></li>
  <li><a href="#info" role="tab" data-toggle="tab">A propos</a></li>
 </ul>
 <div class="tab-content mb30">
  <div class="tab-pane in active" id="posts">
   <ul class="media-list">
       <?php
       query_posts('category_name=sidebar&showposts=4');
       global $more;
       if(have_posts()): while(have_posts()) :the_post();
       ?>
    <li class="media">
     <a class="pull-left" href="<?php the_permalink(); ?>">
         <?php the_post_thumbnail('media-object', array('class' => 'media-object'));
         /*<img class="media-object" src="http://lorempixel.com/output/city-q-c-80-80-5.jpg" width="80" height="80" alt="image">*/
         ?>

     </a>
     <div class="media-body">
      <p class="media-heading"><a href="<?php the_permalink(); ?>"><?php the_title() ; ?></a></p>
         <small><?php the_time('d-m-Y'); ?> </small>
         <br>
     </div>
    </li>
       <?php endwhile; endif;?>
   </ul>
  </div>
  <div class="tab-pane" id="info">
      <?php
      query_posts('category_name=about&showposts=1');
      global $more;
      if(have_posts()): while(have_posts()) :the_post();

       the_excerpt() ;
      endwhile; endif;?>
      </div>
 </div>
 <!-- End Nav tabs -->
 <?php dynamic_sidebar("Principal"); ?>


