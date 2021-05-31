<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= isset($title) ? 'Gestion immobilier - '.$title : 'Gestion immobilier - Accueil' ?></title>
    <!-- lien boostrap css-->
    <link rel="stylesheet" href="<?= ROUTE.'/css/bootstrap.min.css'; ?>">
    <link rel="stylesheet" href="<?= ROUTE.'/css/main.css'; ?>">

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
                    <a class="nav-link" href="<?= ROUTE . '/'; ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?= $page_name == 'contact' ? 'active' : ''; ?>">
                    <a class="nav-link" href="<?= ROUTE . '/contact'; ?>">Contact</a>
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

    <!-- Footer -->
     <footer class="page-footer font-small mdb-color lighten-3 pt-4">
    <div class="container text-center text-md-left">
        <div class="row">
            <div class="col col-lg-3">
                <h5 class="font-weight-bold text-uppercase mb-4">Platform Immobilier </h5>
                <p>Here you can use rows and columns to organize your footer content.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit amet numquam iure provident voluptate .</p>
            </div>
            <div class="col col-lg-3">
                <h5 class="font-weight-bold text-uppercase mb-4">About</h5>
                <ul class="list-unstyled">
                    <li>
                        <p>
                            <a href="#!">Achat</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href="#!">Vente</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href="#!">A propos</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href="#!">FAQ</a>
                        </p>
                    </li>
                </ul>

            </div>
            <div class="col col-lg-3">
                <h5 class="font-weight-bold text-uppercase mb-4">Address</h5>
                <ul class="list-unstyled">
                    <li>
                        <p>
                            <i class="fas fa-home mr-3"></i>Douala, NY 10012, CM</p>
                    </li>
                    <li>
                        <p>
                            <i class="fas fa-envelope mr-3"></i>platformimmobilier@gmail.com</p>
                    </li>
                    <li>
                        <p>
                            <i class="fas fa-phone mr-3"></i> + 22 234 567 88</p>
                    </li>
                    <li>
                        <p>
                            <i class="fas fa-print mr-3"></i> + 22 234 567 89</p>
                    </li>
                </ul>

            </div>
            <div class="col-lg-3">
                <h5 class="font-weight-bold text-uppercase mb-4">Follow Us</h5>
                <a type="button" class="btn-floating btn-fb">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a type="button" class="btn-floating btn-tw">
                    <i class="fab fa-twitter"></i>
                </a>
                <a type="button" class="btn-floating btn-gplus">
                    <i class="fab fa-google-plus-g"></i>
                </a>
                <a type="button" class="btn-floating btn-dribbble">
                    <i class="fab fa-dribbble"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 bg-#42127b">
        &copy; FindIt <?= date('Y'); ?> -  Tous droits reserves.
        <a href="#">IUC-TI-PAM2-1920</a>
    </div>
    <!-- Copyright -->

</footer>
     <!-- Footer -->


<!--lien de bibiotheque js-->
<script type="text/javascript" src="<?= ROUTE.'/js/bootstrap.min.js'; ?>"></script>
<script src="<?= ROUTE.'/js/jquery.min.js'; ?>"></script>
<!-- script personnaliser -->
<script type="text/javascript" src="<?= ROUTE.'/js/main.js'; ?>"></script>

</body>
</html>
