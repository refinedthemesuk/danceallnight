<?php
/* Refined Themes Functions file. DO NOT EDIT */

/**
* Customizer additions.
*/
require get_template_directory() . '/inc/customizer.php';
require_once dirname( __FILE__ ) . '/inc/class-tgm-plugin-activation.php';

/** MerlinWP (Theme Setup) **/
require_once get_parent_theme_file_path( '/inc/merlin/vendor/autoload.php' );
require_once get_parent_theme_file_path( '/inc/merlin/class-merlin.php' );
require_once get_parent_theme_file_path( '/inc/merlin-config.php' );

//Tells MerlinWP where to find the demo content
function merlin_local_import_files() {
    return array(
        array(
            'import_file_name'             => 'Demo Import',
            'local_import_file'            => get_parent_theme_file_path( 'content/content-danceallnight.xml' ),
            'import_notice'                => __( 'A special note for this import.', 'danceallnight' ),
            'preview_url'                  => 'https://refinedthemes.com/dandemo',
        ),
    );
}
add_filter( 'merlin_import_files', 'merlin_local_import_files' );


// This function adds menus under Appearance > Themes
function wpb_main_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
  register_nav_menu('second-menu',__( 'Second Menu' ));
}
add_action( 'init', 'wpb_main_menu' );

//show widgets in admin area
	function arphabet_widgets_init() {

    register_sidebar( array(
        'name' => 'right_sidebar',
        'id' => 'home_right_1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    ));

    register_sidebar( array(
        'name' => 'contact_sidebar',
        'id' => 'contact_right_1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    )    

     );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );

	// Add Featured Images
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'blog-list', 450, 245, true );
		add_image_size( 'post-page', 810, 456, true );
		//set_post_thumbnail_size( 590, 321, true );


// Theme Colours
function archive_customizer_head_styles() {
    $link_color = get_theme_mod( 'link_color' ); 
    
    if ( $link_color != '#ffffff' ) :
    ?>
        <style type="text/css">
            a {
                color: <?php echo $link_color; ?>;
            }
        </style>
    <?php
    endif;

    $text_color = get_theme_mod( 'text_color' ); 
    
    if ( $text_color != '#ffffff' ) :
    ?>
        <style type="text/css">
            p {
                color: <?php echo $text_color; ?>;
            }
        </style>
    <?php
    endif;
}
add_action( 'wp_head', 'archive_customizer_head_styles' );


add_action( 'tgmpa_register', 'danceallnight_register_required_plugins' );

function danceallnight_register_required_plugins() {
    /*
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(

        // WordPress Plugin Repo
        array(
            'name'      => 'Elementor',
            'slug'      => 'elementor',
            'required'  => true,
        ),

        array(
            'name'      => 'The Events Calendar',
            'slug'      => 'the-events-calendar',
            'required'  => true,
        ),
        array(
            'name'      => 'Events Addon for Elementor',
            'slug'      => 'events-addon-for-elementor',
            'required'  => true,
        ),

    );

    /*
     * Array of configuration settings. Amend each line as needed.
     */
    $config = array(
        'id'           => 'danceallnight',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
    );

    tgmpa( $plugins, $config );
}


?>