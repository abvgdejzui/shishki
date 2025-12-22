<?php
/**
 * Шаблон для отдельной записи (новости)
 */
get_header();
?>

<div class="container-single-news">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
        <!-- Заголовок НЕ выводим вообще -->
        
        <div class="entry-meta">
            <!-- Дата публикации -->
            <span class="entry-date">
                <?php echo get_the_date('d.m.Y'); ?>
            </span>
        </div>
        
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
        
    </article>
</div>

<?php get_footer(); ?>