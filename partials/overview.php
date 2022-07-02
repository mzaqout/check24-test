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
            echo '<div class="post-title"><span>' . Carbon\Carbon::createFromDate($post['created_at']) . '</span> - <span>' . ucfirst($post['title']) . '</span></div>';
            echo '<div class="d-flex justify-content-between"><div class="d-flex justify-content-between flex-direction-column flex-1">' . html_entity_decode( $post['body'] ) . '
            <div class="d-flex justify-content-between"><p>Author: ' . $post['first_name'] . ' ' . $post['last_name'] . '</p> <p>Comments: 2</p></div>
            </div><img class="post-image" src="' . $post['picture_link'] . '" alt=""></div>';
            echo '</div>';
        }
        ?>
    </div>
    <?php
} else {
    echo 'No posts found';
}
?>