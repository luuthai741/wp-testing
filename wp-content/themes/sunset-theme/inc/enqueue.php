<?php
function load_sunset_admin_scripts($hook)
{
    if ($hook != 'toplevel_page_sunset'
        && $hook != 'sunset_page_sunset-settings') {
        return;
    }
    wp_register_style('admin_sunset', get_template_directory_uri() . '/css/sunset.admin.css', array(), '1.0.0');
    wp_enqueue_style('admin_sunset');
    wp_enqueue_media();
    wp_register_script('admin_sunset_script', get_template_directory_uri() . '/js/sunset.admin.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('admin_sunset_script');
}

add_action('admin_enqueue_scripts', 'load_sunset_admin_scripts');
