<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ZeliOrganic
 */

get_header();
	while ( have_posts() ) : the_post(); 
?>
    <!-- Blog Details Hero Begin -->
    <section class="blog-details-hero set-bg" data-setbg="<?php echo get_the_post_thumbnail_url(); ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog__details__hero__text">
                        <h2> <?php the_title();?> </h2>
                        <ul>
                            <li>By <?php the_author();?> </li>
                            <li><?php the_date('M d, Y'); ?></li>
                            <li><?php echo get_comments_number() ?> Comments</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero End -->

<!-- Blog Details Section Begin -->
<section class="blog-details spad">
	<div class="container">
		<div class="row"> 
			<?php get_sidebar(); ?>
			<main id="primary" class="site-main col-lg-8 col-md-7 order-md-1 order-1">
				<div class="blog__details__text">
				<?php the_content(); ?>
				</div>
				<div class="blog__details__content">
					<div class="row">
						<div class="col-lg-6">
							<div class="blog__details__author">
								<div class="blog__details__author__pic">
									<img src="<?php bloginfo('template_url'); ?>/assets/img/blog/details/details-author.jpg" alt="">
								</div>
								<div class="blog__details__author__text">
									<h6>Zeliux</h6>
									<span>Admin</span>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="blog__details__widget">
								<ul>
									<li><span>Thể loại:</span> <?php echo get_the_category()[0]->name ; ?></li>
									<li><span>Tags:</span> <?php $posttags = get_the_tags();if ($posttags) {foreach($posttags as $tag) {echo $tag->name . ' ';}} else { echo "None";}; ?></li>
								</ul>
								<div class="blog__details__social">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
									<a href="#"><i class="fa fa-envelope"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main><!-- #main -->
		</div>
	</div> 
</section>
<?php
endwhile; // End of the loop.
get_footer();
