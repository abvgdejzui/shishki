<?php /* Template Name: Главная */ ?>
<?php get_header(); ?>

<section class="banner" id="banner">
    <div class="container">
        <div class="banner-box">
            <h1 class="banner__title"><span class="bold">Шишки</span><br>хвойных<br>деревьев</h1>
            <a href="<?php echo wc_get_page_permalink( 'shop' ); ?>" class="banner__btn">
                Купить сейчас
            </a>
        </div>
    </div>
</section>
<section class="about theme__dark">
    <div class="container">
        <div class="about-box">
            <div class="about__text">
                <div class="about__title">
                    <h2 class="title">Мы продаём</h2>
                    <a href="<?php echo home_url('/'); ?>" class="logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo/logo-white.svg" alt="Логотип Шишки">
                    </a>
                </div>
                <p>
                    на любой вкус и цвет
                    сосновые, кедровые, еловые,
                    экзотические...
                    <br><br>
                    и еще разные шишечные товары
                </p>
                <a href="<?php echo wc_get_page_permalink( 'shop' ); ?>">
                    купить сейчас
                </a>
            </div>
            <div class="about__img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/about.png" alt="Много разных шишек">
            </div>
        </div>
    </div>



</section>
<section class="why theme__light">
    <div class="container">
        <div class="why-box">
            <div class="why__title">
                <h2 class="title">Зачем мне</h2>
                <a href="<?php echo home_url('/'); ?>" class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo/logo-color.svg" alt="Логотип Шишки">
                </a>
                <h2 class="title">?</h2>
            </div>
            <div class="why__card-list">
                <div class="why__card">
                    <p>Во-первых,<br>
                        это <span class="bold">красиво</span></p>
                    <div class="why__card-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/card1.jpg" alt="">
                    </div>
                </div>
                <div class="why__card">
                    <p>Во-вторых,<br>
                        это <span class="bold">вкусно</span></p>
                    <div class="why__card-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/card2.jpg" alt="">
                    </div>
                </div>
                <div class="why__card">
                    <p>В-третьих,<br>
                    </p>
                    <div class="why__card-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/card3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="expert theme__dark">
    <div class="container">
        <div class="expert-box">
            <div class="expert__title">
                <a href="<?php echo home_url('/'); ?>" class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo/logo-green.svg" alt="Логотип Шишки">
                </a>
                <h2 class="title">представляют эксперты своего дела</h2>
            </div>
            <div class="expert__content">
                <h3 class="expert__subtitle">
                    Начальник отдела по сбору шишек, шишкарь-древолаз со стажем 150 лет, Игнат Афанасьевич говорит о
                    своём
                    деле так:
                </h3>
                <div class="expert__text">
                    <p>
                        «Я вообще шишки люблю. Ну там, погрызть просто так, ботинком попинать. Всю жизнь с шишками.
                        Вот и
                        лажу по деревьям, собираю. Мне в радость, а людям дело полезное. Вы покупайте у нас шишки, я
                        обещаю,
                        товар что надо»<br><br>
                        – Игнат Афанасьевич<br><br>
                        <a href="<?php echo wc_get_page_permalink( 'shop' ); ?>" class="expert__link">
                            купить наши шишки можно прямо здесь
                        </a>
                    </p>
                    <div class="expert__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ignat.jpg" alt="Наш эскперт">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>