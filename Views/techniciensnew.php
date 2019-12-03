<?php
$template = 'layouts/index.php';
?>

<!--<section id="main-content">-->
<!--    <section class="wrapper">-->
<!--        <div class="row-mt"></br></br></br>-->
        
<div class="col-md-8">

    <form method="POST"  action="" style="border:1px solid #4ECDC4;padding:15px;width:150%;">
        <div class="row">
            <div>
                <h4 style="text-align:center;" class="text-primary">New Technicien </h4>
            </div>

            <div class="col-md-4">
            <div class="form-group">
            <label style="color:#337ab7">Quartier:</label>
            <select class="form-control">
            <option></option>
            <option></option>
            <option></option>
            </select>
            </div>
            </div>

            <div class="col-md-4">
            <div class="form-group">
            <label style="color:#337ab7">User Tech:</label>
            <input type="text" class="form-control"  name="USER_TECH" placeholder="User Tech" required="required">
            </div>
            </div>

            <div class="col-md-4">
            <div class="form-group">
            <label style="color:#337ab7">Password Tech:</label>
            <input type="text" class="form-control"  name="PASSWORD_TECH" placeholder="Password" required="required">
            </div>
            </div>

            <div class="col-md-4">
            <div class="form-group">
            <label style="color:#337ab7">Matricule Tech:</label>
            <input type="text" class="form-control"  name="MAT_TECH" placeholder="Matricule" required="required">
            </div>
            </div>


            <div class="col-md-4">
            <div class="form-group">
            <label style="color:#337ab7">Nom Tech:</label>
            <input type="text" class="form-control"  name="NOM_TECH" placeholder="First Name" required="required">
            </div>
            </div>

            <div class="col-md-4">
            <div class="form-group">
            <label style="color:#337ab7">Prenom Tech:</label>
            <input type="text" class="form-control"  name="PRENOM_TECH" placeholder="LastName" required="required">
            </div>
            </div>

            <div class="col-md-4">
            <div class="form-group">
            <label style="color:#337ab7">Date de Naissance:</label>
            <input type="date" class="form-control"  name="DATE_NAISSANCE_TECH" placeholder="BirthDay" required="required">
            </div>
            </div>

            <div class="col-md-4">
            <div class="form-group">
            <label style="color:#337ab7">Sexe :</label>
            <select class="form-control" name="SEXE_TECH" placeholder="Sexe" required>
            <option>Masculin</option>
            <option>Feminin</option>
            </select>
            </div>
            </div>

            <div class="col-md-4">
            <div class="form-group">
            <label style="color:#337ab7">Téléphone :</label>
            <input type="text" class="form-control"  name="TEL_TECH" placeholder=" Phone Number of your Agency" required="required">
            </div>
            </div>

            <div class="col-md-4">
            <div class="form-group">
            <label style="color:#337ab7">Email :</label>
            <input type="text" class="form-control"  name="EMAIL_TECH" placeholder="Email" required="required">
            </div>
            </div>

            <div class="col-md-4">
            <div class="form-group">
            <label style="color:#337ab7">Image :</label>
            <input type="text" class="form-control"  name="IMAGE_TECH" placeholder="Image" required="required">
            </div>
            </div>

            <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="fa fa-check"></i> Save Technician </button>

            <div class="clearfix"></div>
        </div>
    </form>

</div>

<!--        </div>-->
<!--    </section>-->
<!--</section>-->
