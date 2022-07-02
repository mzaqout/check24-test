<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="header-area">
                    <div class="row">
                        <div class="logo">
                            <a href="home.php"><img src="https://via.placeholder.com/100.png" alt="Home"></a>
                            <h1 class="site-title">Blog Name</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row border-top border-bottom py-5 mt-1">
                <div class="menu">
                    <ul>
                        <li><a href="overview.php">Overview</a></li>
                        <?php if($auth->isLoggedIn()): ?> <li><a href="new_entry.php">[New Entry]</a></li> <?php endif; ?>
                        <li><a href="imprint.php">Imprint</a></li>
                    </ul>
                    <?php if($auth->isLoggedIn()): ?>
                        <div class="logout">
                            <a href="logout.php">[Logout]</a>
                        </div>
                    <?php else: ?>
                    <a href="login.php">[Login]</a>
                    <?php endif; ?>
                </div>
        </div>
    </header>

    <?php if($page === 'login') :
        include_once 'partials/login.php';
    endif; ?>
</body>
</html>