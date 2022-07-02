<?php
if ( $comments ) {
    $count = 1;
    echo '<div class="container m-1">';
    foreach ( $comments as $comment ) {
        echo '<div class="comment" id="comment_' . $comment['id'] .'">';
        echo '<span>' . $count . '. ' . $comment['commenter_name'] . '</span> <span>(' . Carbon\Carbon::createFromDate($comment['created_at']) . ')</span> <span>'. $comment['comment'] .'</span>';
        if ( $auth->getUserId() == $comment['user_id'] ) {
            echo '<a data-url="delete_comment.php" data-id=' . $comment['id'] .' class="delete_comment"> [X] </a>';
        }
        echo '</div>';
        $count++;
    }
    echo '</div>';
} else {
    echo '<p>No comments yet.</p>';
}
