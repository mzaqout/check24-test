<div id="popup1" class="overlay">
    <div class="popup">
        <h2 class="author_title">Authors</h2>
        <a class="close" href="#">&times;</a>
        <div class="content">
            <?php
            foreach ($authors as $author) {
                echo '<p class="author_name">' . $author['first_name'] . ' ' . $author['last_name'] . '</p>';
            }
            ?>
        </div>
    </div>
</div>