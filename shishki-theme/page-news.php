<?php
/**
 * Template Name: Страница новостей
 */
get_header();
?>

<div class="container news-archive">
    <h1 class="page-title"><?php the_title(); ?></h1>
    
    <?php
    // Настройки запроса новостей
    $news_query = new WP_Query(array(
        'post_type'      => 'post',
        'posts_per_page' => 10,
        'paged'          => get_query_var('paged') ? get_query_var('paged') : 1,
    ));
    
    if ($news_query->have_posts()) :
    ?>
        <div class="news-list">
            <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
                <article class="news-item" id="post-<?php the_ID(); ?>">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="news-date"><?php echo get_the_date('d.m.Y'); ?></div>
                    <div class="news-excerpt"><?php the_excerpt(); ?></div>
                    <a href="<?php the_permalink(); ?>" class="news-read-more">Читать далее</a>
                </article>
            <?php endwhile; ?>
        </div>
        
        <!-- Пагинация -->
        <div class="news-pagination">
            <?php
            echo paginate_links(array(
                'total'     => $news_query->max_num_pages,
                'current'   => max(1, get_query_var('paged')),
                'prev_text' => '« Назад',
                'next_text' => 'Вперед »',
                'mid_size'  => 2,
            ));
            ?>
        </div>
        
        <?php wp_reset_postdata(); ?>
        
    <?php else : ?>
        <p class="no-news">Новостей пока нет.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>