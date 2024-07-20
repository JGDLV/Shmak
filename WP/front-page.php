<?php get_header(); ?>

<?php $video = get_field('video'); ?>

<main class="content">
    <div class="main-page">
        <div class="section intro">
            <div class="container">
                <div class="intro__inner">
                    <div class="banner">
                        <div class="slider" id="slider">
                            <div class="slider__inner swiper-wrapper">

                                <?php
                                $params = array(
                                    'limit' => -1,
                                    'orderby' => 'post_date ASC'
                                );
                                $slider = pods('slider', $params); ?>
                                <?php while ($slider->fetch()) : ?>

                                    <div class="slide swiper-slide">
                                        <div class="slide__left">
                                            <img class="slide__image" src="<?php echo $slider->display('left_image'); ?>" alt="">
                                        </div>
                                        <div class="slide__right">
                                            <p class="slide__text"><?php echo $slider->display('post_title'); ?></p>
                                            <div class="slide__header"><?php echo $slider->display('food'); ?></div>
                                            <p class="slide__price"><?php echo $slider->display('price'); ?> <span>руб.</span></p><img class="slide__content-image" src="<?php echo $slider->display('right_image'); ?>" alt="">
                                            <div class="slide__gallery">
                                                <img src="<?php echo $slider->display('bottom_image_1'); ?>" alt="">
                                                <img src="<?php echo $slider->display('bottom_image_1'); ?>" alt="">
                                                <img src="<?php echo $slider->display('bottom_image_1'); ?>" alt="">
                                            </div>
                                        </div>
                                    </div>

                                <?php endwhile; ?>

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <?php /* echo do_shortcode('[subscribe-block text="new year, same great food!" classes="my-50"]'); */ ?>
                    <?php echo do_shortcode('[subscribe-block text="10% скидка в ШМАЧном ТГ" classes="my-50"]'); ?>
                    <div class="intro-grid">
                        <div class="video">
                            <video src="<?php echo $video['file']; ?>" poster="<?php echo $video['preview']; ?>"></video>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/play.svg" alt="">
                        </div>
                        <div class="teaser"><img class="teaser__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/teaser-image.png" alt="">
                            <p class="teaser__header">мечта делать <br>шмаки</p>
                            <div class="teaser__text">
                                <p>В сердце Москвы <br>расцветает история о <br>страстном поваре, <br>который превратил <br>свою мечту в вкусную <br>реальность</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section recommend">
            <div class="experimental-bg ornament ornament--red rellax">
                <div class="container">
                    <img class="decor decor--1 rellax" src="<?php echo get_template_directory_uri(); ?>/assets/img/decor-01.png" alt="" data-rellax-speed="0.5">
                    <img class="decor decor--2 rellax" src="<?php echo get_template_directory_uri(); ?>/assets/img/decor-02.png" alt="" data-rellax-speed="1">
                    <img class="decor decor--3 rellax" src="<?php echo get_template_directory_uri(); ?>/assets/img/decor-03.png" alt="" data-rellax-speed="0.1">
                    <img class="decor decor--4 rellax" src="<?php echo get_template_directory_uri(); ?>/assets/img/decor-04.png" alt="" data-rellax-speed="1">
                    <img class="decor decor--5 rellax" src="<?php echo get_template_directory_uri(); ?>/assets/img/decor-05.png" alt="" data-rellax-speed="1.5">
                    <img class="decor decor--6 rellax" src="<?php echo get_template_directory_uri(); ?>/assets/img/decor-06.png" alt="" data-rellax-speed="1">
                </div>
            </div>
            <div class="container">
                <h2 class="section__header section__header--light" id="something">шеф рекомендует</h2>
                <div class="recommend-grid">

                    <?php
                    $params = array(
                        'limit' => -1,
                        'orderby' => 'post_date ASC'
                    );
                    $menu_big = pods('menu_big', $params); ?>
                    <?php while ($menu_big->fetch()) : ?>

                        <div class="recommend__item">
                            <img class="recommend__item-image" src="<?php echo $menu_big->display('post_thumbnail_url.large'); ?>" alt="<?php echo $menu_big->display('post_title'); ?>">
                            <div class="recommend__item-content">
                                <p class="recommend__item-title"><?php echo $menu_big->display('post_title'); ?></p>
                                <div class="recommend__item-text"><?php echo $menu_big->display('post_content'); ?></div>
                                <p class="recommend__item-price"><?php echo $menu_big->display('price'); ?><span>руб.</span></p>
                            </div>
                        </div>

                    <?php endwhile; ?>
                </div>
            </div>
        </div>
        <div class="section empty">
            <div class="container">
                <?php echo do_shortcode('[subscribe-block text="второй шанс залететь в телегу"]'); ?>
            </div>
        </div>
        <div class="section menu">
            <div class="container">
                <h2 class="section__header section__header--dark menu__header">меню</h2>
                <div class="menu-swiper" id="menu-swiper">
                    <div class="menu-grid swiper-wrapper">

                        <?php
                        $params = array(
                            'limit' => 4,
                            'orderby' => 'post_date ASC'
                        );
                        $menu_small = pods('menu_small', $params); ?>
                        <?php while ($menu_small->fetch()) : ?>

                            <div class="menu__item swiper-slide rotate">
                                <div class="menu__item-link">
                                    <img class="menu__item-image" src="<?php echo $menu_small->display('post_thumbnail_url.large'); ?>" alt="<?php echo $menu_small->display('post_title'); ?>">
                                </div>
                                <div class="menu__item-content">
                                    <div class="menu__item-title"><?php echo $menu_small->display('post_title'); ?></div>
                                    <div class="menu__item-text"><?php echo $menu_small->display('post_content'); ?></div>
                                    <p class="menu__item-price"><?php echo $menu_small->display('price'); ?>₽</p>
                                </div>
                            </div>

                        <?php endwhile; ?>
                    </div>
                </div>
                <div class="button-center"> <a class="menu__button btn" href="<?php echo get_page_link(10); ?>">смотреть все меню</a></div>
            </div>
        </div>
        <div class="section section--gray news">
            <div class="container">
                <h2 class="section__header section__header--dark news__header">наши новости</h2>
                <div class="news-swiper" id="news-swiper">
                    <div class="news-grid swiper-wrapper">

                        <?php
                        $params = array(
                            'limit' => 4,
                            'orderby' => 'post_date ASC'
                        );
                        $news = pods('novosti', $params); ?>

                        <?php while ($news->fetch()) : ?>

                            <div class="news__item rotate swiper-slide">
                                <a class="news__item-link" href="<?php echo $news->display('permalink'); ?>">
                                    <img class="news__item-image" src="<?php echo $news->display('post_thumbnail_url.large'); ?>" alt="<?php echo $news->display('post_title'); ?>">
                                </a>
                                <div class="news__item-content">
                                    <a class="news__item-title" href="<?php echo $news->display('permalink'); ?>"><?php echo $news->display('post_title'); ?></a>
                                    <div class="news__item-text"><?php echo $news->display('post_excerpt'); ?></div>
                                </div>
                                <a class="news__item-button btn" href="<?php echo $news->display('permalink'); ?>">подробнее</a>
                            </div>

                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="section map">
            <div class="container">
                <div class="map__inner"><?php echo get_field('map', 2); ?></div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>