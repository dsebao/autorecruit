<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="mainHeader">
        <div class="container">
            <nav id="mainNavbar" class="navbar navbar-expand-md">
                <div class="col">
                    <a class="navbar-brand" href="">
                        <img src="<?php echo IMG; ?>/logo.svg" width="170" alt="image" />
                    </a>
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="mainNav">
                    <?php wp_nav_menu(array(
                        'menu' => 'main-menu',
                        'theme_location' => 'primary',
                        'menu_class' => 'navbar-nav ml-auto',
                        'container' => 'ul',
                        'walker' => new AR_WP_nav()
                    )); ?>
                    <a class="btn btn-primary ml-md-3" href="https://app.autorecruit.ai/recruiter/signup">SIGNUP</a>
                </div>
            </nav>
        </div>
    </header>