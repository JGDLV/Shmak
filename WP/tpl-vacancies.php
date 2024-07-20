<?php /* Template Name: Вакансии */ get_header(); ?>

<main class="content">
    <div class="vacancies-page">
        <div class="section intro">
            <div class="container">
                <div class="intro__inner">
                    <div class="banner banner--news"><img class="banner__image" src="<?php echo the_field('banner'); ?>" alt=""></div>
                </div>
            </div>
        </div>
        <div class="section vacancies">
            <div class="container">
                <h1 class="section__header">вакансии в <span>шмак</span></h1>
                <div class="vacancies-grid">

                    <?php
                    $params = array(
                        'limit' => -1,
                        'orderby' => 'post_date ASC'
                    );
                    $vacancies = pods('vacancies', $params); ?>
                    <?php while ($vacancies->fetch()) : ?>

                        <div class="vacancies__item">
                            <img class="vacancies__item-image" src="<?php echo $vacancies->display('post_thumbnail_url.large'); ?>" alt="<?php echo $vacancies->display('post_title'); ?>">
                            <div class="vacancies__item-content">
                                <p class="vacancies__item-header"><?php echo $vacancies->display('post_title'); ?></p>
                                <div class="vacancies__item-text"><?php echo $vacancies->display('post_content'); ?></div>
                            </div>
                        </div>

                    <?php endwhile; ?>
                </div>
            </div>
        </div>
        <div class="section empty empty--static">
            <div class="container"><?php echo do_shortcode('[subscribe-block]'); ?></div>
        </div>
    </div>
</main>
<?php get_footer(); ?>