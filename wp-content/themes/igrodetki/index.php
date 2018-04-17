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
        <a target="<?= get_field('banner_1_link')['target']; ?>" href="<?= get_field('banner_1_link')['url']; ?>" class="banner">
            <img class="banner__img" src="<?php the_field('banner_1'); ?>">
        </a>
        <h2 class="section-title"><img class="section-title__img" src="<?= get_template_directory_uri(); ?>/dist/img/actual-news-icon.png"><?php the_field('section_title_1'); ?></h2>
        <div class="img-with-right-slider">
            <img class="img-with-right-slider__img" src="<?php the_field('left_image_in_slider_block'); ?>">
            <div class="slider slider--border">
                <div class="slider__wrapper owl-carousel owl-slider" id="owl-slider">
                    <?php if(get_field('slider')) {
                        foreach (get_field('slider') as $item) { ?>
                            <div class="slider__item">
                                <h3 class="slider__title"><?= $item['title'] ?></h3>
                                <p class="slider__description"><?= $item['description'] ?></p>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
                <div id='carousel-custom-dots' class='owl-dots'>
                    <?php if(get_field('slider')) {
                        foreach (get_field('slider') as $item) { ?>
                            <div class='owl-dot'></div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="flex flex--img-with-right-slider">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => '3'
            );
            $query = new WP_Query($args);

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="news-tile">
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
            <!--<a href="#" class="news-tile">
                <img class="news-tile__img" src="img/actual-news-little.png">
                <div class="news-tile__title-wrap flex-sb-aic">
                    <h3 class="news-tile__title">Название новости</h3>
                    <span class="news-tile__time">18:30</span>
                </div>
            </a>
            <a href="#" class="news-tile">
                <img class="news-tile__img" src="img/actual-news-little.png">
                <div class="news-tile__title-wrap flex-sb-aic">
                    <h3 class="news-tile__title">Название новости</h3>
                    <span class="news-tile__time">18:30</span>
                </div>
            </a>
            <a href="#" class="news-tile">
                <img class="news-tile__img" src="img/actual-news-little.png">
                <div class="news-tile__title-wrap flex-sb-aic">
                    <h3 class="news-tile__title">Название новости</h3>
                    <span class="news-tile__time">18:30</span>
                </div>
            </a>-->
        </div>
        <div class="dots-line"></div>
        <h2 class="section-title section-title--games"><img class="section-title__img" src="img/games-icon.png">Игры
        </h2>
        <div class="flex-sb flex--games">
            <div class="flex flex--right-left-big">
                <a href="#" class="news-tile">
                    <img class="news-tile__img" src="img/games-little.png">
                    <div class="news-tile__title-wrap flex-sb-aic">
                        <h3 class="news-tile__title">Название новости</h3>
                        <span class="news-tile__time">18:30</span>
                    </div>
                </a>
                <a href="#" class="news-tile">
                    <img class="news-tile__img" src="img/games-little.png">
                    <div class="news-tile__title-wrap flex-sb-aic">
                        <h3 class="news-tile__title">Название новости</h3>
                        <span class="news-tile__time">18:30</span>
                    </div>
                </a>
                <a href="#" class="news-tile">
                    <img class="news-tile__img" src="img/games-little.png">
                    <div class="news-tile__title-wrap flex-sb-aic">
                        <h3 class="news-tile__title">Название новости</h3>
                        <span class="news-tile__time">18:30</span>
                    </div>
                </a>
                <a href="#" class="news-tile">
                    <img class="news-tile__img" src="img/games-little.png">
                    <div class="news-tile__title-wrap flex-sb-aic">
                        <h3 class="news-tile__title">Название новости</h3>
                        <span class="news-tile__time">18:30</span>
                    </div>
                </a>
            </div>
            <a href="#" class="news-tile news-tile--big">
                <img class="news-tile__img" src="img/games-big.png">
                <div class="news-tile__title-wrap flex-sb-aic">
                    <h3 class="news-tile__title">Название новости</h3>
                    <span class="news-tile__time">18:30</span>
                </div>
            </a>
        </div>
        <div class="dots-line"></div>
        <div class="subscribe-news">
            <span class="subscribe-news__title">Подпишитесь на наши новости</span>
            <?php echo do_shortcode('[contact-form-7 id="117" html_class=""]'); ?>
        </div>
        <div class="dots-line"></div>
        <h2 class="section-title section-title--games"><img class="section-title__img" src="img/literature-icon.png">Литература
        </h2>
        <div class="flex-sb flex--games">
            <a href="#" class="news-tile news-tile--big">
                <img class="news-tile__img" src="img/games-big.png">
                <div class="news-tile__title-wrap flex-sb-aic">
                    <h3 class="news-tile__title">Название новости</h3>
                    <span class="news-tile__time">18:30</span>
                </div>
            </a>
            <div class="flex flex--right-left-big">
                <a href="#" class="news-tile">
                    <img class="news-tile__img" src="img/games-little.png">
                    <div class="news-tile__title-wrap flex-sb-aic">
                        <h3 class="news-tile__title">Название новости</h3>
                        <span class="news-tile__time">18:30</span>
                    </div>
                </a>
                <a href="#" class="news-tile">
                    <img class="news-tile__img" src="img/games-little.png">
                    <div class="news-tile__title-wrap flex-sb-aic">
                        <h3 class="news-tile__title">Название новости</h3>
                        <span class="news-tile__time">18:30</span>
                    </div>
                </a>
                <a href="#" class="news-tile">
                    <img class="news-tile__img" src="img/games-little.png">
                    <div class="news-tile__title-wrap flex-sb-aic">
                        <h3 class="news-tile__title">Название новости</h3>
                        <span class="news-tile__time">18:30</span>
                    </div>
                </a>
                <a href="#" class="news-tile">
                    <img class="news-tile__img" src="img/games-little.png">
                    <div class="news-tile__title-wrap flex-sb-aic">
                        <h3 class="news-tile__title">Название новости</h3>
                        <span class="news-tile__time">18:30</span>
                    </div>
                </a>
            </div>
        </div>
        <a target="<?= get_field('banner_2_link')['target']; ?>" href="<?= get_field('banner_2_link')['url']; ?>" class="banner banner--second">
            <img class="banner__img" src="<?php the_field('banner_2'); ?>">
        </a>
        <h2 class="section-title section-title--games"><img class="section-title__img" src="img/psychology-icon.png">Психология
        </h2>
        <div class="flex-sb flex--games">
            <div class="flex flex--right-left-big">
                <a href="#" class="news-tile">
                    <img class="news-tile__img" src="img/games-little.png">
                    <div class="news-tile__title-wrap flex-sb-aic">
                        <h3 class="news-tile__title">Название новости</h3>
                        <span class="news-tile__time">18:30</span>
                    </div>
                </a>
                <a href="#" class="news-tile">
                    <img class="news-tile__img" src="img/games-little.png">
                    <div class="news-tile__title-wrap flex-sb-aic">
                        <h3 class="news-tile__title">Название новости</h3>
                        <span class="news-tile__time">18:30</span>
                    </div>
                </a>
                <a href="#" class="news-tile">
                    <img class="news-tile__img" src="img/games-little.png">
                    <div class="news-tile__title-wrap flex-sb-aic">
                        <h3 class="news-tile__title">Название новости</h3>
                        <span class="news-tile__time">18:30</span>
                    </div>
                </a>
                <a href="#" class="news-tile">
                    <img class="news-tile__img" src="img/games-little.png">
                    <div class="news-tile__title-wrap flex-sb-aic">
                        <h3 class="news-tile__title">Название новости</h3>
                        <span class="news-tile__time">18:30</span>
                    </div>
                </a>
            </div>
            <a href="#" class="news-tile news-tile--big">
                <img class="news-tile__img" src="img/games-big.png">
                <div class="news-tile__title-wrap flex-sb-aic">
                    <h3 class="news-tile__title">Название новости</h3>
                    <span class="news-tile__time">18:30</span>
                </div>
            </a>
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
