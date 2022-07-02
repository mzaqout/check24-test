<?php
include_once 'autoload.php';

Session::init();

if( !Session::has( 'token' ) ) {
    Session::set( 'token' , md5( uniqid(microtime(), true ) ) );
}

$db = Database::getInstance();

try {
    $conn = $db->getConnection();
    $post = new Post( $conn );
    $auth = new Auth( $conn, new Session() );
} catch ( Exception $e ) {
    echo $e->getMessage();
}
