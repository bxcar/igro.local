<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package igrodetki
 */

get_header();
?>
    <main class="container">
        <h2 class="section-title"><img class="section-title__img"
                                       src="<?= get_template_directory_uri(); ?>/dist/img/actual-news-icon.png">Результаты поиска по запросу "<?= get_search_query(); ?>"
        </h2>
        <div class="flex flex--img-with-right-slider">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="news-tile news-tile--category">
                        <img class="news-tile__img" src="<?php the_field('thumbnail_medium'); ?>">
                        <div class="news-tile__title-wrap flex-sb-aic">
                            <h3 class="news-tile__title"><?php the_title(); ?></h3>
                            <span class="news-tile__time"><?php the_time('G:i'); ?></span>
                        </div>
                    </a>
                <?php }
            }
            ?>
        </div>
        <div class="dots-line"></div>
        <div class="subscribe-news">
            <span class="subscribe-news__title">Подпишитесь на наши новости</span>
            <?php echo do_shortcode('[contact-form-7 id="118" html_class=""]'); ?>
        </div>
        <div class="dots-line dots-line--main-page-prefooter"></div>
    </main>

<?php
get_footer();
