<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package igrodetki
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required()) {
    return;
}
?>
<!--<a class="nofill-button nofill-button--comment">Оставить комментарий</a>-->

<?php
// You can start editing here -- including this comment!
if (have_comments()) :

    $fields = array(
        'author' => '
        <input required placeholder="Имя" id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30"' . $aria_req . ' />',
        'email' => '<input required placeholder="Email" id="email" name="email" type="email" value="' . esc_attr($commenter['comment_author_email']) . '" size="30"' . $aria_req . ' /></div></div>'
    );

    $comments_args = array(
        'fields' => $fields,
        'comment_notes_before' => '<div class="leave-comment wow fadeInUp" data-wow-duration="1s">
        <div class="form-title">' . get_field('news_comment_leave_form_title') . ' </div>
        <div class="form-wrap">',
        'title_reply' => '',
        'comment_notes_after' => '',
        'comment_field' => '<p class="comment-form-comment"><textarea placeholder="Комментарий..." id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>'
    );


    comment_form($comments_args); ?>
    <span class="article__comments-title"><span class="square"></span>Комментарии <?= get_comments_number(); ?></span>
    <div class="grey-line"></div>
    <div class="article__comments comments">
        <?php
        wp_list_comments(array(
//                'style' => 'ol',
            'short_ping' => true,
            'avatar_size' => 75,
            'reply_text' => 'Ответить',
            'callback' => 'mytheme_comment',
        ));
        ?>
    </div>
    <?php
endif; // Check for have_comments().


// If comments are closed and there are comments, let's leave a little note, shall we?
if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) : ?>
    <span class="article__comments-title"><span class="square"></span>Комментарии закрыты.</span>
    <?php
endif;
?>
