<h1>Sunset Theme Options</h1>
<?php
settings_errors();
?>
<form method="post" action="options.php">
    <?php
    // LẤY NHỮNG NAME ĐƯỢC ĐĂNG KÝ TỪ GROUP
    settings_fields("sunset-theme-group");
    do_settings_sections('sunset-theme');
    submit_button();
    ?>
</form>