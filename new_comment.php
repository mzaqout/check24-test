<?php

use App\Classes\Redirect;
use App\Classes\Session;
use App\Classes\Comment;

require_once './core/init.php';

if ( isset( $_POST[ 'submit' ] ) ) {
    if ( ! isset($_POST['token'])) {
        Redirect::to('login.php', 'You need to login to view this page.', 'danger');
    }

    if ($_POST['token'] !== Session::get('token')) {
        Redirect::to('login.php', 'You need to login to view this page.', 'danger');
    }

    $name = sanitize_text_field( $_POST['name'] );
    $text = sanitize_html_field( $_POST['comment'] );
    $post_id = sanitize_text_field( $_POST['post_id'] );

    if ( ! $name || ! $text ) {
        Redirect::to('details.php?id=' . $post_id, 'Please fill in all the data.', 'danger');
    }

    $mail = $_POST['mail'];
    $website = $_POST['url'];

    try {
        $comment = new \App\Classes\Comment( $conn );
        $comment->setName( $name );
        $comment->setMail( $mail );
        $comment->setWebsite( $website );
        $comment->setComment($text);
        $comment->setPostId( $post_id );
        $comment->setUserId( $auth->getUserId() );
        $comment->save();

        Redirect::to('details.php?id=' . $post_id, 'Comment created successfully.', 'success');

    } catch ( Exception $e ) {
        die($e->getMessage());
    }
}