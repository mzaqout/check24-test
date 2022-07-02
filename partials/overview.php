<?php
if( $posts ) {
    ?>
    <div class="container mt-1">
        <?php
        foreach( $posts as $post ) {
            echo '<div class="post-container">';
            echo '<div class="post-title"><span>' . $post['created_at'] . '</span> - <span>' . ucfirst($post['title']) . '</span></div>';
            echo '<div class="d-flex justify-content-between"><div class="d-flex justify-content-between flex-direction-column flex-1">' . html_entity_decode($post['body']) . '
            <div class="d-flex justify-content-between"><p>Author: ' . $post['first_name'] . ' ' . $post['last_name'] . '</p> <p>Comments: 2</p></div>
            </div><img src="' . $post['picture_link'] . '" alt=""></div>';
            echo '</div>';
        }
        ?>
    </div>
    <?php
} else {
    echo 'No posts found';
}
?>