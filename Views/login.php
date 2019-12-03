<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>IT Solution</title>

    <!-- Favicons -->
    <link href="<?= ROUTE.'/img/favicon.png'; ?>" rel="icon">
    <link href="<?= ROUTE.'/img/apple-touch-icon.png'; ?>" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="<?= ROUTE.'/lib/bootstrap/css/bootstrap.min.css'; ?>" rel="stylesheet">
    <!--external css-->
    <link href="<?= ROUTE.'/lib/font-awesome/css/font-awesome.css'; ?>" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="<?= ROUTE.'/css/style.css'; ?>" rel="stylesheet">
    <link href="<?= ROUTE.'/css/style-responsive.css'; ?>" rel="stylesheet">

    <!-- =======================================================
      Template Name: Dashio
      Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
      Author: TemplateMag.com
      License: https://templatemag.com/license/
    ======================================================= -->
</head>

<body>
<!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
<div id="login-page">
    <div class="container">
        <form class="form-login" action="" method="post">
            <h2 class="form-login-heading" >sign in now</h2>
            <?php if(isset($errors['confirm_id']) || isset($errors['confirm'])): ?>
                <div class="alert alert-info">
                    <?php include "../Views/parts/sendconfirm.php"; ?>
                </div>
            <?php elseif(isset($errors['credentials'])): ?>
                <div class="alert alert-danger">
                    <p><?= $errors['credentials']; ?></p>
                </div>
            <?php endif; ?>

            <div class="login-wrap">
                <input type="text" class="form-control" name="username" required value="<?= $old['username'] ?? '' ?>" placeholder="User ID" autofocus>
                <br>
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                <label class="checkbox">Remember Me
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="checkbox" name="remember" value="1" <?= isset($old['remember']) ? 'checked' : '';?>>
                    <span class="pull-right">
            <a data-toggle="modal" href="#myModal"> Forgot Password?</a>
            </span>
                </label>
                <hr>
                <button class="btn btn-theme btn-block" href="index.html" type="submit" style="background-color:#409550"><i class="fa fa-lock" ></i> SIGN IN</button>
                <!--                <div class="registration">-->
<!--                    Don't have an account yet?<br/>-->
<!--                    <a class="" href="--><?//= ROUTE.'/register'; ?><!--">-->
<!--                        Create an account-->
<!--                    </a>-->
<!--                </div>-->
            </div>
            <!-- Modal -->
            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Forgot Password ?</h4>
                        </div>
                        <div class="modal-body">
                            <h1>Fonctionnalite non disponible !</h1>
<!--                            <p>Enter your e-mail address below to reset your password.</p>-->
<!--                            <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">-->
                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
<!--                            <button class="btn btn-theme" type="button">Submit</button>-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal -->
        </form>
    </div>
</div>
<!-- js placed at the end of the document so the pages load faster -->
<script src="<?= ROUTE.'/lib/jquery/jquery.min.js'; ?>"></script>
<script src="<?= ROUTE.'/lib/bootstrap/js/bootstrap.min.js'; ?>"></script>
<!--BACKSTRETCH-->
<!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
<script type="text/javascript" src="<?= ROUTE.'/lib/jquery.backstretch.min.js'; ?>"></script>
<script>
    //$.backstretch("<?//= ROUTE.'/img/Capture.PNG'; ?>//", {
    //    speed: 500
    //});
</script>
</body>

</html>
