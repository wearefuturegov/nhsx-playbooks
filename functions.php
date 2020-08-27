<?php

function nhsx_load_scripts_and_styles() {
    wp_enqueue_style("main", get_stylesheet_directory_uri()."/dist/css/index.css");
    wp_enqueue_script("main", get_stylesheet_directory_uri()."/dist/js/index.js");
}
add_action("wp_enqueue_scripts", "nhsx_load_scripts_and_styles");


add_theme_support("post-thumbnails");


function nhsx_custom_excerpt_length( $length ) {
    return 15;
}
add_filter( 'excerpt_length', 'nhsx_custom_excerpt_length', 999 );

function nhsx_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'nhsx_excerpt_more');


function nhsx_custom_post_types_init() {
    register_post_type("case_study", array(
        "label" => __("Case studies"),
        "public" => true,
        "show_in_rest" => true,
        "menu_icon" => "dashicons-book",
        "show_in_nav_menus"     => true,
        "supports" => array("title", "editor", "thumbnail")
    ));
}
add_action("init", "nhsx_custom_post_types_init");


function nhsx_create_custom_taxonomies() { 
    register_taxonomy('scenarios', 'case_study', array(
      "hierarchical" => true,
      'show_ui' => true,
      'show_admin_column' => true,
      'query_var' => true,
      'labels' => array(
          'name' => "Scenarios"
      )
    ));

    register_taxonomy('pathway_step', 'case_study', array(
        "hierarchical" => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'labels' => array(
            'name' => "Pathway steps"
        )
      ));
  }
  add_action('init', 'nhsx_create_custom_taxonomies', 0 );