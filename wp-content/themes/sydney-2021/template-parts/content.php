<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sydney_2021
 */

?>

<div class="articleSpace">
    <div class="imgBlock">
        <?php sydney_2021_post_thumbnail();?>
    </div>
    <div class="contentText">
        <h5 class="titleArticle"><?php the_title();?></h5>
        <?php
the_content(
    sprintf(
        wp_kses(
            /* translators: %s: Name of current post. Only visible to screen readers */
            __('<a href="#" class="moreInfo">MORE INFO</a>'),
            array(
                'span' => array(
                    'class' => array(),
                ),
            )
        )
    )
);
?>
    </div><!-- .entry-content -->
</div><!-- #post-<?php the_ID();?> -->