<?php
/*
Plugin Name: Carousel
Plugin URI:
Description: Creates a simple carousel
Version: 1.0
Author: MAI
Author URI: http://ex.me
License: MIT
 */

function display_carousel()
{
    $args = array(
        'category_name' => 'carousel',
        'orderby' => 'link_id',
        'order' => 'DESC',
        'limit' => 5,
    );
    $links = get_bookmarks($args);
    $n = count($links);
    if (!empty($links)) {
        ?>
<div id="carousel">
    <ul style="width: <?php echo $n * 100; ?>%;">
        <?php
foreach ($links as $i => $link) {
            // We are here in the loop
            // Background image
            if (!empty($link->link_image)) {
                $background = 'url(' . $link->link_image . ')';
            } else {
                $background = 'rgb(' . rand(0, 255) . ', ' . rand(0, 255) . ', ' . rand(0, 255) . ')';
            }

// Target attribute
            if (!empty($link->link_target)) {
                $target = ' target="' . $link->link_target . '"';
            } else {
                $target = '';
            }
// Rel attribute
            if (!empty($link->link_rel)) {
                $rel = ' rel="' . $link->link_rel . '"';
            } else {
                $rel = '';
            }
            ?>
        <li style="background: <?php echo $background; ?>;">
            <a href="<?php echo $link->link_url; ?>">
                <strong><?php echo $link->link_name; ?></strong>
                <?php
if (!empty($link->link_description)) {
                ?>
                <em><?php echo $link->link_description; ?></em>
                <?php
}
            ?>
            </a>

            <?php
// Previous link
            if ($i > 0) {
                ?>
            <a href="#prev" class="carousel-prev">&lt;</a>
            <?php
}
            ?>
            <?php
// Next link
            if ($i < $n - 1) {
                ?>
            <a href="#next" class="carousel-next">&gt;</a>
            <?php
}
            ?>
        </li>
        <?php
}
        ?>
    </ul>
</div>
<?php
}
}

function enqueue_carousel_style()
{
    wp_enqueue_style('carousel', plugin_dir_url(__FILE__) . 'carousel.css');
}
add_action('wp_enqueue_scripts', 'enqueue_carousel_style');

wp_enqueue_script('carousel', plugin_dir_url(__FILE__) . 'carousel.js', array('jquery'), '1.0', true);