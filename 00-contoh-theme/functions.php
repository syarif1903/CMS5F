<?php
function adelaide_theme_setup() {
    // Menambahkan dukungan untuk gambar fitur
    add_theme_support('post-thumbnails');

    // Mengelola title tag
    add_theme_support('title-tag');

    // Menambahkan dukungan untuk menu navigasi
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'adelaide-theme'),
    ));

    // Menambahkan dukungan untuk sidebar
    function adelaide_widgets_init() {
        register_sidebar(array(
            'name' => __('Main Sidebar', 'adelaide-theme'),
            'id' => 'main-sidebar',
            'description' => __('Sidebar utama di sebelah kanan.', 'adelaide-theme'),
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ));
    }
    add_action('widgets_init', 'adelaide_widgets_init');
}
add_action('after_setup_theme', 'adelaide_theme_setup');
?>
