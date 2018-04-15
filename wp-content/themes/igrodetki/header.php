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
        <div class="logo">
            <img class="logo__img" src="img/header-logo.png">
            <span class="logo__text">Igro<span class="logo__text-color">Detki</span></span>
        </div>
        <ul class="header__menu header__menu--desktop">
            <li class="header__menu-item"><a class="header__menu-link" href="#">Новости</a></li>
            <li class="header__menu-item"><a class="header__menu-link" href="#">Игры</a></li>
            <li class="header__menu-item"><a class="header__menu-link" href="#">Литература</a></li>
            <li class="header__menu-item"><a class="header__menu-link" href="#">Психология</a></li>
            <li class="header__menu-item"><a class="header__menu-link" href="#">Сервисы</a></li>
        </ul>
        <a class="nofill-button nofill-button--header" href="#">Написать нам</a>
        <form class="search-form" action="#" method="post">
            <button type="submit" class="search-form__submit">
                <img class="search-form__submit-img" src="img/search-button.png">
            </button>
        </form>
    </div>
    <ul class="header__menu header__menu--mobile">
        <li class="header__menu-item"><a class="header__menu-link" href="#">Новости</a></li>
        <li class="header__menu-item"><a class="header__menu-link" href="#">Игры</a></li>
        <li class="header__menu-item"><a class="header__menu-link" href="#">Литература</a></li>
        <li class="header__menu-item"><a class="header__menu-link" href="#">Психология</a></li>
        <li class="header__menu-item"><a class="header__menu-link" href="#">Сервисы</a></li>
    </ul>
</header>
