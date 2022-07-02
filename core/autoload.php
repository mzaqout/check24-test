<?php

function autoload($class) {
    if ( $class ) {
        $class = str_replace('\\', '/', $class);
        require_once './classes/' . $class . '.php';
    }
}

spl_autoload_register( 'autoload' );