<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ZeliOrganic
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area col-lg-4 col-md-5">
	<div class="blog__sidebar">
		<div class="blog__sidebar__search">
			<form action="#">
				<input type="text" placeholder="Search...">
				<button type="submit"><span class="icon_search"></span></button>
			</form>
		</div>
		<div class="blog__sidebar__item">
			<h4>Các thể loại</h4>
			<ul>
				<li><a href="#">All</a></li>
				<li><a href="#">Beauty (20)</a></li>
				<li><a href="#">Food (5)</a></li>
				<li><a href="#">Life Style (9)</a></li>
				<li><a href="#">Travel (10)</a></li>
			</ul>
		</div>
		<div class="blog__sidebar__item">
			<h4>Tin tức gần đây</h4>
			<div class="blog__sidebar__recent">
			<?php 
				$args = array(
					'post_status' => 'publish',
					'orderby'=> 'date',
    				'order'=> 'DESC', 
					'showposts' => 3, 
				);
			?>
			<?php $getposts = new WP_query($args); ?>
			<?php global $wp_query; $wp_query->in_the_loop = true; ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

				<a href="<?php the_permalink(); ?>" class="blog__sidebar__recent__item">
					<div class="blog__sidebar__recent__item__pic">
						<?php the_post_thumbnail(); ?>
					</div>
					<div class="blog__sidebar__recent__item__text">
						<h6><?php the_title(); ?></h6>
						<span><?php echo get_the_date('M d, Y'); ?></span>
					</div>
				</a>
			<?php endwhile; wp_reset_postdata(); ?>				
			</div>
		</div>
		<div class="blog__sidebar__item">
			<h4>Tìm kiếm với</h4>
			<div class="blog__sidebar__item__tags">
				<a href="#">Apple</a>
				<a href="#">Beauty</a>
				<a href="#">Vegetables</a>
				<a href="#">Fruit</a>
				<a href="#">Healthy Food</a>
				<a href="#">Lifestyle</a>
			</div>
		</div>
	</div>
</aside><!-- #secondary -->
