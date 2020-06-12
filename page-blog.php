<?php
/**
* Template Name: Blog Page Template
*
* @package Refined_Official
*/

get_header();

?>
<main>
	<div class="section group">
		<?php dynamic_sidebar( $index ); ?>
		<div class="col span_6_of_12">

			<?php 

				// the query
			   	$wp_query = new WP_Query( array(
				    'category_name' => 'technology',
				    'posts_per_page' => 3,
			   	)); 

			?>

			<?php if ( $wp_query->have_posts() ) :
				while ( have_posts() ) : the_post();
			?>
			<div class="blog-box">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="featured"><?php the_post_thumbnail( 'blog-list' ); ?></div>
				<h4>Published on <?php the_time('F jS, Y') ?> by <?php the_author(); ?></h4>
				<p><?php the_excerpt(); ?></p>
			</div>
			<?php endwhile; ?>

			<?php else: echo "There is nothing ..."; ?>
			<?php endif; wp_reset_postdata(); ?>
		</div>

		<div class="col span_6_of_12">

			<?php 

				// the query
			   	$wp_query = new WP_Query( array(
				    'category_name' => 'news',
				    'posts_per_page' => 3,
			   	)); 

			?>

			<?php if ( $wp_query->have_posts() ) :
				while ( have_posts() ) : the_post();
			?>
			<div class="blog-box">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="featured"><?php the_post_thumbnail( 'blog-list' ); ?></div>
				<h4>Published on <?php the_time('F jS, Y') ?> by <?php the_author(); ?></h4>
				<p><?php the_excerpt(); ?></p>
			</div>
			<?php endwhile; ?>

			<?php else: echo "There is nothing ..."; ?>
			<?php endif; wp_reset_postdata(); ?>
		</div>
	</div>
</main>

<?php get_footer(); ?>