<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package igrodetki
 */

?>
<footer class="footer">
    <div class="container">
        <div class="flex-sb flex-sb--footer">
            <div class="logo logo--footer">
                <img class="logo__img" src="img/footer-logo.png">
                <span class="logo__text logo__text--footer">Igro<span class="logo__text-color logo__text-color--footer">Detki</span></span>
            </div>
            <ul class="footer__menu footer__menu--1">
                <li class="footer__menu-item"><a class="footer__menu-link" href="#">Новости</a></li>
                <li class="footer__menu-item"><a class="footer__menu-link" href="#">Рубрики</a></li>
                <li class="footer__menu-item"><a class="footer__menu-link" href="#">В тренде</a></li>
            </ul>
            <ul class="footer__menu footer__menu--2">
                <li class="footer__menu-item"><a class="footer__menu-link" href="#">Искусство</a></li>
                <li class="footer__menu-item"><a class="footer__menu-link" href="#">Сотрудничество</a></li>
                <li class="footer__menu-item"><a class="footer__menu-link" href="#">О нас</a></li>
            </ul>
            <div class="flex footer__menu3-wrap">
                <ul class="footer__menu footer__menu--3">
                    <li class="footer__menu-item"><a class="footer__menu-link footer__menu-link--menu3" href="#">Предложить
                            новость</a></li>
                </ul>
                <div class="footer__socials">
                    <a target="_blank" href="https://vk.com" class="footer__social-icon"><img src="img/vk-icon.png"></a>
                    <a target="_blank" href="https://facebook.com" class="footer__social-icon"><img
                                src="img/fb-icon.png"></a>
                    <a target="_blank" href="https://ok.ru" class="footer__social-icon"><img src="img/ok-icon.png"></a>
                    <a target="_blank" href="https://instagram.com" class="footer__social-icon"><img
                                src="img/inst-icon.png"></a>
                </div>
            </div>
        </div>
        <div class="footer_copyright">2018 All Right Reserved.</div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
