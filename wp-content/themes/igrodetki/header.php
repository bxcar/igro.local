<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package igrodetki
 */

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IgroDetki</title>
    <?php wp_head(); ?>
</head>
<body>
<header class="header">
    <div class="container container--header">
        <a href="<?= home_url(); ?>" class="logo">
            <img class="logo__img" src="<?php the_field('header_logo', 'option'); ?>">
            <span class="logo__text"><?php the_field('header_title_1_part', 'option'); ?><span
                        class="logo__text-color"><?php the_field('header_title_2_part', 'option'); ?></span></span>
        </a>
        <?php
        echo str_replace(array('menu-item ', '<a'), array('header__menu-item ', '<a class="header__menu-link"'), wp_nav_menu(array(
                'echo' => false,
                'theme_location' => 'menu-1',
                'items_wrap' => '<ul class="header__menu header__menu--desktop">%3$s</ul>',
                'container' => 'false'
            ))
        );
        ?>
        <a class="nofill-button nofill-button--header" href="#"><?php the_field('header_button_text', 'option'); ?></a>
        <form class="search-form" action="#" method="post">
            <button type="submit" class="search-form__submit">
                <img class="search-form__submit-img" src="<?= get_template_directory_uri(); ?>/dist/img/search-button.png">
            </button>
        </form>
    </div>
    <?php
    echo str_replace(array('menu-item ', '<a'), array('header__menu-item ', '<a class="header__menu-link"'), wp_nav_menu(array(
            'echo' => false,
            'theme_location' => 'menu-1',
            'items_wrap' => '<ul class="header__menu header__menu--mobile">%3$s</ul>',
            'container' => 'false'
        ))
    );
    ?>
</header>
