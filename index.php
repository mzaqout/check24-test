<?php

use Check24\Classes\Database;

require_once '../vendor/autoload.php';

$db = Database::getInstance();

try {
    $conn = $db->getConnection();
    echo 'here';
} catch (Exception $e) {
    die($e->getMessage());
}

