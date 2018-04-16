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
                <img class="logo__img" src="<?php the_field('footer_logo', 'option'); ?>">
                <span class="logo__text logo__text--footer"><?php the_field('footer_title', 'option'); ?></span>
            </div>
            <?php
            echo str_replace(array('menu-item ', '<a'), array('footer__menu-item ', '<a class="footer__menu-link"'), wp_nav_menu(array(
                    'echo' => false,
                    'theme_location' => 'menu-1-footer',
                    'items_wrap' => '<ul class="footer__menu footer__menu--1">%3$s</ul>',
                    'container' => 'false'
                ))
            );
            ?>
            <?php
            echo str_replace(array('menu-item ', '<a'), array('footer__menu-item ', '<a class="footer__menu-link"'), wp_nav_menu(array(
                    'echo' => false,
                    'theme_location' => 'menu-2-footer',
                    'items_wrap' => '<ul class="footer__menu footer__menu--">%3$s</ul>',
                    'container' => 'false'
                ))
            );
            ?>
            <div class="flex footer__menu3-wrap">
                <ul class="footer__menu footer__menu--3">
                    <li class="footer__menu-item"><a class="footer__menu-link footer__menu-link--menu3" href="#">Предложить
                            новость</a></li>
                </ul>
                <div class="footer__socials">
                    <a target="_blank" href="<?php the_field('vk_link', 'option'); ?>" class="footer__social-icon"><img src="<?= get_template_directory_uri(); ?>/dist/img/vk-icon.png"></a>
                    <a target="_blank" href="<?php the_field('fb_link', 'option'); ?>" class="footer__social-icon"><img
                                src="<?= get_template_directory_uri(); ?>/dist/img/fb-icon.png"></a>
                    <a target="_blank" href="<?php the_field('ok_link', 'option'); ?>" class="footer__social-icon"><img src="<?= get_template_directory_uri(); ?>/dist/img/ok-icon.png"></a>
                    <a target="_blank" href="<?php the_field('inst_link', 'option'); ?>" class="footer__social-icon"><img
                                src="<?= get_template_directory_uri(); ?>/dist/img/inst-icon.png"></a>
                </div>
            </div>
        </div>
        <div class="footer_copyright"><?php the_field('footer_copyright', 'option'); ?></div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
