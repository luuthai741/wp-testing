<?php
function display_filter_hooks(){
    global $wp_filter;
    $main_array = $wp_filter;
    if (is_array($wp_filter)){
        foreach ($main_array as $hook => $details){
            echo '<strong style="font-size: 20px"' . $hook . '</strong>' . '</br>';
            foreach ($details as $priority => $func_array){
                echo '<p style="color: blue; margin-bottom: 1px">'. 'Priority: ' .$priority . '</p>';
                if (is_array($func_array)){
                    foreach ($func_array as $func_details){
                        if ($func_details['function'] && $func_details['accepted_args']){
                            print_r($func_details['function']) . ' (' . 'var count: '. $func_details['accepted_args'];
                        }
                    }
                }
            }
        }
    }
}
display_filter_hooks();
