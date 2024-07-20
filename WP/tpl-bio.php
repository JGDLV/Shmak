<?php /* Template Name: Кто мы */ get_header(); ?>

<?php
$bio_page = get_field('bio_page');
?>

<main class="content">
    <div class="bio-page">
        <div class="section intro">
            <div class="container">
                <div class="intro__inner">
                    <div class="banner banner--bio banner--dark2 px-59">
                        <img class="banner__image" src="<?php the_field('banner'); ?>" alt="">
                        <h1>андрей <br>шмаков</h1>
                        <p>Владелец и шеф-повар <br>закусочной ШМАК</p>
                    </div>
                    <div class="bio-info">
                        <p class="bio__quote">“Я обожаю кормить людей. Это дело, <br>которому я посвятил жизнь и которому <br>посвятил себя!”</p>
                        <p class="bio__name">А. Шмаков</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section path">
            <div class="container">
                <h1 class="section__header">долгий путь к&nbsp;шмакам</h1>
                <div class="bio-grid">
                    <?php /* echo do_shortcode('[pods name="bio" template="bio" limit="-1"]'); */ ?>

                    <?php
                    $params = array(
                        'limit' => -1,
                        // 'page' => 1,
                        'orderby' => 'post_date ASC'
                    );
                    $bio = pods('bio', $params); ?>
                    <?php while ($bio->fetch()) : ?>

                        <div class="bio__item">
                            <img class="bio__item-image" src="<?php echo $bio->display('post_thumbnail_url.large'); ?>" alt="<?php echo $bio->display('post_title'); ?>">
                            <div class="bio__item-content">
                                <p class="bio__item-header"><?php echo $bio->display('post_title'); ?></p>
                                <div class="bio__item-text"><?php echo $bio->display('post_content'); ?></div>
                            </div>
                        </div>

                    <?php endwhile; ?>
                    <?php /*echo $bio->pagination( array( 'type' => 'advanced' ) ); */ ?>
                </div>
            </div>
        </div>
        <div class="section empty empty--static">
            <div class="container"><?php echo do_shortcode('[subscribe-block]'); ?></div>
        </div>
    </div>
</main>
<?php get_footer(); ?>