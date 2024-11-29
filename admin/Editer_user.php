<?php

    require_once 'include/session.php';


    $id=$_GET['id'];
    $requser=$pdo->prepare("SELECT * FROM admin WHERE id_admin=?");
    $requser->execute(array($id));
    $userinfo=$requser->fetch();
  

    if (isset($_POST['saves'])) {
        $Pseudo_admin=htmlspecialchars($_POST['Pseudo_admin']);
          $Mdp_admin=$_POST['Mdp_admin'];
        $errors=array(); 
         // ****************logo***************************
        if (empty($errors)) {

            if ($Mdp_admin=="") {

            //Création de l'objet prepare et envoie de la requête
            $ps=$pdo->prepare("UPDATE admin SET Pseudo_admin=? WHERE id_admin=?");
            //Pour bien recupere les données on crée un table de parametre
            $params=array($Pseudo_admin,$id);
            //Execution de la requête par leur paramètre en ordre 
            $ps->execute($params);
            // Pour recuperer l'id du user
            ?>
            <script type="text/javascript">
                alert('Modification Effectuée avec Succès!')
            </script>
            <script>
                window.open('liste_admin.php','_self')
            </script>
            <?php

            exit(); 
    
            }else{

            $Mdp_admin=md5($_POST['Mdp_admin']);
            //Création de l'objet prepare et envoie de la requête
            $ps=$pdo->prepare("UPDATE admin SET Pseudo_admin=?,Mdp_admin=? WHERE id_admin=?");
            //Pour bien recupere les données on crée un table de parametre
            $params=array($Pseudo_admin,$Mdp_admin,$id);
            //Execution de la requête par leur paramètre en ordre 
            $ps->execute($params);
            // Pour recuperer l'id du user
            ?>
            <script type="text/javascript">
                alert('Modification Effectuée avec Succès!')
            </script>
            <script>
                window.open('liste_admin.php','_self')
            </script>
            <?php

            exit(); 

            }
            
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
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                        <h1>Edition</h1>
                                        <form action="" method="post" role="search" class="sr-input-func" class="signup-form" enctype="multipart/form-data">
                                                    <?php
                                            if (!empty($errors)):
                                        ?>
                                        <div class="alert alert-danger">
                                            <p></p>
                                                <ul>
                                                    <?php foreach($errors as $error):?>
                                                        <li><?= $error; ?></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>

                                            <?php endif; ?>
                                       <div class="form-group">
                                          <label class="label" for="name">Nom d'utilisateur</label>
                                          <input type="text" name="Pseudo_admin" class="form-control" placeholder="Pseudo" value="<?= $userinfo['Pseudo_admin'] ?>">
                                       </div>
                                        <div class="form-group">
                                          <label class="label" for="name">Mot de Passe:</label>
                                          <input type="password" name="Mdp_admin" class="form-control" placeholder="Mot de Passe" />
                                       </div>
                                        <div class="form-group d-flex justify-content-end mt-4">
                                         <button type="submit" name="saves" class="btn btn-outline-primary">Envoyer<span class="fa fa-paper-plane"></span></button>
                                        </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
   <?php
        require_once 'include/foot_js.php';
   ?>
</body>
</html>