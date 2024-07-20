<?php
$logos = get_field('logos', 2);
$contacts = get_field('contacts', 2);
$icons_white = get_field('icons_white', 2);
$header_footer_text = get_field('header_footer_text', 2);

$symbols = [' ', '(', ')', '-'];
$phone_fixed = str_replace($symbols, '', $contacts['phone']);
?>

<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <div class="footer-logo">
                <a class="footer-logo__link" href="/">
                    <img class="footer__logo-image" src="<?php echo $logos['logo_footer']; ?>" alt="">
                </a>
            </div>
            <div class="footer-one">
                <div class="social">
                    <a class="social__link" href="<?php echo $contacts['vk']; ?>"><?php echo $icons_white['vk_icon_white']; ?></a>
                    <a class="social__link" href="<?php echo $contacts['inst']; ?>"><?php echo $icons_white['inst_icon_white']; ?></a>
                    <a class="social__link" href="<?php echo $contacts['tg']; ?>"><?php echo $icons_white['tg_icon_white']; ?></a>
                </div>
                <a class="footer__button btn" href="tel:<?php echo $phone_fixed; ?>">позвонить</a>
            </div>
            <div class="footer-two">
                <div class="footer__section footer__section--left">
                    <!-- <div class="footer-links">
                        <a class="footer__link" href="#">Вакансии</a>
                        <a class="footer__link" href="#">Политика обработки персональных данных</a>
                    </div> -->
                    <?php wp_nav_menu([
                        'theme_location'  => 'bottom',
                        'container'       => false,
                        'menu_class'      => 'footer-links',
                        'menu_id'         => 'footer-links',
                        'echo'            => true,
                        'depth'           => 0,
                    ]); ?>
                    <p>© <?php echo $header_footer_text['copyright']; ?> <?php echo date("Y"); ?></p>
                </div>
                <div class="footer__section footer__section--right">
                    <p>ОГРН <?php echo $header_footer_text['ogrn']; ?></p>
                    <p>ИНН <?php echo $header_footer_text['inn']; ?>, КПП <?php echo $header_footer_text['kpp']; ?></p>
                </div>
                <div class="created">
                    <p>создание <br>сайта</p><a href="#">
                        <img src="<?php echo $logos['logo_creator']; ?>" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 247.186;"></path>
    </svg>
</div>
<?php wp_footer(); ?>
</body>

</html>