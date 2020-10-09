<footer class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="<?php echo IMG; ?>/logo.svg" alt="" class="d-block mb-4">
                <p>
                    Recognize Talent. Celebrate Diversity
                </p>
                <p>&copy; <?php echo date('Y'); ?> Atlas, Inc.</p>
            </div>
            <div class="col-md-4 pt-2">
                <h6 class='mb-4'>NAVIGATION</h6>
                <?php wp_nav_menu(array(
                    'menu' => 'footer-menu',
                    'theme_location' => 'footer',
                    'menu_class' => '',
                    'container' => 'ul',
                )); ?>
            </div>
            <div class="col-md-4 pt-2">
                <h6 class='mb-4'>GET IN TOUCH</h6>
                <p>
                    <a href="mailto: info@autorecruit.ai">info@autorecruit.ai</a>
                </p>
            </div>
        </div>
</footer>
</body>
<?php wp_footer(); ?>

</html>