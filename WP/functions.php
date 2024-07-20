<?php

add_action('wp_enqueue_scripts', 'theme_styles');
add_action('wp_enqueue_scripts', 'theme_scripts');
add_action('after_setup_theme', 'theme_menu');

function theme_styles()
{
    wp_enqueue_style('montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&amp;display=swap');
    wp_enqueue_style('inter', 'https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;display=swap');
    wp_enqueue_style('libs', get_template_directory_uri() . '/assets/css/libs.min.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
}

function theme_scripts()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('libs', get_template_directory_uri() . '/assets/js/libs.min.js', null, null, true);
    wp_enqueue_script('rellax', 'https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js', null, null, true);
    wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/scripts.js', null, null, true);
}

function theme_menu()
{
    register_nav_menu('top', 'Верхнее меню');
    register_nav_menu('bottom', 'Нижнее меню');
}

add_theme_support('custom-logo');
add_theme_support('post-thumbnails');

// remove_filter('the_content', 'wpautop');

add_filter('big_image_size_threshold', '__return_false');

add_shortcode('folder-gallery', 'theme_folder_gallery');
function theme_folder_gallery($atts)
{
    $atts = shortcode_atts(array(
        'path' => '',
        'columns' => '3',
        'alt' => get_the_title(),
    ), $atts);

    $output = '';

    if (isset($atts['path'])) {
        if ($files = scandir(get_stylesheet_directory() . $atts['path'])) {
            $allowed_types = array('jpg', 'png', 'gif', 'jpeg', 'webp');
            foreach ($files as $key => $file) {
                if (in_array(pathinfo($file, PATHINFO_EXTENSION), $allowed_types)) {
                    // $output .= '<img src="' . get_stylesheet_directory_uri() . $atts['path'] . $file . '" class="table-card__image">';
                    $output .= '<div class="gallery__item">';
                    $output .= '<a class="gallery__link" href="' . get_stylesheet_directory_uri() . $atts['path'] . $file . '">';
                    $output .= '<img class="gallery__image" src="' . get_stylesheet_directory_uri() . $atts['path'] . $file . '" alt="">';
                    $output .= '</a>';
                    $output .= '</div>';
                }
            }
        }
    }

    return $output;
}

add_shortcode('subscribe-block', 'subscribe_block_atts');
function subscribe_block_atts($atts)
{
    $atts = shortcode_atts(array(
        'text' => 'подпишитесь на наш telegram',
        'button' => 'подписаться',
        'link' => 'https://t.me/JGDLV',
        'classes' => '',
        'red' => false,
    ), $atts);

    $red = $atts['red'] ? 'subscribe--red' : null;

    $output = '
    <div class="subscribe ' . $red . ' ' . $atts['classes'] . '">
        <div class="subscribe__inner">
            <p class="subscribe__text">' . $atts['text'] . '</p><a class="subscribe__button btn" href="' . $atts['link'] . '">' . $atts['button'] . '</a>
        </div>
    </div>
    ';

    return $output;
}
