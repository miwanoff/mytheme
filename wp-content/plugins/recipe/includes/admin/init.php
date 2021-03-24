<?php

function recipe_admin_init()
{
    include 'columns.php';

    add_filter('manage_recipe_posts_columns', 'r_add_new_recipe_columns');
    add_action('manage_recipe_posts_custom_column', 'r_manage_recipe_columns', 10, 2);
}

function r_manage_recipe_columns($column, $post_id)
{
    switch ($column) {
        case 'count':
            $recipe_data = get_post_meta($post_id, 'recipe_data', true);
            echo isset($recipe_data['rating_count']) ? $recipe_data['rating_count'] : 0;
            break;
        case 'rating':
            $recipe_data = get_post_meta($post_id, 'recipe_data', true);
            echo isset($recipe_data['rating']) ? $recipe_data['rating'] : 'N/A';
            break;
        default:
            break;
    }
}