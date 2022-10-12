<?php

/**
 * Add my new menu to the Admin Control Panel
 */

add_action('admin_menu', 'verbum_add_admin_menu');

function verbum_add_admin_menu ()
{
    add_menu_page(
        'Example',                      // Title of the page.
        'Example',                      // Text to show on the menu link.
        'manage_options',               // Capability requirement to see the link.
        'example',                      // The 'slug' - file to display when clicking the link.
        'process_manager_viewer',
        'dashicons-chart-pie',
        1
    );
}

function process_manager_viewer ()
{
    ?>
    
    Here is the HTML content of your plugin...

    I Love Iesus Salvator s2

    <?php
}


