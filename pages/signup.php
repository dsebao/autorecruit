<?php

/* 
Template Name: Signup
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
</head>

<body <?php body_class('accountpage'); ?>>
    <div class="container-fluid">
        <div class="row">
            <div class="accountpage--left col-md-7 px-md-0">
                <div class="accountpage--left--container">
                    <div class="accountpage--logo mb-5">
                        <a href=""><img width="200px" data-aos="fade-in" src="<?php echo IMG; ?>/logo-2.svg" alt="Autorecruit" /></a>
                    </div>

                    <div class="" data-aos="fade-in" data-aos-delay="150">
                        <h2 class="text-secondary mb-4">Sign Up</h2>

                        <p class="lead mb-4">
                            Get 10 vetted candidates for your hardest to fill roles in less than 24 hours.
                        </p>
                    </div>

                    <div class="" data-aos="fade-up" data-aos-delay="300">
                        <form action="" method="POST" class="form needs-validation mb-4" novalidate>
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label for="">FIRST NAME</label>
                                        <input name="firstname" type="text" class="form-control form-control-lg" placeholder="Your first name" required />
                                        <div class="invalid-feedback">Please check this input</div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label for="">LAST NAME</label>
                                        <input name="lastname" type="text" class="form-control form-control-lg" placeholder="Your last name" required />
                                        <div class="invalid-feedback">Please check this input</div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">EMAIL</label>
                                <input type="email" name="email" class="form-control form-control-lg" placeholder="Your email" required />
                                <div class="invalid-feedback">Please check this input</div>
                            </div>

                            <div class="form-group">
                                <label for="">PASSWORD</label>
                                <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" required />
                                <div class="invalid-feedback">Please check this input</div>
                            </div>

                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="terms" value="" id="terms" required />
                                    <label class="form-check-label" for="terms">
                                        I accept the terms and conditions
                                    </label>
                                </div>
                            </div>

                            <p>
                                <button type="submit" class="btn btn-primary btn-lg d-block d-md-inline-block">
                                    CREATE ACCOUNT
                                </button>
                            </p>

                            <p class="text-notice text-secondary">
                                You already have an account? <a href="">Log in</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
            <div class="accountpage--right col-md-5 px-md-0">
                <div class="d-flex justify-content-center align-content-center h-100">
                    <img data-aos="fade-left" data-aos-delay="200" class="mw-100" src="<?php echo IMG; ?>/signup-persona.svg" alt="" />
                </div>
            </div>
        </div>
    </div>
</body>
<?php wp_footer(); ?>

</html>