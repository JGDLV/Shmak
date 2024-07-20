<?php /* Template Name: Меню */ get_header(); ?>

<main class="content">
    <div class="menu-page">
        <div class="section intro">
            <div class="container">
                <div class="intro__inner">
                    <div class="banner banner--menu"><img class="banner__image" src="<?php echo the_field('banner'); ?>" alt=""></div>
                </div>
            </div>
        </div>
        <div class="section section--gray recommend">
            <div class="experimental-bg ornament ornament--gray rellax"></div>
            <div class="container">
                <h1 class="section__header">меню шмак</h1>
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
        <div class="section empty empty--static">
            <div class="container">
                <?php echo do_shortcode('[subscribe-block text="не пропусти новые шмаки в меню" red=true button="подпишись" classes="pl-25"]'); ?></div>
        </div>
    </div>
</main>
<?php get_footer(); ?>