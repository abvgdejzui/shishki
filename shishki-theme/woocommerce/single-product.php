<?php
defined( 'ABSPATH' ) || exit;

get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>

<div class="item">
    <div class="container">
        <a href="<?php echo wc_get_page_permalink( 'shop' ); ?>" class="item__control">
            ← к каталогу
        </a>
        <div class="item__content">
            <div class="item__image">
                <?php
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail( 'large' );
                }
                ?>
            </div>
            <div class="item__description">
                <h1 class="item__title">
                    <?php the_title(); ?>
                </h1>
                <div class="item__info">
                    <?php the_content(); ?>
                </div>
                <?php
                woocommerce_template_single_add_to_cart();
                ?>

            </div>

        </div>
    </div>
</div>

<?php endwhile; ?>

<?php get_footer(); ?>
