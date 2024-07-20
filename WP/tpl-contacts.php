<?php /* Template Name: Контакты */ get_header(); ?>

<?php
$contacts = get_field('contacts', 2);
$contacts_page = get_field('contacts_page');
$icons_black = get_field('icons_black', 2);

$symbols = [' ', '(', ')', '-'];
$phone_fixed = str_replace($symbols, '', $contacts['phone']);
?>

<main class="content">
    <div class="contacts-page">
        <div class="section intro">
            <div class="container">
                <div class="intro__inner">
                    <div class="banner banner--contacts">
                        <img class="banner__image" src="<?php the_field('banner'); ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="section contacts">
            <div class="container">
                <h1 class="section__header">контакты</h1>
                <div class="contacts-grid">
                    <div class="contacts__item">
                        <p class="contacts__item-title">Скорее приходи:</p>
                        <div class="contacts__item-text"><?php echo $contacts_page['address']; ?></div>
                    </div>
                    <div class="contacts__item">
                        <p class="contacts__item-title">Мы работаем так:</p>
                        <div class="contacts__item-text"><?php echo $contacts_page['whours']; ?></div>
                    </div>
                    <div class="contacts__item">
                        <p class="contacts__item-title">Звони:</p>
                        <div class="contacts__item-text"><a href="tel:<?php echo $phone_fixed; ?>"><?php echo $contacts['phone']; ?></a></div>
                    </div>
                    <div class="contacts__item">
                        <p class="contacts__item-title">Давай дружить:</p>
                        <div class="contacts__item-text">
                            <div class="social">
                                <a class="social__link" href="<?php echo $contacts['vk']; ?>"><?php echo $icons_black['vk_icon_black']; ?></a>
                                <a class="social__link" href="<?php echo $contacts['inst']; ?>"><?php echo $icons_black['inst_icon_black']; ?></a>
                                <a class="social__link" href="<?php echo $contacts['tg']; ?>"><?php echo $icons_black['tg_icon_black']; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="map">
                    <div class="map__inner"><?php echo get_field('map', 2); ?></div>
                </div>
            </div>
        </div>
        <div class="section empty empty--static">
            <div class="container"><?php echo do_shortcode('[subscribe-block]'); ?></div>
        </div>
    </div>
</main>
<?php get_footer(); ?>