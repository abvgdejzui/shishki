<?php
add_action( 'after_setup_theme', function () {
    add_theme_support( 'woocommerce' );
});


function shishki_woocommerce_styles() {
    wp_enqueue_style('shishki-main-style', get_stylesheet_directory_uri() . '/style.css');
    wp_enqueue_style('shishki-woocommerce', get_stylesheet_directory_uri() . '/woocommerce.css', array('shishki-main-style', 'woocommerce-general'), '1.0');
    wp_enqueue_style('shishki-woocommerce-cart', get_stylesheet_directory_uri() . '/woo_cart.css', array('shishki-main-style', 'woocommerce-general'), '1.0');
    wp_enqueue_style('shishki-woocommerce-checkout', get_stylesheet_directory_uri() . '/woo_checkout.css', array('shishki-main-style', 'woocommerce-general'), '1.0');
    wp_enqueue_style('shishki-woocommerce-myaccount', get_stylesheet_directory_uri() . '/woo_myaccount.css', array('shishki-main-style', 'woocommerce-general'), '1.0');
    wp_enqueue_style('shishki-about', get_stylesheet_directory_uri() . '/about.css', array('shishki-main-style', 'woocommerce-general'), '1.0');
    wp_enqueue_style('shishki-news', get_stylesheet_directory_uri() . '/news.css', array('shishki-main-style', 'woocommerce-general'), '1.0');
}
add_action('wp_enqueue_scripts', 'shishki_woocommerce_styles', 20);

// Скрыть поле количества на странице отдельного товара (single product)
add_filter( 'woocommerce_is_sold_individually', function( $is_sold_individually, $product ) {
    if ( is_product() ) {
        return true; // скрываем input только на странице товара
    }
    return $is_sold_individually; // в корзине оставляем как есть
}, 10, 2 );

// Убираем поле ввода купона на странице корзины
add_filter( 'woocommerce_coupons_enabled', '__return_false' );

add_action('wp', 'remove_page_titles');
function remove_page_titles() {
    // Если это страница (не запись) и не страница товара
    if (is_page() && !is_product()) {
        add_filter('the_title', 'remove_title_for_pages', 10, 2);
    }
}

function remove_title_for_pages($title, $id) {
    // Убираем заголовок только для основного контента страницы
    if (in_the_loop() && is_page($id)) {
        return '';
    }
    return $title;
}

// Исправление пагинации для кастомных запросов
function news_pagination_rewrite() {
    add_rewrite_rule(
        'news/page/([0-9]{1,})/?$',
        'index.php?pagename=news&paged=$matches[1]',
        'top'
    );
}
add_action('init', 'news_pagination_rewrite');