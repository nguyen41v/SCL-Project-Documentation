<?php
function my_theme_enqueue_styles() {
    // https://codex.wordpress.org/Child_Themes
    $parent_style = 'square-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_custom_sidebar() {
    register_sidebar(
        array (
            'name' => esc_html__( 'Custom Search', 'square-child' ),
            'id' => 'custom-search',
            'description' => '',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        )
    );
}
add_action( 'widgets_init', 'my_custom_sidebar' );
?>