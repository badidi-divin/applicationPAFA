<?php
    require_once 'include/session.php';
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
   <?php
        require_once 'include/head.php';
   ?>
</head>

<body  style="background-image: url(img/bg_5.jpg);min-height: 100vh;
    
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
             <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <!-- <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Search..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form> -->
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <!-- <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Widgets</span>
                                            </li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
         <div class="widgets-programs-area">
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel widget-int-shape responsive-mg-b-30">
                            <div class="panel-body">
                                <div class="stats-title pull-left">
                                    <h4>Système</h4>
                                </div>
                                <div class="stats-icon pull-right">
                                    <a href="syteme.php" title="Cliquez pour gérer "><h5><?php
                                    $nbmemb=$pdo->prepare('SELECT * FROM Systeme');
                                    $nbmemb->execute();
                                    $nbmemb=$nbmemb->fetchAll();
                                    echo count($nbmemb);
                                ?>
                                </div>
                                <div class="m-t-xl widget-cl-2">
                                     <a href="syteme.php" title="Cliquez pour gérer ">
                                    <h1 class="text-info">Modification et Suppression</a></h1>
                                    <small>
                                                Cette page nous permet de gérer le Fichier Système<strong></strong>.
                                            </small>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel widget-int-shape responsive-mg-b-30">
                            <div class="panel-body">
                                <div class="stats-title pull-left">
                                    <h4>Section</h4>
                                </div>
                                <div class="stats-icon pull-right">
                                    <a href="section.php" title="Cliquez pour gérer "><h5><?php
                                    $nbmemb2=$pdo->prepare('SELECT * FROM section');
                                    $nbmemb2->execute();
                                    $nbmemb2=$nbmemb2->fetchAll();
                                    echo count($nbmemb2);
                                ?>
                                </div>
                                <div class="m-t-xl widget-cl-2">
                                     <a href="section.php" title="Cliquez pour gérer ">
                                    <h1 class="text-info">Modification et Suppression</a></h1>
                                    <small>
                                                Cette page nous permet de gérer le Fichier Section<strong></strong>.
                                            </small>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel widget-int-shape responsive-mg-b-30">
                            <div class="panel-body">
                                <div class="stats-title pull-left">
                                    <h4>Mention</h4>
                                </div>
                                <div class="stats-icon pull-right">
                                    <a href="mention.php" title="Cliquez pour gérer "><h5><?php
                                    $nbmemb3=$pdo->prepare('SELECT * FROM mention');
                                    $nbmemb3->execute();
                                    $nbmemb3=$nbmemb3->fetchAll();
                                    echo count($nbmemb3);
                                ?>
                                </div>
                                <div class="m-t-xl widget-cl-2">
                                     <a href="mention.php" title="Cliquez pour gérer ">
                                    <h1 class="text-info">Modification et Suppression</a></h1>
                                    <small>
                                                Cette page nous permet de gérer le Fichier Mention<strong></strong>.
                                            </small>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel widget-int-shape responsive-mg-b-30">
                            <div class="panel-body">
                                <div class="stats-title pull-left">
                                    <h4>Option</h4>
                                </div>
                                <div class="stats-icon pull-right">
                                    <a href="option.php" title="Cliquez pour gérer "><h5><?php
                                    $nbmemb4=$pdo->prepare('SELECT * FROM option');
                                    $nbmemb4->execute();
                                    $nbmemb4=$nbmemb4->fetchAll();
                                    echo count($nbmemb4);
                                ?>
                                </div>
                                <div class="m-t-xl widget-cl-2">
                                     <a href="option.php" title="Cliquez pour gérer ">
                                    <h1 class="text-info">Modification et Suppression</a></h1>
                                    <small>
                                                Cette page nous permet de gérer le Fichier Option<strong></strong>.
                                            </small>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel widget-int-shape responsive-mg-b-30">
                            <div class="panel-body">
                                <div class="stats-title pull-left">
                                    <h4>Préinsciption des diplômés</h4>
                                </div>
                                <div class="stats-icon pull-right">
                                    <i class="educate-icon educate-professor"><a href="finaliste_lmd.php" title="Cliquez pour gérer la Préinscription"><h5>LMD: <?php
                                    $nbmembre=$pdo->prepare('SELECT * FROM diplomes_classique');
                                    $nbmembre->execute();
                                    $nbmembre=$nbmembre->fetchAll();
                                    echo count($nbmembre);
                                ?></h5></a></i>
                                    <a href="finaliste_classique.php" title="Cliquez pour gérer la Préinscription"><i class="educate-icon educate-professor"><h5>Classique: <?php
                                    $nbmembre3=$pdo->prepare('SELECT * FROM diplomes');
                                    $nbmembre3->execute();
                                    $nbmembre3=$nbmembre3->fetchAll();
                                    echo count($nbmembre3);
                                ?></h5></a></i>
                                </div>
                                <div class="m-t-xl widget-cl-2">

                                    <h1 class="text-info">Modification et Suppression</a></h1>
                                    <small>
                                    Cette page nous permet de gérer la Préinscription des Diplômés<strong></strong>.
                                            </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel widget-int-shape responsive-mg-b-30">
                            <div class="panel-body">
                                <div class="stats-title pull-left">
                                    <h4>Inscription Speciale</h4>
                                </div>
                                <div class="stats-icon pull-right">
                                    <i class="educate-icon educate-professor"><a href="finaliste_lmd.php" title="Cliquez pour gérer la Préinscription"><h5>LMD: <?php
                                    $nbmembre4=$pdo->prepare('SELECT * FROM inscription_special');
                                    $nbmembre4->execute();
                                    $nbmembre4=$nbmembre4->fetchAll();
                                    echo count($nbmembre4);
                                ?></h5></a></i>
                                    <a href="finaliste_classique.php" title="Cliquez pour gérer la Préinscription"><i class="educate-icon educate-professor"><h5>Classique: <?php
                                    $nbmembre5=$pdo->prepare('SELECT * FROM inscription_special_classique');
                                    $nbmembre5->execute();
                                    $nbmembre5=$nbmembre5->fetchAll();
                                    echo count($nbmembre5);
                                ?></h5></a></i>
                                </div>
                                <div class="m-t-xl widget-cl-2">

                                    <h1 class="text-info">Modification et Suppression</a></h1>
                                    <small>
                                    Cette page nous permet de gérer les Inscriptions Speciales<strong></strong>.
                                            </small>
                                </div>
                            </div>
                        </div>
                    </div>
                         <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel widget-int-shape responsive-mg-b-30">
                            <div class="panel-body">
                                <div class="stats-title pull-left">
                                    <h4>Classe Inférieure</h4>
                                </div>
                                <div class="stats-icon pull-right">
                                    <i class="educate-icon educate-professor"><a href="finaliste_lmd.php" title="Cliquez pour gérer la Préinscription"><h5>LMD: <?php
                                    $nbmembre6=$pdo->prepare('SELECT * FROM classe_inferieur');
                                    $nbmembre6->execute();
                                    $nbmembre6=$nbmembre6->fetchAll();
                                    echo count($nbmembre6);
                                ?></h5></a></i>
                                    <a href="finaliste_classique.php" title="Cliquez pour gérer la Préinscription"><i class="educate-icon educate-professor"><h5>Classique: <?php
                                    $nbmembre7=$pdo->prepare('SELECT * FROM classe_inferieur_classique');
                                    $nbmembre7->execute();
                                    $nbmembre7=$nbmembre7->fetchAll();
                                    echo count($nbmembre7);
                                ?></h5></a></i>
                                </div>
                                <div class="m-t-xl widget-cl-2">

                                    <h1 class="text-info">Modification et Suppression</a></h1>
                                    <small>
                                    Cette page nous permet de gérer la Préinscription pour les classes inférieures<strong></strong>.
                                            </small>
                                </div>
                            </div>
                        </div>
                    </div> -->
                   <!--  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel widget-int-shape responsive-mg-b-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                            <div class="panel-body">
                                <div class="stats-title pull-left">
                                    <h4>Commentaires Membres</h4>
                                </div>
                                <div class="stats-icon pull-right">
                                    <i class="educate-icon educate-message"></i>
                                </div>
                                <div class="m-t-xl widget-cl-3">
                                    <h1 class="text-warning">Edition</h1>
                                    <small>
                                                Editer  les commentaires des membres dans cette page <strong><a href="CommentMembres.php">clique ici</a></strong>
                                            </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel widget-int-shape res-tablet-mg-t-30 dk-res-t-pro-30">
                            <div class="panel-body">
                                <div class="stats-title pull-left">
                                    <h4>Messages</h4>
                                </div>
                                <div class="stats-icon pull-right">
                                    <i class="educate-icon educate-department"></i>
                                </div>
                                <div class="m-t-xl widget-cl-4">
                                    <h1 class="text-danger">680</h1>
                                    <small>
                                                Lorem Ipsum is simply dummy text of the printing and Lorem <strong>typesetting industry</strong> spa.
                                            </small>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        
    </div>
   <?php
        require_once 'include/foot_js.php';
   ?>
</body>
</html>