<?php

use App\Classes\Redirect;
use App\Classes\Session;

require_once './vendor/autoload.php';

Session::init();

Session::destroy();

Redirect::to(   'index.php', 'You have been logged out', 'success');