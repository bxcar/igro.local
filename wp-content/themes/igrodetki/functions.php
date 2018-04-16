<?php
/**
 * igrodetki functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package igrodetki
 */

if ( ! function_exists( 'igrodetki_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function igrodetki_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on igrodetki, use a find and replace
		 * to change 'igrodetki' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'igrodetki', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'igrodetki' ),
			'menu-1-footer' => esc_html__( 'Footer-1', 'igrodetki' ),
			'menu-2-footer' => esc_html__( 'Footer-2', 'igrodetki' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'igrodetki_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'igrodetki_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function igrodetki_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'igrodetki_content_width', 640 );
}
add_action( 'after_setup_theme', 'igrodetki_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function igrodetki_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'igrodetki' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'igrodetki' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'igrodetki_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function igrodetki_scripts() {
	wp_enqueue_style( 'libs.min.css', get_template_directory_uri() . '/dist/css/libs.min.css');
	wp_enqueue_style( 'owl.theme.default.css', get_template_directory_uri() . '/dist/css/owl.theme.default.css');
	wp_enqueue_style( 'main.css', get_template_directory_uri() . '/dist/css/main.css');

    wp_enqueue_script( 'libs.min.js', get_template_directory_uri() . '/dist/js/libs.min.js', array(), '', true);
    wp_enqueue_script( 'common.js', get_template_directory_uri() . '/dist/js/common.js', array(), '', true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'igrodetki_scripts' );

if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title' => 'Общие настройки сайта',
        'menu_title' => 'Общие настройки',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'manage_options',
        'redirect' => true
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Header',
        'menu_title' => 'Header',
        'menu_slug' => 'header',
        'parent_slug' => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Footer',
        'menu_title' => 'Footer',
        'menu_slug' => 'footer',
        'parent_slug' => 'theme-general-settings',
    ));
}

/**
 * Функция возвращает окончание для множественного числа слова на основании числа и массива окончаний
 * @param  $number int Число на основе которого нужно сформировать окончание
 * @param  $ending_arr  array Массив слов с правильными окончаниями для чисел (1, 2, 5),
 *         например array('комментарий', 'комментария', 'комментариев')
 * @return string
 */
function get_num_ending($number, $ending_arr)
{
    $number = $number % 100;
    if ($number >= 11 && $number <= 19) {
        $ending = $ending_arr[2];
    } else {
        $i = $number % 10;
        switch ($i) {
            case (1):
                $ending = $ending_arr[0];
                break;
            case (2):
            case (3):
            case (4):
                $ending = $ending_arr[1];
                break;
            default:
                $ending = $ending_arr[2];
        }
    }
    return $ending;
}

function comments_number_ru()
{
    global $id;
    $number = get_comments_number($id);

    if ($number == 0) {
        $output = __('0 комментариев', 'igrodetki');
    } else  {
        $output = '' . $number . ' ' . get_num_ending($number, array(__('комментарий', 'igrodetki'), __('комментария', 'igrodetki'), __('комментариев', 'igrodetki')));
    }
    echo $output;
}

add_filter('comments_number', 'comments_number_ru');


function mytheme_comment($comment, $args, $depth)
{
    $GLOBALS['comment'] = $comment;
    if ($comment->comment_parent) {
        switch ($comment->comment_type) :
            case '' :
                ?>
                <!--<li <?php /*comment_class('comment answer'); */?> id="li-comment-<?php /*comment_ID() */?>">
                    <div class="comment-wrap" id="comment-<?php /*comment_ID(); */?>">
                        <div class="user-img">
                            <?php /*echo get_avatar($comment->comment_author_email, $args['avatar_size']); */?>
                        </div>

                        <?php /*comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) */?>

                        <?php /*printf(__('<cite class="fn name">%s</cite>'), get_comment_author_link()) */?>

                        <div class="date"><?php /*printf(__('%1$s'), get_comment_date('j F Y'), '') */?></div>

                        <?php /*comment_text() */?>
                        <?php /*//edit_comment_link(__('Редактировать'), ' ');
                        */?>

                        <?php /*if ($comment->comment_approved == '0') : */?>
                            <div
                                class="comment-awaiting-verification"><?php /*_e('Your comment is awaiting moderation.') */?></div>
                            <br/>
                        <?php /*endif; */?>
                    </div>
                </li>-->
                <?php
                break;
            case 'pingback'  :
            case 'trackback' :
                ?>
                <li class="post pingback">
                <?php comment_author_link(); ?>
                <?php edit_comment_link(__('Редактировать'), ' '); ?>
                <?php
                break;
        endswitch;
    }

    else {
        switch ($comment->comment_type) :
            case '' :
                ?>
                <div class="comments__item">
                    <div class="flex-sb-aic comments__item-top">
                        <img class="comments__author-icon" src="<?= get_template_directory_uri(); ?>/dist/img/user-icon.png">
                        <span class="comments__author-name"><?= get_user_meta( $comment->user_id, 'nickname', true ) ?></span>
                        <!--                        <span class="comments__time">19.02 в 12:30</span>-->
                        <span class="comments__time"><?= get_comment_date('d.m')?> в <?= get_comment_date('G.i')?></span>
                        <img class="comments__bookmark" src="<?= get_template_directory_uri(); ?>/dist/img/bookmark.png">
                    </div>
                    <div class="flex-sb-aic">
                        <p class="comments_comment"><?= get_comment_text() ?></p>
                    </div>
                </div>
                <!--<li <?php /*comment_class('comment'); */?> id="li-comment-<?php /*comment_ID() */?>">
                    <div class="comment-wrap" id="comment-<?php /*comment_ID(); */?>">
                        <div class="user-img">
                            <?php /*echo get_avatar($comment->comment_author_email, $args['avatar_size']); */?>
                        </div>

                        <?php /*comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) */?>

                        <?php /*printf(__('<cite class="fn name">%s</cite>'), get_comment_author_link()) */?>

                        <div class="date"><?php /*printf(__('%1$s'), get_comment_date('j F Y'), '') */?></div>

                        <?php /*comment_text() */?>
                        <?php /*//edit_comment_link(__('Редактировать'), ' ');
                        */?>

                        <?php /*if ($comment->comment_approved == '0') : */?>
                            <div
                                class="comment-awaiting-verification"><?php /*_e('Your comment is awaiting moderation.') */?></div>
                            <br/>
                        <?php /*endif; */?>
                    </div>
                </li>-->

                <?php
                break;
            case 'pingback'  :
            case 'trackback' :
                ?>
                <li class="post pingback">
                <?php comment_author_link(); ?>
                <?php edit_comment_link(__('Редактировать'), ' '); ?>
                <?php
                break;
        endswitch;
    }
}