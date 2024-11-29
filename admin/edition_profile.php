<?php
    require_once 'include/session.php';

    if (isset($_SESSION['id'])) {

    $requser=$pdo->prepare("SELECT * FROM admin WHERE id=?");
    $requser->execute(array($_SESSION['id']));
    $user=$requser->fetch();
    if (isset($_POST['pseudo']) AND !empty($_POST['pseudo']) AND $_POST['pseudo'] !=$user['pseudo']) {
        $pseudo=htmlspecialchars($_POST['pseudo']);
        $insertpseudo=$pdo->prepare('UPDATE admin SET pseudo=? WHERE id=?');
        $insertpseudo->execute(array($pseudo,$_SESSION['id']));
        header("Location: tableau_bord.php");
    }
    if (isset($_POST['password']) AND !empty($_POST['password']) AND $_POST['password'] !=$user['password']) {
        $password=md5($_POST['password']);
        $insertpassword=$pdo->prepare('UPDATE admin SET password=? WHERE id=?');
        $insertpassword->execute(array($password,$_SESSION['id']));
        header("Location: tableau_bord.php");
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
        <div class="header-advance-area" style="padding-top: 40px;">
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
                                            <form action="" method="post" role="search" class="sr-input-func">
                                                <div class="form-group">
                                                     <label class="control-label">
                                                        Pseudo
                                                     </label>
                                                    <input type="text" name="pseudo" class="form-control" value="<?= $user['pseudo']; ?>">
                                                </div>
                                                 <div class="form-group">
                                                     <label class="control-label">
                                                        Password
                                                    </label>
                                                    <input type="password" name="password" class="form-control" value="<?= $user['password']; ?>">
                                                </div>
                                              <div class="control-label">
                                                <button type="submit" class="btn btn-primary" name="formconnect" align="center">Edition</button>
                                            </div>
                                            <?php
                                                if (isset($erreur)) {
                                                    echo '<font color="red">'.$erreur."</font>";    
                                                }
                                            ?>
                                            </form>
                                        </div>
                                    </div>
                                            
                                    </div>

                                </div>
                                 <div class="breadcome-heading">
                                            <a href="liste_admin.php" class="btn btn-danger">Gérer les administrateurs</a>
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