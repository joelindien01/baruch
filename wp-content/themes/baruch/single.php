<?php get_header("new"); ?>
<!-- Begin Content Section -->
<section class="mt40 mb40">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
               <?php while ( have_posts() ) : the_post(); ?>
				<div class="blog-post">

					<?php the_post_thumbnail('full', array('class' => 'img-responsive full-width')); ?>
					<div class="blog-post-holder">
						<ul class="list-inline posted-info">

							<li>Posté le, <?php the_date("d-m-Y");?></li>
						</ul>
						<hr align="left" class="mt15 mb10" style="width:50px;">
						<h2><a href="#"><?php the_title() ;?></a></h2>
                        <?php the_content() ;?>
						</div>

					<div class="blog-comment mt30">
                        <?php comments_template(); ?>

					</div>
					<?php /* <div class="panel panel-default no-margin">
						<div class="panel-body">
							<form>
								<textarea class="form-control counted" name="message" placeholder="Type in your comment" rows="5" style="margin-bottom:10px;"></textarea>
								<h6 class="pull-right" id="counter">320 characters remaining</h6>
								<button class="btn btn-rw btn-info" type="submit">Leave Comment</button>
							</form>
						</div>
					</div> */ ?>
				</div>
               <?php endwhile; ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section><!-- /content -->
<!-- End Content Section -->

<?php get_footer("new"); ?>