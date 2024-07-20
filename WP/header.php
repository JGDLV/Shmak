<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="Главная страница">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>

<?php
$logos = get_field('logos', 2);
$contacts = get_field('contacts', 2);
$icons_black = get_field('icons_black', 2);

$symbols = [' ', '(', ')', '-'];
$phone_fixed = str_replace($symbols, '', $contacts['phone']);
?>

<body>
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <div class="logo">
                    <a class="logo__link" href="/">
                        <img class="logo__image" src="<?php echo $logos['logo']; ?>" alt="">
                    </a>
                </div>
                <div class="main-menu">
                    <?php wp_nav_menu([
                        'theme_location'  => 'top',
                        'container'       => false,
                        'menu_class'      => 'menu',
                        'menu_id'         => 'menu',
                        'echo'            => true,
                        'items_wrap'      => '<ul class="main-menu-items">%3$s</ul>',
                        'depth'           => 0,
                    ]); ?>
                </div>
                <div class="social">
                    <a class="social__link" href="<?php echo $contacts['vk']; ?>"><?php echo $icons_black['vk_icon_black']; ?></a>
                    <a class="social__link" href="<?php echo $contacts['inst']; ?>"><?php echo $icons_black['inst_icon_black']; ?></a>
                    <a class="social__link" href="<?php echo $contacts['tg']; ?>"><?php echo $icons_black['tg_icon_black']; ?></a>
                </div>
                <a class="header__button btn" href="tel:<?php echo $phone_fixed; ?>">позвонить</a>
            </div>
        </div>
    </header>
    <div class="mobile-header">
        <div class="container">
            <div class="mobile-header__inner">
                <div class="logo">
                    <a class="logo__link" href="/">
                        <img class="logo__image" src="<?php echo $logos['logo']; ?>" alt="">
                    </a>
                </div>
                <?php if (is_page(10)) : ?>
                    <div class="mobile-header__cta">сочно в тг <a href="https://t.me/@tglogin">@tglogin</a></div>
                <?php else : ?>
                    <div class="mobile-header__center">
                        <div class="social">
                            <a class="social__link" href="<?php echo $contacts['vk']; ?>"><?php echo $icons_black['vk_icon_black']; ?></a>
                            <a class="social__link" href="<?php echo $contacts['inst']; ?>"><?php echo $icons_black['inst_icon_black']; ?></a>
                            <a class="social__link" href="<?php echo $contacts['tg']; ?>"><?php echo $icons_black['tg_icon_black']; ?></a>
                        </div>
                        <a class="mobile-header__callback" href="tel:<?php echo $phone_fixed; ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                <?php endif; ?>
                <div class="menu-toggle"><i class="icon-toggle"><span></span><span></span><span></span></i></div>
            </div>
        </div>
        <div class="mobile-menu">
            <div class="main-menu">
                <!-- <ul class="main-menu-items">
                    <li class="main-menu__item"><a class="main-menu__link" href="bio.html">кто мы</a></li>
                    <li class="main-menu__item"><a class="main-menu__link" href="menu.html">меню</a></li>
                    <li class="main-menu__item"><a class="main-menu__link" href="gallery.html">фотогалерея</a></li>
                    <li class="main-menu__item"><a class="main-menu__link" href="news.html">новости</a></li>
                    <li class="main-menu__item"><a class="main-menu__link" href="contacts.html">контакты</a></li>
                </ul> -->
                <?php wp_nav_menu([
                    'theme_location'  => 'top',
                    'container'       => false,
                    'menu_class'      => 'menu',
                    'menu_id'         => 'menu',
                    'echo'            => true,
                    'items_wrap'      => '<ul class="main-menu-items">%3$s</ul>',
                    'depth'           => 0,
                ]); ?>
            </div>
        </div>
    </div>