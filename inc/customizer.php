<?php

/** Refined Themes Customizer Settings which controls all the settings under Appearance > Theme Editor. DO NOT EDIT **/

/**
	* Create Logo Setting and Upload Control
	*/
		function refined_new_customizer_settings($wp_customize) {

			// add a setting for the site logo
			$wp_customize->add_setting('refined_logo');
			// Add a control to upload the logo
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'refined_logo',
			array(
			'label' => 'Upload Logo',
			'section' => 'title_tagline',
			'settings' => 'refined_logo',
			) ) );

			//add a section for the site footer
			$wp_customize->add_section('footer_settings_section', array(
				'title' => 'Footer Options'
			));

			$wp_customize->add_setting('text_setting', array(
				'default' => 'Copyright Refined Themes Ltd',
			));

			$wp_customize->add_control( 'text_setting', array(
				'label' => 'Enter your footer text here',
				'section' => 'footer_settings_section',
				'type' => 'textarea',
			));

			// add new section
			$wp_customize->add_section( 'archive_theme_colors', array(
				'title' => __( 'Theme Colors', 'archive' ),
				'priority' => 100,
			) );

			// add color picker setting
			$wp_customize->add_setting( 'link_color', array(
				'default' => '#ffffff'
			) );

			// add color picker setting
			$wp_customize->add_setting( 'text_color', array(
				'default' => '#ffffff'
			) );

			// add color picker control
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'link_color', array(
				'label' => 'Link Color',
				'section' => 'archive_theme_colors',
				'settings' => 'link_color',
			) ) );

		}
		add_action('customize_register', 'refined_new_customizer_settings');

?>