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
        <div class="header-advance-area">
            <?php
                require_once 'include/connexion.php';

            $mot1=isset($_GET['mot1'])?$_GET['mot1']:"";
            $mot2=isset($_GET['mot2'])?$_GET['mot2']:"all";
            
            $size=isset($_GET['size'])? $_GET['size']:100;
            $page=isset($_GET['page'])? $_GET['page']:1; 
            $offset=($page-1)*$size;

            if ($mot2=="all") {
                $requete="SELECT * FROM etudiant WHERE nom_complet LIKE '%$mot1%' LIMIT $size offset $offset";  
                $requeteCount="SELECT COUNT(*) countF FROM etudiant WHERE nom_complet LIKE '%$mot1%'";
                
            }else{
                $requete="SELECT * FROM etudiant WHERE nom_complet LIKE '%$mot1%' AND promotion='$mot2' LIMIT $size offset $offset";  
                $requeteCount="SELECT COUNT(*) countF FROM etudiant WHERE nom_complet LIKE '%$mot1%' AND  promotion='$mot2'";
            }
            
            $resultat=$pdo->query($requete);
            $resultatCount=$pdo->query($requeteCount);
            $tabCount=$resultatCount->fetch();
            $nbreFiliere=$tabCount['countF'];
            $reste=$nbreFiliere % $size;

            if($reste===0)
                $nbrePage=$nbreFiliere/$size;
            else
                $nbrePage=floor($nbreFiliere/$size)+1;  
?>
        <div class="col-md-12 col-xd-12" style="padding-top: 80px;padding-bottom: 30px;">
            <form method="get" action="" class="form-inline">
                        <div class="form-group">
                            <label for="nom_complet" style="color: white;">Nom Etudiant:</label>
                            <input type="text" name="mot1" class="form-control" placeholder="nom_complet à chercher..." value="<?php echo $mot1 ?>">
                        </div>
                        <label for="type_payement_lmd" style="color: white;">promotion:</label>
                        <select name="mot2" class="form-control" onchange="this.form.submit()" id="etudiant">
                            <option value="all"  <?php if($mot2==="all") echo "selected" ?>>Tous</option>
                            <option value="LPTA1" <?php if($mot2==="LPTA1") echo "selected" ?>>LPTA1</option>
                            <option value="LPTA2" <?php if($mot2==="LPTA2") echo "selected" ?>>LPTA2</option>
                            <option value="LPTA3" <?php if($mot2==="LPTA3") echo "selected" ?>>LPTA3</option>
                            <option value="LPTA4" <?php if($mot2==="LPTA4") echo "selected" ?>>LPTA4</option>
                        </select>
                        <button type="submit" class="btn btn-success">
                        Rechercher</button>
                        &nbsp;&nbsp;
                        <a href="add_etudiant.php" class="btn btn-success">Ajouter</a>
                          &nbsp;&nbsp;
                        <a href="imprimer.php" class="btn btn-success">Imprimer</a>
                    </form>
        </div>
         <div class="data-table-area mg-b-15" style="margin-left: 19px !important; font-size: 10px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                         <div class="main-sparkline13-hd" style="border-radius: 5px; padding: 9px 4px 1px 9px;background-color:#141F29;">
                         <h1 style="color:white;font-size: 16px !important;letter-spacing: 0.2em"><i class="fa fa-product-hunt"></i> LISTE DES ETUDIANTS <span class="table-project-n">ENROLES</span>
                                </div>
                        <div class="sparkline13-list">
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" class="table table-striped">
                                        <thead>
                               <tr>
                                <th>ID</th><th>NOM_COMPLET</th><th>SEXE</th><th>SECTION</th><th>MENTION</th><th>PROMOTION</th><th>LOCAL</th><th>ANNEE_ACADEMIQUE</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php while ($et=$resultat->fetch()){?>
                                <tr>
                                <td style="font-size: 9px;"><?php  echo($et['id'])?></td>
                               <td style="font-size: 9px;"><?php  echo($et['nom_complet'])?></td>
                                <td style="font-size: 9px;"><?php  echo($et['sexe'])?></td>
                                <td style="font-size: 9px;"><?php  echo($et['section'])?></td>
                                <td style="font-size: 9px;"><?php  echo($et['Mention'])?></td>
                                <td style="font-size: 9px;"><?php  echo($et['promotion'])?></td>
                                <td style="font-size: 9px;"><?php  echo($et['Local'])?></td>
                                <td style="font-size: 9px;"><?php  echo($et['annee'])?></td>
                                <!--liens -->
                                <td style="background-color: white; font-size: 5px;"><a onclick="return confirm('Etes-vous sûre...?');" href="Supprimeetudiant.php?id=<?php echo($et['id'])?>" class='btn btn-danger'><span class="glyphicon glyphicon-trash"></span></a>
                                    <td style="background-color: white; font-size: 5px;"><a  href="editetudiant.php?id=<?php echo($et['id'])?>" title="Editer cet enregistrement" class='btn btn-success'><span class="glyphicon glyphicon-pencil"></span></a>
                                </td>
                                            </tr>   
                                    <?php } ?>  
                            </tbody>
                        </table>
                                    
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