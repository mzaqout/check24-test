<?php
require_once './core/init.php';

$template = new Template('templates/main.php');
$template->title = 'Home';
$template->posts = $post->getAll();
echo $template;
