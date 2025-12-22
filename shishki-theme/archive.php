<?php get_header(); ?>

<div class="container news-archive">
    <h1 class="page-title"><?php the_archive_title(); ?></h1>
    
    <?php if (have_posts()) : ?>
        <div class="news-list">
            <?php while (have_posts()) : the_post(); ?>
                <article class="news-item">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="news-date"><?php echo get_the_date(); ?></div>
                    <div class="news-excerpt"><?php the_excerpt(); ?></div>
                    <a href="<?php the_permalink(); ?>" class="news-read-more">Читать далее</a>
                </article>
            <?php endwhile; ?>
        </div>
        
        <?php the_posts_pagination(); ?>
    <?php else : ?>
        <p>Новостей пока нет.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>