<?php
/**
 * Register support for Gutenberg wide images in your theme
 */
function headless_wordpress_theme_setup() {
  add_theme_support( 'align-wide' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'editor-styles');
}

add_action( 'after_setup_theme', 'headless_wordpress_theme_setup' );

// Add custom style for gutenberg editor
function headless_wordpress_add_editor_styles() {
	add_editor_style( 'style-editor.css' );
}
add_action( 'admin_init', 'headless_wordpress_add_editor_styles' );


// Register location of menu
function headless_wordpress_custom_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'headless_wordpress_custom_menu' );
