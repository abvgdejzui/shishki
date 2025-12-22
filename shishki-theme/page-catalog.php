<?php /* Template Name: Каталог */ ?>
<?php get_header(); ?>

<div class="catalog">
    <div class="container">
        <section class="catalog__head">
            <h2 class="catalog__title">Каталог товаров</h2>
            <div class="catalog__controls">
                <button class="catalog__control catalog__control-active">все</button>
                <button class="catalog__control">только шишки</button>
                <button class="catalog__control">съедобное</button>
                <button class="catalog__control">экзотика</button>
            </div>
        </section>
        <section class="catalog__cards">
            <a class="catalog__card" href="<?php echo get_permalink(13); ?>">
                <div class="catalog__card-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/products/1.jpg" alt="Шишка ели">
                </div>
                <div class="catalog__card-description">
                    <h3 class="catalog__card-name">ель. шишка</h3>
                    <p class="catalog__card-price">5 руб / шт.</p>
                </div>
            </a>
            <a class="catalog__card" href="<?php echo get_permalink(13); ?>">
                <div class="catalog__card-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/products/1.jpg" alt="Шишка ели">
                </div>
                <div class="catalog__card-description">
                    <h3 class="catalog__card-name">ель. шишка</h3>
                    <p class="catalog__card-price">5 руб / шт.</p>
                </div>
            </a>
            <a class="catalog__card" href="<?php echo get_permalink(13); ?>">
                <div class="catalog__card-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/products/1.jpg" alt="Шишка ели">
                </div>
                <div class="catalog__card-description">
                    <h3 class="catalog__card-name">ель. шишка</h3>
                    <p class="catalog__card-price">5 руб / шт.</p>
                </div>
            </a>
            <a class="catalog__card" href="<?php echo get_permalink(13); ?>">
                <div class="catalog__card-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/products/1.jpg" alt="Шишка ели">
                </div>
                <div class="catalog__card-description">
                    <h3 class="catalog__card-name">ель. шишка</h3>
                    <p class="catalog__card-price">5 руб / шт.</p>
                </div>
            </a>
            <a class="catalog__card" href="<?php echo get_permalink(13); ?>">
                <div class="catalog__card-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/products/1.jpg" alt="Шишка ели">
                </div>
                <div class="catalog__card-description">
                    <h3 class="catalog__card-name">ель. шишка</h3>
                    <p class="catalog__card-price">5 руб / шт.</p>
                </div>
            </a>
            <a class="catalog__card" href="<?php echo get_permalink(13); ?>">
                <div class="catalog__card-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/products/1.jpg" alt="Шишка ели">
                </div>
                <div class="catalog__card-description">
                    <h3 class="catalog__card-name">ель. шишка</h3>
                    <p class="catalog__card-price">5 руб / шт.</p>
                </div>
            </a>
            <a class="catalog__card" href="<?php echo get_permalink(13); ?>">
                <div class="catalog__card-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/products/1.jpg" alt="Шишка ели">
                </div>
                <div class="catalog__card-description">
                    <h3 class="catalog__card-name">ель. шишка</h3>
                    <p class="catalog__card-price">5 руб / шт.</p>
                </div>
            </a>
            <a class="catalog__card" href="<?php echo get_permalink(13); ?>">
                <div class="catalog__card-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/products/1.jpg" alt="Шишка ели">
                </div>
                <div class="catalog__card-description">
                    <h3 class="catalog__card-name">ель. шишка</h3>
                    <p class="catalog__card-price">5 руб / шт.</p>
                </div>
            </a>
    </div>
    </section>
</div>

<?php get_footer(); ?>