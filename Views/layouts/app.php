<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= isset($title) ? 'Gestion immobilier - '.$title : 'Gestion immobilier - Accueil' ?></title>
    <!-- lien boostrap css-->
    <link rel="stylesheet" href="<?= ROUTE.'/css/bootstrap/bootstrap.min.css'; ?>">
    <link rel="stylesheet" href="<?= ROUTE.'/css/bootstrap/bootstrap-grid.min.css'; ?>">
    <!--lien boostrap js-->
    <link rel="stylesheet" href="<?= ROUTE.'/css/bootstrap/js/bootstrap.min.js'; ?>">
    <!-- lien css personnaliser -->
    <link rel="stylesheet" href="<?= ROUTE.'/css/styles.css'; ?>">
    <!--lien de fontawesome-->

</head>
<body>

<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Carousel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?= $page_name == 'home' ? 'active' : ''; ?>">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?= $page_name == 'contact' ? 'active' : ''; ?>">
                    <a class="nav-link" href="<?= ROUTE.'/contact'; ?>">Contact</a>
                </li>
            </ul>
            <form class="form-inline mt-2 mt-md-0">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Login</button>
            </form>
        </div>
    </nav>
</header>

<main>
    <?= isset($content) ? $content : '<div class="align-center"><h1>Page Vide</h1></div>' ?>
</main>
<footer>
    <h3 class="align-center">
        &copy; FindIt -  Tous droits reserves.
    </h3>
</footer>


<!--lien de bibiotheque js-->
<script type="text/javascript" src="<?= ROUTE.'/js/popper.min.js'; ?>"></script>
<script src="<?= ROUTE.'/js/jquery.min.js'; ?>"></script>
<!-- script personnaliser -->
<script type="text/javascript" src="<?= ROUTE.'/js/js.js'; ?>"></script>

</body>
</html>