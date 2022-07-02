<div class="container mt-2">
    <div class="row">
        <form class="login-form" action="new_entry.php" method="post">
            <input type="hidden" value="<?php echo \App\Classes\Session::get( 'token' )?>" name="token">
            <div class="form-group">
                <label for="username">Title:</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="picture">Link to the picture:</label>
                <input type="text" class="form-control" id="picture" name="picture">
            </div>

            <div class="form-group d-flex">
                <label for="body">Text:</label>
                <textarea name="body" id="body"></textarea>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Add Entry</button>

        </form>
    </div>
</div>