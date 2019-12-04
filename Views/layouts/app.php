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

    <!-- Footer -->
    <footer class="page-footer font-small mdb-color lighten-3 pt-4">
        <div class="container text-center text-md-left">
            <div c<!-- Grid column -->
            <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

                <!-- Content -->
                <h5 class="font-weight-bold text-uppercase mb-4">Footer Content</h5>
                <p>Here you can use rows and columns to organize your footer content.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit amet numquam iure provident voluptate
                    esse
                    quasi, veritatis totam voluptas nostrum.</p>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mb-4">About</h5>

                <ul class="list-unstyled">
                    <li>
                        <p>
                            <a href="#!">PROJECTS</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href="#!">ABOUT US</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href="#!">BLOG</a>
                        </p>
                    </li>
                    <li>
                        <p>
                            <a href="#!">AWARDS</a>
                        </p>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

                <!-- Contact details -->
                <h5 class="font-weight-bold text-uppercase mb-4">Address</h5>

                <ul class="list-unstyled">
                    <li>
                        <p>
                            <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                    </li>
                    <li>
                        <p>
                            <i class="fas fa-envelope mr-3"></i> info@example.com</p>
                    </li>
                    <li>
                        <p>
                            <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                    </li>
                    <li>
                        <p>
                            <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

                <!-- Social buttons -->
                <h5 class="font-weight-bold text-uppercase mb-4">Follow Us</h5>

                <!-- Facebook -->
                <a type="button" class="btn-floating btn-fb">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <!-- Twitter -->
                <a type="button" class="btn-floating btn-tw">
                    <i class="fab fa-twitter"></i>
                </a>
                <!-- Google +-->
                <a type="button" class="btn-floating btn-gplus">
                    <i class="fab fa-google-plus-g"></i>
                </a>
                <!-- Dribbble -->
                <a type="button" class="btn-floating btn-dribbble">
                    <i class="fab fa-dribbble"></i>
                </a>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">
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