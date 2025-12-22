<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header">
    <div class="container">
        <div class="header-box">
            <a href="<?php echo home_url('/'); ?>" class="logo header__logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo/logo-white.svg" alt="Логотип Шишки">
            </a>
            <a href class="header__burger">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo/burger.svg" alt="menu">
            </a>
            <nav class="header__nav">
                <ul>
                    <li><a class="header__nav-link" href="<?php echo home_url('/'); ?>">главная</a></li>
                    <li><a class="header__nav-link" href="<?php echo get_permalink( 110 ); ?>">новости</a></li>
                    <li><a class="header__nav-link" href="<?php echo wc_get_page_permalink( 'shop' ); ?>">каталог</a></li>
                    <li><a class="header__nav-link" href="<?php echo get_permalink( 107 ); ?>">о нас</a></li>
                    <li><a class="header__nav-link" href="<?php echo wc_get_page_permalink( 'cart' ); ?>">корзина</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>