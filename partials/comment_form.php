<div class="single-post-container">
<div class="row">
        <form class="login-form" action="new_comment.php" method="post">
            <input type="hidden" value="<?php echo $_GET['id']?>" name="post_id">
            <input type="hidden" value="<?php echo \App\Classes\Session::get( 'token' )?>" name="token">
            <div class="form-group">
                <label for="name">Name*:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="name">Mail:</label>
                <input type="text" class="form-control" id="mail" name="mail">
            </div>
            <div class="form-group">
                <label for="url">URL:</label>
                <input type="text" class="form-control" id="url" name="url">
            </div>

            <div class="form-group d-flex">
                <label for="comment">Comment*:</label>
                <textarea name="comment" id="Comment" cols="100" rows="10"></textarea>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Add Comment</button>

        </form>
    </div>
</div>

<!-- if I had time I would add a captcha for this form to avoid automatically creation of comments and unexpected behaviour -->