<?php

require_once './core/init.php';


if ( isset( $_POST[ 'submit' ] ) ) {

    if( !isset( $_POST['token'] ) )
        Redirect::to( 'login.php', 'You need to login to view this page.', 'error' );

    if( $_POST['token'] !== Session::get( 'token' ) ) {
        Redirect::to( 'login.php', 'You need to login to view this page.', 'error' );
    }

    $username = $_POST[ 'username' ];
    $password = md5($_POST[ 'password' ]);

    if ( $auth->checkLogin( $username, $password ) ) {
        Redirect::to('login.php', 'You have been logged in', 'success');
    } else {
        Redirect::to('login.php', 'Login is not valid', 'error');
    }
}

$template = new Template('templates/main.php');
$template->title = 'Login';
$template->page = 'login';
$template->auth = $auth;
echo $template;
