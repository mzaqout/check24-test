<?php

use App\Classes\Auth;
use App\Classes\Database;
use App\Classes\Post;
use App\Classes\Session;

require_once './vendor/autoload.php';

Session::init();

if( !Session::has( 'token' ) ) {
    Session::set( 'token' , md5( uniqid(microtime(), true ) ) );
}

$db = Database::getInstance();

try {
    $conn = $db->getConnection();
    $post = new Post( $conn );
    $comment = new \App\Classes\Comment( $conn );
    $auth = new Auth( $conn, new Session() );
} catch ( Exception $e ) {
    echo $e->getMessage();
}
