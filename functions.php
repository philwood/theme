<?php

/* ------------ */
/* ADD JS & CSS */
/* ------------ */

add_action( 'wp_enqueue_scripts', 'register_jquery' );
function register_jquery() {
    if (!is_admin() && $GLOBALS['pagenow'] != 'wp-login.php') {
        // comment out the next two lines to load the local copy of jQuery
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', false, '1.11.2', true);
        wp_enqueue_script('jquery');
    }
}
add_action( 'wp_enqueue_scripts', 'lock_and_load' );
function lock_and_load() {
	wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '3.3.7' );
	wp_enqueue_style( 'fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css', array(), '4.6.3' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
	wp_enqueue_script( 'readyexec', get_template_directory_uri() . '/js/readyExec.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'smoothstate', get_template_directory_uri() . '/js/jquery.smoothState.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'runsmoothstate', get_template_directory_uri() . '/js/runSmoothState.js', array('jquery', 'smoothstate'), '0.1', true );
	wp_enqueue_script( 'menutoggle', get_template_directory_uri() . '/js/menuToggle.js', array('readyexec'), '0.1', true );
	wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), '3.3.7', true );
}

/* ---------------- */
/* ADD GOOGLE FONTS */
/* ---------------- */

add_action('wp_print_styles', 'add_google_fonts');
function add_google_fonts() {
    wp_register_style('OpenSans', 'https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');
    wp_enqueue_style( 'OpenSans');
}

/* ----------------- */
/* ADD THEME SUPPORT */
/* ----------------- */

/*
 * Dynamic header-title
 */

add_theme_support( 'title-tag' );

/*
 * Featured Images
 */

add_theme_support( 'post-thumbnails' );

/* ------------ */
/* COMMENT FORM */
/* ------------ */

/*
 * Restyle the comment form input fields
 */

add_filter( 'comment_form_default_fields', 'bootstrap3_comment_form_fields' );
function bootstrap3_comment_form_fields( $fields ) {
    $commenter = wp_get_current_commenter();
    
    $req      = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );
    $html5    = current_theme_supports( 'html5', 'comment-form' ) ? 1 : 0;
    
    $fields   =  array(
        'author' => '<div class="form-group comment-form-author">' . '<label for="author">' . __( 'Name' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                    '<input class="form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div>',
        'email'  => '<div class="form-group comment-form-email"><label for="email">' . __( 'Email' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                    '<input class="form-control" id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div>',
        'url'    => '<div class="form-group comment-form-url"><label for="url">' . __( 'Website' ) . '</label> ' .
                    '<input class="form-control" id="url" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></div>'        
    );
    
    return $fields;
}

/*
 * Restyle the comment textarea
 */

add_filter( 'comment_form_defaults', 'bootstrap3_comment_form' );
function bootstrap3_comment_form( $args ) {
    $args['comment_field'] = '<div class="form-group comment-form-comment">
            <label for="comment">' . _x( 'Comment', 'noun' ) . '</label> 
            <textarea class="form-control" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
        </div>';
    $args['class_submit'] = 'btn btn-default';
    
    return $args;
}

/* --------------- */
/* CUSTOM SETTINGS */
/* --------------- */

/*
 * Create an admin menu item
 */

add_action( 'admin_menu', 'custom_settings_add_menu' );
function custom_settings_add_menu() {
    add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99);
}

/*
 * Create Custom Global Settings
 */

function custom_settings_page() { ?>
    <div class="wrap">
        <?php if( isset($_GET['settings-updated']) ) { ?>
            <div id="message" class="updated">
                <p><strong><?php _e('Settings saved.') ?></strong></p>
            </div>
        <?php } ?>
        <h1>Custom Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('section');
            do_settings_sections('theme-options');      
            submit_button(); 
            ?>          
        </form>
    </div>
<?php }

/*
 * Twitter
 */

function setting_twitter() { ?>
    <input type="text" name="twitter" id="twitter" value="<?php echo get_option('twitter'); ?>" />
<?php }

/*
 * GitHub
 */

function setting_github() { ?>
    <input type="text" name="github" id="github" value="<?php echo get_option('github'); ?>" />
<?php }

/*
 * FaceBook
 */

function setting_facebook() { ?>
    <input type="text" name="facebook" id="facebook" value="<?php echo get_option('facebook'); ?>" />
<?php }

/*
 * Show and save
 */

add_action( 'admin_init', 'custom_settings_page_setup' );
function custom_settings_page_setup() {
    add_settings_section('section', 'All Settings', null, 'theme-options');
    add_settings_field('twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section');
    add_settings_field('google', 'Google+ URL', 'setting_google', 'theme-options', 'section');
    add_settings_field('facebook', 'FaceBook URL', 'setting_facebook', 'theme-options', 'section');
    add_settings_field('pinterest', 'Pinterest URL', 'setting_pinterest', 'theme-options', 'section');
    add_settings_field('youtube', 'YouTube URL', 'setting_youtube', 'theme-options', 'section');
  
    register_setting('section', 'twitter');
    register_setting('section', 'google');
    register_setting('section', 'facebook');
    register_setting('section', 'pinterest');
    register_setting('section', 'youtube');
}

/* --------------- */
/* FOOTER MENUS */
/* --------------- */

add_action( 'init', 'register_footer_menus' );
function register_footer_menus() {
  register_nav_menus(
    array(
      'footer-menu-1' => __( 'Footer Menu 1' ),
      'footer-menu-2' => __( 'Footer Menu 2' ),
      'footer-menu-3' => __( 'Footer Menu 3' ),
      'footer-menu-4' => __( 'Footer Menu 4' )
    )
  );
}

/*
 * Function to help display menu name
 */

function get_menu_by_location( $location ) {
    if( empty($location) ) return false;

    $locations = get_nav_menu_locations();
    if( ! isset( $locations[$location] ) ) return false;

    $menu_obj = get_term( $locations[$location], 'nav_menu' );

    return $menu_obj;
}



