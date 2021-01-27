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
        ('MORE INFO'),
        array(
            'a' => array(
                'class' => array("moreInfo"),
            ),
        )
    )

);
?>
        <p> <a href="#" class="bookNow">BOOK NOW</a></p>
    </div><!-- .entry-content -->
</div><!-- #post-<?php the_ID();?> -->