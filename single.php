<?php
/*
 * Template Name: Single Post
 * Template Post Type: post
 */
  
 get_header();  ?>
    <main class="posts">
    	<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post(); ?>

				<h1><?php the_title(); ?></h1>
				<h4>Published on <?php the_time('F jS, Y') ?> by <?php the_author(); ?></h4>

				<p class="post-content"><?php the_content(); ?></p>

				<?php the_tags( 'Tags: ', ', ', '<br />' ); ?>


				<?php
				//If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

				posts_nav_link();

			endwhile; // End of the loop.
		?>
   	</main>

 <?php get_footer(); ?>