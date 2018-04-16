<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package igrodetki
 */

if (!is_active_sidebar('sidebar-1')) {
    //return;
}
?>

<div class="sidebar">
    <span class="sidebar__last-news-title"><span class="square square--green"></span>Последние</span>
    <?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => '5'
    );
    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post(); ?>
            <div class="flex-sb sidebar__news-item">
                <div class="sidebar__news-left">
                    <a href="<?php the_permalink(); ?>" class="sidebar__news-title"><?php the_field('sidebar_post_title'); ?></a>
                    <span class="sidebar__news-time"><?php the_time('G:i'); ?></span>
                </div>
                <img class="sidebar__news-right" src="<?php the_field('thumbnail_mini'); ?>">
            </div>
            <div class="grey-line grey-line--sidebar"></div>
        <?php }
    }
    wp_reset_postdata();
    ?>
    <a target="<?= get_field('sidebar_banner_link', 'option')['target']; ?>"
       href="<?= get_field('sidebar_banner_link', 'option')['url']; ?>">
        <img class="sidebar__big-img" src="<?php the_field('sidebar_banner', 'option'); ?>">
    </a>
</div>
