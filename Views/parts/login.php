<?php
$title = 'login';
$template = 'layouts/app.php';
?>
<h1>Se connecter</h1>
<?php if(isset($errors['confirm_id']) || isset($errors['confirm'])): ?>
    <div class="alert alert-info">
        <?php include "../Views/parts/sendconfirm.php"; ?>
    </div>
<?php elseif(isset($errors['credentials'])): ?>
    <div class="alert alert-danger">
        <p><?= $errors['credentials']; ?></p>
    </div>
<?php endif; ?>

<form action="" method="post">
    <div class="form-group">
        <label for="">Nom d'utilisateur ou adresse Email</label>
        <input type="text" name="username" class="form-control" required value="<?= $old['username'] ?? '' ?>">
    </div>
    <div class="form-group">
        <!--        <label for="">Mot de passe <a href="forget.php">(J'ai oublie mon mot de passe)</a></label>-->
        <label for="">Mot de passe</label>
        <input type="password" name="password" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="">
            <input type="checkbox" name="remember" value="1" <?= isset($old['remember']) ? 'checked' : '';?>>Se souvenir de moi
        </label>
    </div>
    <button type="submit" class="btn btn-primary">Se connecter</button>
</form>
