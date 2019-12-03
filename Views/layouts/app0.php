<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Scripts -->
    <script src="<?= ROUTE.'/js/app.js'; ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="<?= ROUTE.'/css/app.css'; ?>" rel="stylesheet">
    <title><?= isset($title) ? $title : 'Watat' ?></title>

</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="#">
                AppName
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="__Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    <li class="nav-item <?= $page_name === 'home' ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?= ROUTE.'/home'; ?>">Home</a>
                    </li>
                    <li class="nav-item <?= $page_name === 'blogs' ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?= ROUTE.'/blogs'; ?>">Blog</a>
                    </li>
                    <li class="nav-item <?= $page_name === 'contact' ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?= ROUTE.'/contact'; ?>">Contact</a>
                    </li>
                    <li class="nav-item <?= $page_name === 'about' ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?= ROUTE.'/about-us'; ?>">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <?= isset($_SESSION['auth']) ? '<strong>'.$auth_user->username.'</strong>' : 'Espace Membres'; ?> <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <ul>
                                <?php if(isset($_SESSION['auth'])): ?>
                                    <a class="dropdown-item" href="<?= ROUTE.'/logout'; ?>">
                                        Se deconnecter
                                    </a>
                                <?php else: ?>
                                    <a class="dropdown-item" href="<?= ROUTE.'/login'; ?>">
                                        Se connecter
                                    </a>
                                    <a class="dropdown-item" href="<?= ROUTE.'/register'; ?>">
                                        S'inscrire
                                    </a>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">

<!--        <?php
/*        //        var_dump($errors);
        */?>
        <?php /*if(isset($_SESSION['flash'])): */?>
            <?php /*foreach ($_SESSION['flash'] as $type => $message): */?>
                <div class="alert alert-<?/*= $type; */?>">
                    <?/*= $message; */?>
                </div>
            <?php /*endforeach; */?>
            <?php /*unset($_SESSION['flash']); */?>
        <?php /*endif; */?>
        <?php /*if(isset($errors) && !empty($errors)): */?>
            <?php /*if(isset($errors['confirm'])): */?>
                <div class="alert alert-info">
                </div>
            <?php /*else: */?>
                <div class="alert alert-danger">
                    <ul>
                        <?php /*foreach ($errors as $error): */?>
                            <li>
                                <?/*= $error; */?>
                            </li>
                        <?php /*endforeach; */?>
                    </ul>
                </div>
            <?php /*endif; */?>

            <?php
            /*foreach ($errors as $type => $message): */
            ?>
                <div class="alert alert-<?/*= !$message ? 'info' : 'danger'; */?>">
                    <?/*= $message; */?>
                </div>
            <?php /*endforeach; */?>
-->
        <?php /*endif; */?>
        <?= isset($content) ? $content : '<div class="align-center"><h1>Welcome</h1></div>' ?>
    <footer>
        <h3 class="align-center">
            &copy; WatatProd -  Tous droits reserves.
        </h3>
    </footer>
</body>
</html>