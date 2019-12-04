<?php
$template = 'layouts/app.php';
?>

<section>
    <h2>Contactez Nous</h2>
    <form action="post">
        <div class="col col-lg-5 form-group">
            <label for="pseudo">Pseudo</label>
            <input type="text" placeholder="pseudo" id="pseudo" class="form-control">
        </div>
        <div class="col col-lg-5 form-group">
            <label for="email">Email</label>
            <input type="email" placeholder="email" id="email" class="form-control">
        </div>
        <div class="col col-lg-6 form-group">
            <textarea name="message" id="" cols="30" rows="10" placeholder="Laissez un message" class="form-control"></textarea>
        </div>
        <button class="btn btn-success col-lg-2">Validate</button>
    </form>
</section>