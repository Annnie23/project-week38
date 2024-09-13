<?php

function blog_theme_setup() {
    add_theme_support("title-tag");

    register_nav_menus(array(
        "primary" => "Primary Menu",
        "footer"  => "Footer Menu"
    ));
}
add_action("after_setup_theme", "blog_theme_setup");

function blog_theme_load_resources() {

    wp_enqueue_style("blog-theme-style", get_template_directory_uri() . "/style.css");

}
add_action("wp_enqueue_scripts", "blog_theme_load_resources");

function enqueue_custom_scripts() {
    wp_enqueue_script('menu-toggle', get_template_directory_uri() . '/js/menu-toggle.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');



function my_custom_register_strings() {
    pll_register_string('404_title', '404 - Page Not Found', 'my-text-domain');
    pll_register_string('404_description', 'Sorry, but the page you were trying to view does not exist.', 'my-text-domain');
    pll_register_string('404_help_links', 'Here are some helpful links instead:', 'my-text-domain');
    pll_register_string('404_back_to_home', 'Back to Home', 'my-text-domain');
    pll_register_string('404_view_community', 'View Community', 'my-text-domain');

    pll_register_string('select_language', 'Select Language', 'my-text-domain');

    pll_register_string('instagram_handle', '@LifeBelowWater', 'my-text-domain');
    pll_register_string('facebook_handle', 'Life Below Water', 'my-text-domain');
    pll_register_string('footer_link_1', 'UN World Goals', 'my-text-domain');
    pll_register_string('footer_link_2', 'ReSea Project', 'my-text-domain');
    pll_register_string('footer_link_3', 'World Cleanup Day', 'my-text-domain');
    pll_register_string('footer_link_4', 'Cartel Copenhagen', 'my-text-domain');

    pll_register_string('no_comments', 'No comments yet', 'my-text-domain');
    pll_register_string('one_comment', '1 Comment', 'my-text-domain');
    pll_register_string('multiple_comments', '%d Comments', 'my-text-domain');
}
add_action('init', 'my_custom_register_strings');


?>




