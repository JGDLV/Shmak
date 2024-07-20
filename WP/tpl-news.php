<?php /* Template Name: Новости */ get_header(); ?>

<?php $video = get_field('video', 2); ?>

<main class="content">
    <div class="news-page">
        <div class="section intro">
            <div class="container">
                <div class="intro__inner">
                    <div class="banner banner--news banner--dark"><img class="banner__image" src="<?php echo the_field('banner') ?>" alt="">
                        <h1>новости</h1>
                    </div>
                    <?php echo do_shortcode('[subscribe-block text="new year, same great food!" classes="my-50 mb-70"]'); ?>
                    <div class="intro-grid">
                        <div class="video">
                            <video src="<?php echo $video['file']; ?>" poster="<?php echo $video['preview']; ?>"></video>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/play.svg" alt="">
                        </div>
                        <div class="teaser">
                            <p class="teaser__header mb-13">мы отметили 7 лет нашей закусочной</p>
                            <div class="teaser__text">
                                <p>Скорее посмотри, как это было! </p>
                                <p>Обязательно приходи на наши мероприятия! А <br>чтобы их не пропускать - подпишись на наш <br>телеграм, мы там заранее анонсируем их!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section news">
            <div class="container">
                <div class="news-swiper" id="news-swiper2">
                    <div class="news-grid swiper-wrapper">

                        <?php
                        $params = array(
                            'limit' => -1,
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
                <div class="button-center"> <a class="menu__button btn" href="<?php echo get_page_link(10); ?>">смотреть все меню</a></div>
            </div>
        </div>
        <div class="section empty empty--static">
            <div class="container"><?php echo do_shortcode('[subscribe-block]'); ?></div>
        </div>
    </div>
</main>
<?php get_footer(); ?>