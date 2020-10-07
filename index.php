<?php

get_header();

if (have_posts()) : while (have_posts()) : the_post();

?>

        <section class="fdb-block py-0">
            <div class="container py-0 py-md-5 my-0 my-md-5">
                <?php the_content(); ?>
            </div>
        </section>

<?php endwhile;
endif; ?>


<?php get_footer(); ?>