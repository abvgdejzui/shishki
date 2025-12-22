<footer class="footer">
    <div class="container">
        <div class="footer-box">
            <div class="footer_links">
                <a href="<?php echo home_url('/'); ?>" class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo/logo-white.svg" alt="Логотип Шишки">
                </a>
                <a href="tel:+79999999999" class="footer_links-tel">+7-999-999-99-99</a>
            </div>
            <div class="footer__nav">
                <ul>
                    <li><a class="header__nav-link" href="<?php echo home_url('/'); ?>">главная</a></li>
                    <li><a class="header__nav-link" href="<?php echo get_permalink( 110 ); ?>">новости</a></li>
                    <li><a class="header__nav-link" href="<?php echo wc_get_page_permalink( 'shop' ); ?>">каталог</a></li>
                    <li><a class="header__nav-link" href="<?php echo get_permalink( 107 ); ?>">о нас</a></li>
                </ul>
            </div>
            <div class="footer__contact">
                <a href="<?php echo home_url('/'); ?>" class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo/VK.svg" alt="Логотип Шишки">
                </a>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>