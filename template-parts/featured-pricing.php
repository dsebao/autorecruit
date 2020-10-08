<section class="fdb-block pricing-component">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h1 data-aos="fade-up">Pricing Plans</h1>
            </div>
        </div>

        <div class="row mt-5 align-items-top">
            <?php
            if (have_rows('plan')) :

                // Loop through rows.
                while (have_rows('plan')) : the_row(); ?>

                    <div class="col-12 col-sm-10 col-md-8 m-auto col-lg-4">
                        <div class="pricing-item pricing-item-<?php echo get_sub_field('name'); ?> pb-5 pt-5 pl-4 pr-4" data-aos="fade-up" data-aos-delay="200">
                            <h3><?php echo get_sub_field('name'); ?></h3>
                            <hr class="mb-4">

                            <p class="pricing-item-cost">$<?php echo get_sub_field('price_month'); ?> <span class="lead">/ month</span></p>
                            <hr />
                            <div class="items">
                                <?php echo get_sub_field('item'); ?>
                            </div>

                            <p class="text-center pt-5">
                                <a href="https://app.autorecruit.ai/recruiter/create" class="btn btn-primary btn-lg">START NOW</a>
                            </p>
                        </div>
                    </div>
            <?php endwhile;

            endif;
            ?>

        </div>
    </div>
</section>