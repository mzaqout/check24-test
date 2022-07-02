<div class="container mt-2">
    <div class="row">
        <form class="login-form" action="login.php" method="post">
            <input type="hidden" value="<?php
            use App\Classes\Session;

            echo Session::get('token')?>" name="token">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <?php if(Session::has('message')): ?>
                <div class="alert alert-danger"><?php echo Session::get('message'); ?></div>
                <?php Session::unset('message'); ?>
            <?php endif; ?>

            <button type="submit" class="btn btn-primary" name="submit">Login</button>

        </form>
    </div>
</div>