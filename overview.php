<?php

use App\Classes\Template;

require_once './core/init.php';

$results_per_page = 3;

if (!isset ($_GET['page']) ) {
    $page = 1;
} else {
    $page = $_GET['page'];
}
$page_first_result = ($page-1) * $results_per_page;

$posts_count = $post->getPostsCount();

$pages_count = ceil($posts_count / $results_per_page);

$template = new Template('templates/main.php');
$template->title = 'Overview';
$template->posts = $post->getPerPage( $page_first_result, $results_per_page );
$template->page = 'overview';
$template->total_pages = $pages_count;
$template->auth = $auth;
echo $template;
