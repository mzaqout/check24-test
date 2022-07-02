<?php

use App\Classes\Redirect;
use App\Classes\Template;

require_once './core/init.php';

if ( ! $_GET['id'] ) {
    Redirect::to( 'overview.php', 'Please select a post to view.', 'danger' );
}

$id = $_GET['id'];

$data = $post->getById( $id );
$comments = $comment->getByPostId( $id );

$template = new Template('templates/main.php');
$template->title = 'Post Details';
$template->post = $data;
$template->comments = $comments;
$template->page = 'post-details';
$template->auth = $auth;
echo $template;
