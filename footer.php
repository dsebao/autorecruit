<footer class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="<?php echo IMG; ?>/logo-2.svg" alt="" class="d-block mb-4">
                <p>
                    We’ll instantly send you screened candidates and start sourcing candidates immediately and screening using our bias free tests
                </p>
                <p>&copy; 2020 Copyrights</p>
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
                    4293 Euclid Avenue, Los Angeles,<br>
                    CA 90012<br>
                    info@autorecruit.ai
                </p>
            </div>
        </div>
</footer>
</body>
<?php wp_footer(); ?>

</html>