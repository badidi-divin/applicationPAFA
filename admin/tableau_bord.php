<?php
    require_once 'include/session.php';
?>
<!doctype html>
<html class="no-js" lang="fr">

<head>
   <?php
        require_once 'include/head.php';
   ?>
</head>

<body  style="background-image: url(../images/22.png);min-height: 100vh;
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
                        <a href="#"></a>

                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area" >
            <?php
                require_once 'include/connexion.php';
            ?>
        </div>
        
    </div>
   <?php
        require_once 'include/foot_js.php';
   ?>
</body>
</html>