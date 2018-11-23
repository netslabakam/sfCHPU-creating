<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <link rel="shortcut icon" href="/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>

</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
        <div class="container">
            <a href="<?php echo url_for('@homepage') ?>" class="navbar-brand" >Главная</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicNavmenu" aria-controls="basicNavmenu" aria-expanded="false" aria-label="Toggle Navigarion">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="basicNavmenu">
                <ul class="navbar-nav justify-content-center text-center pt-2">
                    <li class="text-dark">
                        <a href="<?php echo url_for('@chpu_new') ?>" class="nav-link">Новая ссылка</a>
                    </li>
                    <?php if (!$sf_user->isAuthenticated()): ?>
                        <a href="<?php echo url_for('@sf_guard_user_new') ?>" class="nav-link waves-effect waves-light">Регистрация</a>
                        </li>
                    <?php endif ?>
                    <?php if ($sf_user->isAuthenticated()): ?>
                        <li>
                            <a href="<?php echo url_for('@sf_guard_signout') ?>" class="nav-link waves-effect waves-light">Выход</a>
                        </li>
                    <?php endif ?>
                    <li>
                        <?php if (!$sf_user->isAuthenticated()): ?>
                        <a href="<?php echo url_for('@sf_guard_signin') ?>" class="nav-link waves-effect waves-light">Вход</a>
                    </li>
                <?php endif ?>
                </ul>
            </div>
        </div>
    </nav>
</header>
<main class="bg-light align-items-center modal-dialog-centered align-content-center justify-content-center">
    <div class="container ">
        <?php echo $sf_content ?>
    </div>
</main>
<footer class="bg-dark">

</footer>
</body>
</html>
