<?php

/*
Template Name: Home
*/

get_header();

//Load hero landing

// Check value exists.
if (have_rows('components')) :

    // Loop through rows.
    while (have_rows('components')) : the_row();

        if (get_row_layout() == 'hero') :
            get_template_part('template-parts/hero-landing');
        endif;

        if (get_row_layout() == 'numbers') :
            get_template_part('template-parts/featured-numbers');
        endif;

        if (get_row_layout() == 'how') :
            get_template_part('template-parts/featured-how');
        endif;

        if (get_row_layout() == 'about') :
            get_template_part('template-parts/featured-about');
        endif;

        if (get_row_layout() == 'pricing') :
            get_template_part('template-parts/featured-pricing');
        endif;

    // End loop.
    endwhile;

endif;


get_footer();
