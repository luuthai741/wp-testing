<?php

function sunset_admin_page()
{
    add_menu_page('Sunset Theme Options',
        'Sunset',
        'manage_options',
        'sunset',
        'sunset_theme_create_page',
        'dashicons-admin-customizer',
        110
    );

    add_submenu_page('sunset',
        'Sunset Settings',
        'Settings',
        'manage_options',
        'sunset-settings',
        'sunset_theme_setting_page',
        1);
    add_submenu_page('sunset',
        'Sunset Theme',
        'Theme',
        'manage_options',
        'sunset-theme',
        'sunset_theme_page',
        1);
    add_action('admin_init', 'add_sunset_settings_fields');
    add_action('admin_init', 'render_sunset_theme_fields');
}

add_action('admin_menu', 'sunset_admin_page');
function sunset_theme_create_page()
{
    require_once(get_template_directory() . '/templates/admin/sunset-index.php');
}

function sunset_theme_setting_page()
{
    require_once(get_template_directory() . '/templates/admin/sunset-setting.php');
}

function sunset_theme_page()
{
    require_once(get_template_directory() . '/templates/admin/sunset-theme.php');
}

function add_sunset_settings_fields()
{
    render_sunset_setting_fields();
    add_settings_field('sidebar-profile-picture', 'Profile Picture', 'sunset_sidebar_profile', 'sunset-settings', 'sunset-setting-options');
}

function render_sunset_setting_fields()
{
    $setting_fields = array(
        [
            'name' => 'first_name',
            'title' => 'Họ',
            'id' => 'first-name',
            'type' => 'text',
        ],
        [
            'name' => 'sur_name',
            'title' => 'Tên',
            'id' => 'sur-name',
            'type' => 'text',
        ],
        [
            'name' => 'age',
            'title' => 'Tuổi',
            'id' => 'age',
            'type' => 'number',
        ],
    );
    // CREATE SECTION
    add_settings_section('sunset-setting-options', 'Setting Options', 'sunset_setting_options', 'sunset-settings');
    for ($index = 0; $index < count($setting_fields); $index++) {
        $name = $setting_fields[$index]['name'];
        $title = $setting_fields[$index]['title'];
        $type = $setting_fields[$index]['type'];
        $id = $setting_fields[$index]['id'];
        // ĐĂNG KÝ NAME VÀO GROUP
        register_setting('sunset-settings-group', $name);
        // ĐĂNG KÝ FIELD RA SECTION
        add_settings_field($id,
            $title,
            'add_sunset_setting_field',
            'sunset-settings',
            'sunset-setting-options',
            array(
                'name' => $name,
                'type' => $type,
            ));
    }
}

function render_sunset_theme_fields()
{
    $options = ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'];
    // CREATE SECTION
    add_settings_section('sunset-theme-options',
        'Setting Theme Options',
        'sunset_setting_options',
        'sunset-theme');
    foreach ($options as $option) {
        // ĐĂNG KÝ NAME VÀO GROUP
        register_setting('sunset-theme-group', $option);
        add_settings_field($option,
            $option,
            'add_sunset_theme_option',
            'sunset-theme',
            'sunset-theme-options',
            $option);
    }
}


function sunset_sidebar_profile()
{
    $picture = esc_attr(get_option('profile_picture'));
    echo '<input type="button" class="button button-secondary" value="Upload Profile Picture" id=" "><input type="hidden" id="profile-picture" name="profile_picture" value="' . $picture . '" />';
}

function add_sunset_setting_field($data)
{
    $name = $data['name'];
    $type = $data['type'];
    // QUERY
    $value = esc_attr(get_option($name));
    echo '<input type="' . $type . '" name="' . $name . '" value="' . $value . '" />';
}

function add_sunset_theme_option($option)
{
    // QUERY
    $value = esc_attr(get_option($option));
    $check = !empty($value) && $value != "0" ? 'checked' : '';
    echo '<input type="checkbox" name="' . $option . '" '.$check.'/>';
}

function sunset_setting_options()
{

}