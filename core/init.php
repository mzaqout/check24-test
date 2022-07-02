<?php
include_once 'autoload.php';

$db = Database::getInstance();

try {
    $conn = $db->getConnection();
} catch (Exception $e) {
    echo $e->getMessage();
}

$post = new Post($conn);