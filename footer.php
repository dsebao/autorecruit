<footer class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="<?php echo IMG; ?>/logo-2.svg" alt="" class="d-block mb-4">
                <p>
                    Recognize Talent. Celebrate Diversity
                </p>
                <p>&copy; <?php echo date('Y'); ?> Copyrights</p>
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
                    <a href="https://journey.hr/" target="_blank">https://journey.hr/</a>
                    <a href="mailto: rajiv@journey.hr">rajiv@journey.hr</a>
                </p>
            </div>
        </div>
</footer>
</body>
<?php wp_footer(); ?>

</html>