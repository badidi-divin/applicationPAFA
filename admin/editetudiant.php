<?php
    require_once 'include/session.php';


    $id=$_GET['id'];
    $requser=$pdo->prepare("SELECT * FROM etudiant WHERE id=?");
    $requser->execute(array($id));
    $userinfo=$requser->fetch();
    $sexe=$userinfo['sexe'];
    $section=$userinfo['section'];
    $Mention=$userinfo['Mention'];
    $promotion=$userinfo['promotion'];

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
            $ps=$pdo->prepare("UPDATE etudiant SET nom_complet=?,sexe=?,section=?,Mention=?,promotion=?,Local=?,annee=? WHERE id=?");
            //Pour bien recupere les données on crée un table de parametre
            $params=array($nom_complet,$sexe,$section,$Mention,$promotion,$Local,$annee,$id);
            //Execution de la requête par leur paramètre en ordre 
            $ps->execute($params);
            // Pour recuperer l'id du user
            ?>
            <script type="text/javascript">
                alert('Modification Effectuée avec Succès!')
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
                            <h3 class="mb-3" align="center">FORMULAIRE D'EDITION</h3>
                        <form action="" method="post" class="appointment-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                <div class="icon"><span class="ion-md-calendar"></span></div>
                                <label>Nom Complet:</label>
                                <input type="text" class="form-control appointment_date-check-in" placeholder="Nom Complet de l'Etudiant" name="nom_complet" required="required" value="<?= $userinfo['nom_complet'] ?>">
                            </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                        <div class="icon"><span class="ion-md-calendar"></span></div>
                                        <label>Sexe</label>
                                        <select name="sexe" class="form-control" autocomplete="off">
                                        <option value="M"  <?php if($sexe==="M") echo "selected" ?>>
                                            M
                                        </option>
                                        <option value="F" <?php if($sexe==="F") echo "selected" ?>>
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
                                            <option value="Informatique" <?php if($section==="Informatique") echo "selected" ?>>Informatique</option>
                                            <option value="Mécanique" <?php if($section==="Mécanique") echo "selected" ?>>Mécanique</option>
                                            <option value="Electricité" <?php if($section==="Electricité") echo "selected" ?>>Electricité</option>
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
                                            <option value="Informatique Industriel" <?php if($Mention==="Informatique Industriel") echo "selected" ?>>Informatique Industriel</option>
                                            <option value="Mécanique de Production" <?php if($Mention==="Mécanique de Production") echo "selected" ?>>Mécanique de Production</option>
                                            <option value="Mécanique Agricole" <?php if($Mention==="Mécanique Agricole") echo "selected" ?>>Mécanique Agricole</option>
                                            <option value="Electro-Technique" <?php if($Mention==="Electro-Technique") echo "selected" ?>>Electro-Technique</option>
                                            <option value="Construction Navale" <?php if($Mention==="Construction Navale") echo "selected" ?>>Construction Navale</option>
                                            <option value="Electronique de Puissance"<?php if($Mention==="Electronique de Puissance") echo "selected" ?>>Electronique de Puissance</option>
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
                                            <option value="LPTA1" <?php if($promotion==="LPTA1") echo "selected" ?>>LPTA1</option>
                                            <option value="LPTA2" <?php if($promotion==="LPTA2") echo "selected" ?>>LPTA2</option>
                                            <option value="LPTA3" <?php if($promotion==="LPTA3") echo "selected" ?>>LPTA3</option>
                                            <option value="LPTA4" <?php if($promotion==="LPTA4") echo "selected" ?>>LPTA4</option>
                                    </select>
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                        <div class="icon"><span class="ion-md-calendar"></span></div>
                                        <label>Local:</label>
                                        <input type="text" class="form-control appointment_date-check-in" placeholder="Local" name="Local" required="required" value="<?= $userinfo['Local']; ?>">
                                    </div>
                                </div>
                                </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                        <div class="icon"><span class="ion-md-calendar"></span></div>
                                        <label>annee Académique:</label>
                                        <input type="text" class="form-control appointment_date-check-in" placeholder="annee" name="annee" required="required" value="<?= $userinfo['annee']; ?>">
                                    </div>
                                </div>
                                </div>                             
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="input-wrap">
                                        <div class="icon"><span class="ion-md-calendar"></span></div>
                                         <button type="submit" name="saves" class="btn btn-success col-lg-12">Mettre à Jour</button>
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