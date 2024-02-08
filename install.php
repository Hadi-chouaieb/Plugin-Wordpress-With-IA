<?php


register_activation_hook(__FILE__, 'my_plugin_activate');

// Function to run on activation
function my_plugin_activate() {
    // Add your activation logic here, e.g., creating a database table
    global $wpdb;

    $table_name = $wpdb->prefix . 'innovia360';

    // Check if the table already exists
    if ($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
        $charset_collate = $wpdb->get_charset_collate();

        $sql = "
            CREATE TABLE $table_name (
            id mediumint(9) NOT NULL AUTO_INCREMENT,
            title VARCHAR(255) NOT NULL,
            section VARCHAR(255) NOT NULL,
            content VARCHAR(255) NOT NULL,
            exerpt VARCHAR(255) NOT NULL,
            type VARCHAR(255) NOT NULL,




            PRIMARY KEY (id)
        ) $charset_collate;";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
    }
}