<?php

use App\Classes\Template;
use App\Classes\Redirect;
use App\Classes\Session;

require_once './core/init.php';

if ( isset( $_POST[ 'submit' ] ) ) {

    if( !isset( $_POST['token'] ) )
        Redirect::to( 'login.php', 'You need to login to view this page.', 'danger' );

    if( $_POST['token'] !== Session::get( 'token' ) ) {
        Redirect::to( 'login.php', 'You need to login to view this page.', 'danger' );
    }

    $title      = $_POST['title'];
    $picture    = $_POST['picture'];
    $body    = $_POST['body'];

    if( $title == '' || $picture == '' || $body == ''){
        Redirect::to( 'new_entry.php', 'Please fill in all the data.', 'danger' );
    }

    try {
        $post = new \App\Classes\Post( $conn );
        $post->setTitle( $title );
        $post->setPictureLink( $picture );
        $post->setBody( $body );
        $post->setUserId( $auth->getUserId() );
        $post->save();

        Redirect::to( 'overview.php', 'Post created successfully.', 'success' );

    } catch ( Exception $e ) {
        die($e->getMessage());
    }

}

$template = new Template('templates/main.php');
$template->title = 'New Entry';
$template->page = 'new-entry';
$template->auth = $auth;
echo $template;
