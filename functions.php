<?php

function lbh_load_scripts_and_styles() {
    wp_enqueue_style("main", get_stylesheet_directory_uri()."/dist/css/index.css");
    wp_enqueue_script("main", get_stylesheet_directory_uri()."/dist/js/index.js");
}
add_action("wp_enqueue_scripts", "lbh_load_scripts_and_styles");
