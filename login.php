<?php

use App\Classes\Redirect;
use App\Classes\Session;
use App\Classes\Template;

require_once './core/init.php';

if ( $auth->isLoggedIn() ) {
    Redirect::to('index.php');
}

if ( isset( $_POST[ 'submit' ] ) ) {

    if( !isset( $_POST['token'] ) )
        Redirect::to( 'login.php', 'You need to login to view this page.', 'error' );

    if( $_POST['token'] !== Session::get( 'token' ) ) {
        Redirect::to( 'login.php', 'You need to login to view this page.', 'error' );
    }

    $username = sanitize_text_field( $_POST['username'] );
    $password = sanitize_text_field( $_POST['password'] );

    $password = md5($password);

    if ( $auth->checkLogin( $username, $password ) ) {
        Redirect::to('overview.php', 'You have been logged in', 'success');
    } else {
        Redirect::to('login.php', 'Login is not valid', 'error');
    }
}

$template = new Template('templates/main.php');
$template->title = 'Login';
$template->page = 'login';
$template->auth = $auth;
echo $template;

