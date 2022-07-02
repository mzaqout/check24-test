<?php
use App\Classes\Template;

require_once './core/init.php';

if ( $_GET['slug'] ) {
    $slug = $_GET['slug'];
    $page_content = $page->getPageBySlug($slug);
    $template = new Template('templates/main.php');
    $template->title = 'Page';
    $template->auth = $auth;
    $template->page = 'page_content';
    $template->page_content = $page_content;
    echo $template;
}