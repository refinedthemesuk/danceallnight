<footer>
	<?php
			// check to see if the footer exists, if not show default text
			if ( get_theme_mod( 'text_setting' ) ) : ?>
				<p><?php echo get_theme_mod( 'text_setting' ); ?></p>

				<?php // add a fallback if the footer text doesn't exist
					else : ?>
					 
					<p>Theme Designed by Refined Themes Ltd. &copy; 2020</p>
					 
				<?php endif; ?>

		<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/assets/js/nav.js'; ?>"></script>
		
		<?php wp_footer(); ?>
</footer>