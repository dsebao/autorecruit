<section class="fdb-block pb-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 data-aos="fade-up"><?php echo get_sub_field('title'); ?></h1>
            </div>
        </div>

        <div class="row text-center mt-5">
            <?php
            if (have_rows('item')) :

                // Loop through rows.
                while (have_rows('item')) : the_row(); ?>

                    <div class="col-12 col-sm-4">
                        <img alt="image" src="<?php echo get_sub_field('image'); ?>" />
                        <h2 class="text-primary"><strong><?php echo get_sub_field('title'); ?></strong></h2>
                        <p class='lead'><?php echo get_sub_field('subtitle'); ?></p>
                    </div>
            <?php endwhile;

            endif;
            ?>

        </div>
    </div>
</section>