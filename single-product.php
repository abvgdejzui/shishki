<?php /* Template Name: Карточка товара */ ?>
<?php get_header(); ?>

<div class="item">
    <div class="container">
        <a href="" class="item__control">к каталогу</a>
        <div class="item__content">
            <div class="item__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/products/1.jpg" alt="Шишка ели">
            </div>
            <div class="item__description">
                <h2 class="item__title">Варенье из сосновых шишек</h2>
                <p class="item__info">Варенье с низким содержанием сахара и большим содержанием сосновых шишек.
                    Шишки собраны только на территории российской федерации. Объем одной банки 0.5 литра.
                    Заказывайте для себя и для друга</p>
                <button class="item__order">Заказать сейчас</button>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>