<?php
$template = 'layouts/index.php';
?>

<!--<section id="main-content">-->
<!--    <section class="wrapper">-->
<!--        <div class="row-mt"></br></br></br>-->
        
<div class="col-md-12">
    <div class="content-panel">
        <h4><i class="fa fa-angle-right"></i>Technicians Lists </h4>
        <div class="mr-2" style="padding-left: 20px;">
            <a href="<?= ROUTE.'/techniciens/new'; ?>"> <button class="btn btn-primary btn-lg"><i class="fa fa-pencil"></i>Ajouter un technicien</button></a>
        </div>
        <div class="mr-2" style="margin-top: -70px; float: right; padding-right: 20px; display: inline-block;">
            <form action="" method="post">
                <div class="form-group form-inline" style="float: right; margin-top: 20px; display: inline">
                    <input type="text" class="form-control" style="width:200px;">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
        <table class="table table-striped table-advance table-hover">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Matricule</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Date de Naissance</th>
                    <th>Email</th>
                    <th>Sexe</th>
                    <th>Telephone</th>
                    <th>Quartier</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach($users as $user): ?>
                    <td><?= ucfirst($user->USER_TECH); ?></td>
                    <td><?= ucfirst($user->MAT_TECH); ?></td>
                    <td><?= ucfirst($user->NOM_TECH); ?></td>
                    <td><?= ucfirst($user->PRENOM_TECH); ?></td>
                    <td><?= ucfirst($user->DATE_NAISSANCE_TECH); ?></td>
                    <td><?= ucfirst($user->EMAIL_TECH); ?></td>
                    <td><?= ucfirst($user->SEXE_TECH); ?></td>
                    <td><?= ucfirst($user->TEL_TECH); ?></td>
                    <td><?= ucfirst($user->QUARTIER_TECH); ?></td>
                    <td><?= ucfirst($user->IMAGE_TECH); ?></td>
                    <td>
                        <a href="<?= ROUTE.'/techniciens/'.$user->ID_TECH; ?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                        <a href="<?= ROUTE.'/techniciens/delete/'.$user->ID_TECH; ?>"> <button class="btn btn-danger btn-xs"><i class="fa fa-print "></i></button></a>
                    </td>

                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!--        </div>-->
<!--    </section>-->
<!--</section>-->
