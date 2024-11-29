<?php
    require_once 'include/session.php';

    if (isset($_POST['saves'])) {
        $nom_complet=htmlspecialchars($_POST['nom_complet']);
        $sexe=htmlspecialchars($_POST['sexe']);
        $section=htmlspecialchars($_POST['section']);
        $Mention=htmlspecialchars($_POST['Mention']);
        $promotion=htmlspecialchars($_POST['promotion']);
        $Local=htmlspecialchars($_POST['Local']);
        $annee=htmlspecialchars($_POST['annee']);
        
        
        if (!empty($nom_complet)){
            //Création de l'objet prepare et envoie de la requête
            $ps=$pdo->prepare("INSERT INTO etudiant(nom_complet,sexe,section,Mention,promotion,Local,annee)VALUES(?,?,?,?,?,?,?)");
            //Pour bien recupere les données on crée un table de parametre
            $params=array($nom_complet,$sexe,$section,$Mention,$promotion,$Local,$annee);
            //Execution de la requête par leur paramètre en ordre 
            $ps->execute($params);
            // Pour recuperer l'id du user
            ?>
            <script type="text/javascript">
                alert('Enregistrement Effectuer avec Succès!')
            </script>
            <script>
                window.open('gestion_etudiant.php','_self')
            </script>
            <?php
            exit(); 

            }else{
                ?>
            <script type="text/javascript">
                alert('Tous les champs doivent être completés!')
            </script>
            <script>
                window.open('gestion_etudiant.php','_self')
            </script>
            <?php
            exit();  
            }
    }   
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
   <?php
        require_once 'include/head.php';
   ?>
</head>

<body style="background-image: url(../images/22.png);min-height: 100vh;
    
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
        <div class="header-advance-area" >
            <?php
                require_once 'include/connexion.php';
            ?>
             <div class="breadcome-area" style="padding-top: 30px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div form action="#" class="appointment-form">
                            <h3 class="mb-3" align="center">FORMULAIRE D'ENREGISTREMENT</h3>
                        <form action="" method="post" class="appointment-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                <div class="icon"><span class="ion-md-calendar"></span></div>
                                <label>Nom Complet:</label>
                                <input type="text" class="form-control appointment_date-check-in" placeholder="Nom Complet de l'Etudiant" name="nom_complet" required="required">
                            </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                        <div class="icon"><span class="ion-md-calendar"></span></div>
                                        <label>Sexe</label>
                                        <select name="sexe" class="form-control" autocomplete="off">
                                        <option value="M">
                                            M
                                        </option>
                                        <option value="F">
                                            F
                                        </option>
                                    </select>
                                    </div>
                                </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                        <div class="icon"><span class="ion-md-calendar"></span></div>
                                        <label>section:</label>
                                         <select name="section" class="form-control">
                                            <option value="Informatique">Informatique</option>
                                            <option value="Mécanique">Mécanique</option>
                                            <option value="Electricité">Electricité</option>
                                    </select>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                        <div class="icon"><span class="ion-md-calendar"></span></div>
                                        <label>Mention:</label>
                                         <select name="Mention" class="form-control">
                                            <option value="Informatique Industriel">Informatique Industriel</option>
                                            <option value="Mécanique de Production">Mécanique de Production</option>
                                            <option value="Mécanique Agricole">Mécanique Agricole</option>
                                            <option value="Electro-Technique">Electro-Technique</option>
                                            <option value="Construction Navale">Construction Navale</option>
                                            <option value="Electronique de Puissance">Electronique de Puissance</option>
                                    </select>
                                    </div>
                                </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                        <div class="icon"><span class="ion-md-calendar"></span></div>
                                        <label>promotion:</label>
                                         <select name="promotion" class="form-control">
                                            <option value="LPTA1">LPTA1</option>
                                            <option value="LPTA2">LPTA2</option>
                                            <option value="LPTA3">LPTA3</option>
                                            <option value="LPTA4">LPTA4</option>
                                    </select>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                        <div class="icon"><span class="ion-md-calendar"></span></div>
                                        <label>Local:</label>
                                        <input type="text" class="form-control appointment_date-check-in" placeholder="Local" name="Local" required="required">
                                    </div>
                                </div>
                                </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                        <div class="icon"><span class="ion-md-calendar"></span></div>
                                        <label>annee Académique:</label>
                                        <input type="text" class="form-control appointment_date-check-in" placeholder="annee" name="annee" required="required">
                                    </div>
                                </div>
                                </div>                             
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                        <div class="icon"><span class="ion-md-calendar"></span></div>
                                         <button type="submit" name="saves" class="btn btn-success col-lg-12">Enregistrer</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                         </form>

   <?php
        require_once 'include/foot_js.php';
   ?>
</body>
</html>