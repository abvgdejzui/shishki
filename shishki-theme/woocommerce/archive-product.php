<?php
/**
 * Template Name: Каталог товаров
 */

get_header(); 
?>

<div class="catalog">
    <div class="container">
        <section class="catalog__head">
            <h2 class="catalog__title">Каталог товаров</h2>
        </section>

        <section class="catalog__cards">
            <?php 
            // Получаем товары WooCommerce
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => -1,
                'orderby' => 'title',
                'order' => 'ASC'
            );
            $loop = new WP_Query($args);

            if ($loop->have_posts()) :
                while ($loop->have_posts()) : $loop->the_post(); 
                    global $product;
            ?>
                <a class="catalog__card" href="<?php the_permalink(); ?>">
                    <div class="catalog__card-image">
                        <?php 
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('medium'); 
                        } else {
                            echo '<img src="' . get_template_directory_uri() . '/img/products/default.jpg" alt="Нет изображения">';
                        }
                        ?>
                    </div>
                    <div class="catalog__card-description">
                        <h3 class="catalog__card-name"><?php the_title(); ?></h3>
                        <p class="catalog__card-price"><?php echo $product->get_price_html(); ?></p>
                    </div>
                </a>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>Товары не найдены</p>';
            endif;
            ?>
        </section>
    </div>
</div>

<?php get_footer(); ?>
