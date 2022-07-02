<?php

use App\Classes\Template;

require_once './core/init.php';

$template = new Template('templates/main.php');
$template->title = 'New Entry';
$template->page = 'new-entry';
$template->auth = $auth;
echo $template;
