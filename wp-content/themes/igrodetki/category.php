<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package igrodetki
 */

get_header();
?>
    <main class="container">
        <a target="<?= get_field('banner_1_link', 8)['target']; ?>" href="<?= get_field('banner_1_link', 8)['url']; ?>" class="banner">
            <img class="banner__img" src="<?php the_field('banner_1', 8); ?>">
        </a>
        <h2 class="section-title"><img class="section-title__img" src="<?= get_template_directory_uri(); ?>/dist/img/actual-news-icon.png"><?= single_cat_title(); ?></h2>
        <div class="flex flex--img-with-right-slider">
            <?php
            $term = get_queried_object();
            $args = array(
                'post_type' => 'post',
                'category_name' => $term->slug
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="news-tile news-tile--category">
                        <img class="news-tile__img" src="<?php the_field('thumbnail_medium'); ?>">
                        <div class="news-tile__title-wrap flex-sb-aic">
                            <h3 class="news-tile__title"><?php the_title(); ?></h3>
                            <span class="news-tile__time"><?php the_time('G:i'); ?></span>
                        </div>
                    </a>
                <?php }
            }
            wp_reset_postdata();
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
