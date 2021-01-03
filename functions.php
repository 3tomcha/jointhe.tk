<?php
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
function enqueue_styles() {
    wp_enqueue_style( 'dist', get_template_directory_uri() . '/dist/style.css', false );
}
register_sidebar([
    'name' => 'サイドバー',
    'id' => 'sidebar',
    'description' => 'サイドバーウィジェット',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
]);