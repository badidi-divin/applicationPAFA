<?php
    require_once 'include/session.php';

    $id=$_GET['id'];
    $requser=$pdo->prepare("SELECT * FROM mariage WHERE id=?");
    $requser->execute(array($id));
    $userinfo=$requser->fetch();
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
   <?php
        require_once 'include/head.php';
   ?>
</head>

<body style="background-image: url(img/bg_5.jpg);min-height: 100vh;
    
    justify-content: center;
    align-items: center;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    position: relative;
    z-index: 1;}">

   <?php
    require_once('include/sidebar.php');
   ?>
   
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="#"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <a href="liste_admin.php">Liste</a>
        <div class="header-advance-area" >
            <?php
                require_once 'include/connexion.php';
            ?>
             <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div form action="#" class="appointment-form">
                            <h3 class="mb-3" align="center">Détail sur le Couple <?= $userinfo['NomH']; ?></h3>
                        <form action="" method="post" class="appointment-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                <div class="icon"><span class="ion-md-calendar"></span></div>
                                <label>Nom du Marie</label>
                                <input type="text" class="form-control appointment_date-check-in" placeholder="Nom du Mari" name="NomH"  value="<?= $userinfo['NomH'] ?>" readonly="readonly">
                            </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                <div class="icon"><span class="ion-md-calendar"></span></div>
                                <label>Nom de la Marié</label>
                                <input type="text" class="form-control appointment_date-check-out" placeholder="Nom de la Marié" name="NomF" value="<?= $userinfo['NomF'] ?>" readonly="readonly">
                            </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                <div class="icon"><span class="ion-md-calendar"></span></div>
                                <label>Post-Nom du mari</label>
                                <input type="text" class="form-control appointment_date-check-in" placeholder="Post-Nom du Mari" name="PostNomH"  value="<?= $userinfo['PostNomH'] ?>" readonly="readonly">
                            </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                <div class="icon"><span class="ion-md-calendar"></span></div>
                                <label>Post-Nom de la Marié</label>
                                <input type="text" class="form-control appointment_date-check-out" placeholder="Post-Nom de la Marié" name="PostNomF" value="<?= $userinfo['PostNomF'] ?>" readonly="readonly">
                            </div>
                                </div>
                                </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                <div class="icon"><span class="ion-md-calendar"></span></div>
                                <label>Prénom du Mari</label>
                                <input type="text" class="form-control appointment_date-check-in" placeholder="Prénom du Mari" name="PreNomH" value="<?= $userinfo['PreNomH'] ?>" readonly="readonly">
                            </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                <div class="icon"><span class="ion-md-calendar"></span></div>
                                <label>PreNom de la Marié</label>
                                <input type="text" class="form-control appointment_date-check-out" placeholder="Pre-Nom de la Marié" name="PreNomF" value="<?= $userinfo['PreNomF'] ?>" readonly="readonly">
                            </div>
                                </div>
                                </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                <div class="icon"><span class="ion-md-calendar"></span></div>
                                <label>Nationalité du Mari</label>
                                <input type="text" class="form-control appointment_date-check-in" placeholder="Nationalité du Mari" name="NationaliteH" value="<?= $userinfo['NationaliteH'] ?>" readonly="readonly">
                            </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                <div class="icon"><span class="ion-md-calendar"></span></div>
                                <label>Nationalité de la Marié</label>
                                <input type="text" class="form-control appointment_date-check-out" placeholder="Nationalité de la Marié" name="NationaliteF" value="<?= $userinfo['NationaliteF'] ?>" readonly="readonly">
                            </div>
                                </div>
                                </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                <div class="icon"><span class="ion-md-calendar"></span></div>
                                <label>Lieu de Naissance du Mari</label>
                                <input type="text" class="form-control appointment_date-check-in" placeholder="Lieu de Naissance de L'homme" name="lieunaissanceH" value="<?= $userinfo['lieunaissanceH'] ?>" readonly="readonly"> 
                                </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                <div class="icon"><span class="ion-md-calendar"></span></div>
                                <label>Lieu de Naissance de la Marié</label>
                                <input type="text" class="form-control appointment_date-check-out" placeholder="Lieu de Naissance de la Femme" name="lieudenaissanceF" value="<?= $userinfo['lieudenaissanceF'] ?>" readonly="readonly">
                            </div>
                                </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                <div class="icon"><span class="ion-md-calendar"></span></div>
                                <label>Date de Naissance Homme</label>
                                <input type="date" class="form-control appointment_date-check-in" placeholder="Date de Naissance de l'homme" name="datenaissanceH" value="<?= $userinfo['datenaissanceH'] ?>" readonly="readonly"> 
                                </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                <div class="icon"><span class="ion-md-calendar"></span></div>
                                <label>Date de Naissance Femme</label>
                                <input type="date" class="form-control appointment_date-check-out" placeholder="Date de Naissance de la Femme" name="datenaissanceF" value="<?= $userinfo['datenaissanceF'] ?>" readonly="readonly">
                            </div>
                                </div>
                                </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                <div class="icon"><span class="ion-md-calendar"></span></div>
                                <label>Province d'Origine du Mari</label>
                                <input type="text" class="form-control appointment_date-check-in" placeholder="Province d'Origine de l'homme" name="provinceH" value="<?= $userinfo['provinceH'] ?>" readonly="readonly"> 
                                </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                <div class="icon"><span class="ion-md-calendar"></span></div>
                                <label>Province d'Origine de la Marié</label>
                                <input type="text" class="form-control appointment_date-check-out" placeholder="Province d'origine de la Femme" name="provinceF" value="<?= $userinfo['provinceF'] ?>" readonly="readonly">
                            </div>
                                </div>
                                </div>

                            <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                <div class="icon"><span class="ion-md-calendar"></span></div>
                                <label>Nom complet du Père du Mari</label>
                                <input type="text" class="form-control appointment_date-check-in" placeholder="Nom complet du père de l'homme" name="nompereH" value="<?= $userinfo['nompereH'] ?>" readonly="readonly"> 
                                </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                <div class="icon"><span class="ion-md-calendar"></span></div>
                                <label>Nom complet du Père de la Marié</label>
                                <input type="text" class="form-control appointment_date-check-out" placeholder="Nom complet du père de la Femme" name="nompereF" value="<?= $userinfo['nompereF'] ?>" readonly="readonly">
                            </div>
                                </div>
                                </div>
                             <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                <div class="icon"><span class="ion-md-calendar"></span></div>
                                <label>Nom complet de la Mère du Mari</label>
                                <input type="text" class="form-control appointment_date-check-in" placeholder="Nom complet de la Mère de l'homme" name="nommereH" value="<?= $userinfo['nommereH'] ?>" readonly="readonly"> 
                                </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                <div class="icon"><span class="ion-md-calendar"></span></div>
                                <label>Nom complet de la Mère de la Marié</label>
                                <input type="text" class="form-control appointment_date-check-out" placeholder="Nom complet de la Mère de la Femme" name="nommereF" value="<?= $userinfo['nommereF'] ?>" readonly="readonly">
                            </div>
                                </div>
                                </div>
                             <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                <div class="icon"><span class="ion-md-calendar"></span></div>
                                <label>Date de la Dot</label>
                                <input type="date" class="form-control appointment_date-check-in" placeholder="date de la Dot" name="datedot" value="<?= $userinfo['datedot'] ?>" readonly="readonly"> 
                                </div>
                                </div>
                                 <div class="form-group">
                                    <div class="input-wrap">
                                <div class="icon"><span class="ion-md-calendar"></span></div>
                                <label>Montant de la Dot</label>
                                <input type="text" class="form-control appointment_date-check-out" placeholder="Montant de la Dot" name="MontantDot" value="<?= $userinfo['MontantDot'] ?>" readonly="readonly">
                            </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-wrap">
                                <div class="icon"><span class="ion-md-calendar"></span></div>
                                <label>Régime du Mariage</label>
                                <input type="text" class="form-control appointment_date-check-in" placeholder="Regime du Mariage" name="Regime" value="<?= $userinfo['Regime'] ?>" readonly="readonly"> 
                                </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-wrap">
                                <div class="icon"><span class="ion-md-calendar"></span></div>
                                <label>Nom complet du Témoin du mariage</label>
                                <input type="text" class="form-control appointment_date-check-out" placeholder="Nom Complet du temoin" name="NomcompletTemoin" value="<?= $userinfo['NomcompletTemoin'] ?>" readonly="readonly">
                            </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-wrap">
                                <div class="icon"><span class="ion-md-calendar"></span></div>
                                <label>Adresse Complète du Témoin</label>
                                <input type="text" class="form-control appointment_date-check-out" placeholder="Adresse Complet du Temoin" name="AdresseTemoin" value="<?= $userinfo['AdresseTemoin'] ?>" readonly="readonly">
                            </div>
                                </div>
                                  <div class="form-group">
                                    <div class="input-wrap">
                                <div class="icon"><span class="ion-md-calendar"></span></div>
                                <label>Date de l'Opération</label>
                                <input type="date" class="form-control appointment_date-check-out"  name="dateenregistrement" value="<?= $userinfo['dateenregistrement'] ?>" readonly="readonly">
                            </div>
                                </div>
                                </div>
                            <div class="col-md-12">
                                    <div class="form-group">
                        </form>
                          <a href="imprimerdétail.php?id=<?= $_GET['id']; ?>" class="btn btn-success">Imprimer</a>
                        </div>
                                </div>
                            </div>


   <?php
        require_once 'include/foot_js.php';
   ?>
</body>
</html>