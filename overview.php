<?php

use App\Classes\Template;

require_once './core/init.php';

$template = new Template('templates/main.php');
$template->title = 'Overview';
$template->posts = $post->getAll();
$template->page = 'overview';
$template->auth = $auth;
echo $template;
