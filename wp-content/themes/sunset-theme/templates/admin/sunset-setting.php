<h1>Sunset Setting Options</h1>
<?php
settings_errors();
?>
<?php
$first_name = esc_attr(get_option("first_name"));
$sur_name = esc_attr(get_option("sur_name"));
$age = esc_attr(get_option("age"));
?>
<div class="sunset-sidebar-preview ">
    <div class="sunset-sidebar">
        <h1 class="sunset-username"><?php print $first_name ?></h1>
        <h1 class="sunset-username"><?php print $sur_name ?></h1>
        <h1 class="sunset-username"><?php print $age ?></h1>
    </div>
</div>
<form method="post" action="options.php">
    <?php
    // LẤY NHỮNG NAME ĐƯỢC ĐĂNG KÝ TỪ GROUP
    settings_fields("sunset-settings-group");
    do_settings_sections('sunset-settings');
    submit_button();
    ?>
</form>