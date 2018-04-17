<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package igrodetki
 */

get_header();
while ( have_posts() ) : the_post();
?>

    <main class="container">
        <div class="banner">
            <img class="banner__img" src="<?php the_field('single_top_img'); ?>">
        </div>
        <div class="flex-sb article">
            <div class="article__main-part">
                <div class="flex-sb-aic article__title-wrap">
                    <h1 class="article__title"><?php the_title(); ?></h1>
                    <div class="article__comments-count">
                        <img class="article__comment-count-img" src="<?= get_template_directory_uri(); ?>/dist/img/comments-icon.png"><?php comments_number_ru(); ?>
                    </div>
                </div>
                <div class="flex-sb-aic article__undertitle">
                    <span class="article__time"><?php the_time('G:i'); ?><span class="article__author"><?= get_the_author(); ?></span></span>
                    <div class="article__socials">
                        <a target="_blank" href="<?php the_field('vk_link', 'option'); ?>" class="article__social-icon"><img src="<?= get_template_directory_uri(); ?>/dist/img/vk-icon.png"></a>
                        <a target="_blank" href="<?php the_field('fb_link', 'option'); ?>" class="article__social-iconn"><img
                                    src="<?= get_template_directory_uri(); ?>/dist/img/fb-icon.png"></a>
                        <a target="_blank" href="<?php the_field('ok_link', 'option'); ?>" class="article__social-icon"><img src="<?= get_template_directory_uri(); ?>/dist/img/ok-icon.png"></a>
                        <a target="_blank" href="<?php the_field('inst_link', 'option'); ?>" class="article__social-icon"><img
                                    src="<?= get_template_directory_uri(); ?>/dist/img/inst-icon.png"></a>
                    </div>
                </div>
                <div class="article__content">
                    <?php the_content(); ?>
                </div>
                <?php comments_template('/comments.php', true); ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
        <div class="dots-line"></div>
        <div class="subscribe-news">
            <span class="subscribe-news__title">Подпишитесь на наши новости</span>
            <form class="subscribe-news__form" action="#" method="post">
                <div class="flex-sb-aic subscribe-news__form-items-wrap">
                    <input class="subscribe-news__email" type="email" name="email" placeholder="Ваш email">
                    <button class="subscribe-news__submit" type="submit"><span class="subscribe-news__submit-text1">Подписаться</span><span>+1258</span>
                    </button>
                </div>
            </form>
        </div>
        <div class="dots-line"></div>
    </main>
<?php
endwhile;
get_footer();
