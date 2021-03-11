<?php

if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit;
}

global $wpdb;

$query = "SELECT
              1
          FROM
              `information_schema`.`columns`
          WHERE
              `column_name`='view_count'
              AND
              `table_name`='" . $wpdb->posts . "'";

$result = $wpdb->get_row($query);

if (is_null($result)) {
    return;
}

$query = "ALTER TABLE
              " . $wpdb->posts . "
          DROP
              `view_count`";

$wpdb->query($query);