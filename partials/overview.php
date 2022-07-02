<?php
if( $posts ) {
    ?>
    <div class="container mt-1">
        <?php
        foreach( $posts as $post ) {
            if ( $post['body'] ) {
                if ( strlen( $post['body'] ) >= 1000 ) {
                    $post['body'] = substr( $post['body'], 0, 1000 ) . '...';
                }
            } else {
                $body = 'No body';
            }
            echo '<div class="post-container">';
            echo '<a href="details.php?id=' . $post['id'] .'"> <div class="post-title"><span>' . Carbon\Carbon::createFromDate($post['created_at']) . '</span> - <span>' . ucfirst($post['title']) . '</span></a></div>';
            echo '<div class="d-flex justify-content-between"><div class="d-flex justify-content-between flex-direction-column flex-1"><a href="details.php?id=' . $post['id'] .'">' . html_entity_decode( $post['body'] ) . '</a>
            <div class="d-flex justify-content-between"><a href="details.php?id=' . $post['id'] .'"><p>Author: ' . $post['first_name'] . ' ' . $post['last_name'] . '</p></a> <p><a href="details.php?id=' . $post['id'] .'">Comments: 2</a></p></div>
            </div><a href="details.php?id=' . $post['id'] .'"><img class="post-image" src="' . $post['picture_link'] . '" alt=""></a></div>';
            echo '</div>';
        }
        ?>
    </div>
    <?php
} else {
    echo 'No posts found';
}
?>