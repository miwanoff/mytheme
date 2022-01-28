<?php
// function archive_meta_query($query)
// {
//     if ($query->is_archive) {
//         $query->query_vars["meta_key"] = 'Release year';
//         $query->query_vars["meta_value"] = '1986';
//     }
// }
// add_action('pre_get_posts', 'archive_meta_query', 1);add_action( 'pre_get_posts', 'action_function_name_11' );
// function action_function_name_11($query)
// {
//     echo "!!!!" . $_GET['Release year'];
//     if (isset($_GET['Release year']) && $query->is_archive) {
//         $meta = $query->get('meta_query');
//         $meta[] = array(
//             'key' => 'Release year',
//             'value' => '1986',
//             'compare' => '=',
//         );
//         $query->set('meta_query', $meta);
//     }
// }
// add_action('pre_get_posts', 'action_function_name_11');

function featured_show($query)
{
    if (!is_admin() && $query->is_main_query() && is_archive()) {
        $query->set('post_type', ['post']);
        //   print_r($query);
        $current_meta = $query->get('meta_query') ? $query->get('meta_query') : [];
        // $current_meta = $query->get('meta_query');
        $current_meta[] = array(
            'key' => 'mood',
            'value' => $_GET['mood'],
            'compare' => '=',
        );
        // echo '!!!';
        // print_r($current_meta);
        // $meta_query = $current_meta[] = $custom_meta;
        // $query->set('meta_query', array($meta_query));
        $query->set('meta_query', $current_meta);
        //return $query;
    }
}
add_action('pre_get_posts', 'featured_show');

// function justread_filter_archive($query)
// {
//     if (is_admin()) {
//         return;
//     }
//     if (is_archive()) {
//         // if ( 'field' === $_GET['getby'] ) {
//         $query->set('meta_key', 'release-year');
//         $query->set('meta_value', $_GET['release-year']);
//         $query->set('meta_compare', '=');
//         // }
//     }
//     return $query;
// }
// add_action('pre_get_posts', 'justread_filter_archive');