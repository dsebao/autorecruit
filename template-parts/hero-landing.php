<section class="fdb-block py-0 hero-01" data-aos="fade-in">
    <div class="container py-0 py-md-5 my-0 my-md-5">
        <div class="row py-5">
            <div class="col-12 col-sm-10 col-md-8 col-lg-5 text-left">
                <h1 data-aos="fade-right" data-aos-delay="100"><?php echo get_sub_field('title'); ?></h1>
                <p class="lead" data-aos="fade-in" data-aos-delay="200">
                    <?php echo get_sub_field('subtitle'); ?>
                </p>
                <p class="mt-4">
                    <form class="js-verify-email" action="" data-aos="fade-in" data-aos-delay="300" novalidate>
                        <div class="form-group">
                            <input type="text" name="skills" class="form-control form-control-lg" placeholder="<?php echo get_sub_field('placeholder_skill'); ?>" required>
                            <div class="invalid-feedback">Please check this input</div>
                        </div>
                        <div class="form-group">
                            <input name="email" type="email" class="form-control form-control-lg" placeholder="Your email" required>
                            <div class="invalid-feedback">Please enter your email</div>
                        </div>
                        <input type="hidden" name="action" value="sendform">
                        <input type="hidden" name="typeform" value="verify_email">
                        <button type="submit" class="btn btn-primary btn-lg">GET CANDIDATES</button>
                    </form>
                </p>
            </div>
        </div>
    </div>
</section>