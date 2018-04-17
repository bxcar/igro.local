<?php
/**
 * Template Name: About
 */
get_header(); ?>
    <main class="container">
        <h2 class="section-title section-title--v2">
            <img class="section-title__img" src="<?= get_template_directory_uri(); ?>/dist/img/about-icon.png">О нас
            <div class="dots-line dots-line--section-title"></div>
        </h2>
        <div class="slider slider--about">
            <div id='carousel-custom-dots' class='owl-dots owl-dots--about'>
                <?php if (get_field('slider')) {
                    foreach (get_field('slider') as $item) { ?>
                        <div class='owl-dot owl-dot--v2 nofill-button nofill-button--about-slider'><?= $item['title']; ?></div>
                    <?php }
                } ?>
            </div>
            <div class="slider__wrapper owl-carousel owl-slider--about" id="owl-slider-v2">
                <?php if (get_field('slider')) {
                    foreach (get_field('slider') as $item) { ?>
                        <div class="slider__item slider__item--about"><?= $item['description']; ?></div>
                    <?php }
                } ?>
            </div>
        </div>
        <div class="dots-line"></div>
        <div class="subscribe-news">
            <span class="subscribe-news__title">Подпишитесь на наши новости</span>
            <?php echo do_shortcode('[contact-form-7 id="117" html_class=""]'); ?>
        </div>
        <div class="dots-line"></div>
    </main>
<?php get_footer(); ?>