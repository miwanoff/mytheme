<?php
// Template Name: Sydney 2021

get_header();

while (have_posts()): the_post();
    the_content();
endwhile;

get_footer();