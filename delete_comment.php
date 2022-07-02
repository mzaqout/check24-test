<?php

require_once './core/init.php';

if ( $_POST['comment_id'] ) {
    $id = $_POST['comment_id'];
    $comment->deleteById($id);

    echo json_encode([
        'success' => true,
        'message' => 'Comment deleted successfully.'
    ]);
}

