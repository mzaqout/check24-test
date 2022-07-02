<?php

if ( $post ) {
    echo '<div class="container mt-1">';
    echo '<div class="single-post-container">';
    echo '<div class="single-post-title"><span>' . Carbon\Carbon::createFromDate($post['created_at']) . '</span></div>';
    echo '<h1 class="post-head">' . ucfirst($post['title']) . '</h1>';
    echo '<div><img class="single-post-image" src="' . $post['picture_link'] . '" alt=""></div>';
    echo '<div class="d-flex justify-content-between flex-direction-column flex-1 line-height-1">' . html_entity_decode( $post['body'] ) . ' </div>';
    echo '<div class=""><p>Author: ' . $post['first_name'] . ' ' . $post['last_name'] . '</p></div>';
    echo '</div>';

    if ( $auth->isLoggedIn() ) {
        include_once 'partials/comments.php';
        include_once 'partials/comment_form.php';
    }
}