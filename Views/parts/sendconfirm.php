<?php
// cette page devrait etre execute en ajax


if(isset($_POST['resendconfirm'])):
    if(filter_var($_POST['id'], FILTER_VALIDATE_INT))
        header('Location:login.php');
    $errors['confirm_send'] =  true;
    unset($_POST['resendconfirm']);
elseif(isset($errors['confirm_id'])):
?>
<form action="" method="POST" id="form_resend">
    <input type="hidden" name="id" value="<?= $errors['confirm']; ?>";/>
    <?php if(isset($errors['confirm'])): ?>
        <p>Votre compte n'est pas encore ete active, veuillez verifier votre boite de reception d'email</p>
    <?php elseif(isset($errors['confirm_send'])): ?>
        <p>Le lien de confirmation a ete envoye avec succes.</p>
    <?php endif; ?>
    <p>Vous n'avez pas recu de mail ? <button type="submit" class="btn btn-primary" name="resendconfirm">Renvoyez le mail</button></p>
</form>
<script>
    var form_resend = document.getElementById('form_resend');
    form_resend.addEventListener("submit", function(e){
        e.preventDefault();
        console.log('Ok it is send');
        console.log(form_resend.elements[0].value);
    });
</script>
<?php endif; ?>

