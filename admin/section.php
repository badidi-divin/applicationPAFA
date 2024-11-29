<?php
    require_once 'include/session.php';
     $mc="";
            //Pagination Des_Sectbre d'element par page
           $size=10;
           if(isset($_GET['page'])){
            $page=$_GET['page'];
           }
           else
           {
            $page=0;
           }

           $offset=$size*$page;
      
            if(isset($_GET['motcle'])){
                $mc=$_GET['motcle'];
                $req="SELECT * FROM section WHERE Des_Sect LIKE '%$mc%' LIMIT $size OFFSET $offset";
            }
            else
            {
                $req="SELECT * FROM section LIMIT $size OFFSET $offset";
            }
            $ps=$pdo->prepare($req);
            $ps->execute();
            //Cette requete me permet de connaitre le nbre de page contenant mes enregistrements
            if (isset($_GET['motcle'])){
                $ps2=$pdo->prepare("SELECT COUNT(*) AS NB_ET FROM section WHERE Des_Sect LIKE '%$mc%'");
            }
            else
            {
                $ps2=$pdo->prepare("SELECT COUNT(*) AS NB_ET FROM section");
            }
                $ps2->execute();
                $ligne=$ps2->fetch(PDO::FETCH_ASSOC);
                $NBE=$ligne['NB_ET'];
            //Nbre de page
            if(($NBE % $size)==0){
                $NbPage=floor( $NBE/$size);
            } 
            else 
            {
                $NbPage=floor($NBE/$size)+1;
            }
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
        <div class="header-advance-area">
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
                                            <form role="search" method="get" class="sr-input-func">
                                                <input type="text" name="motcle" value="<?php echo ($mc) ?>" placeholder="Search..." class="search-int form-control"> 
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                       <button type="submit" class="btn btn-primarimary"><i class="fa fa-search"></i></button>
                                            </form>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
          <div class="data-table-area mg-b-15" style="margin-left: 19px !important;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                         <div class="main-sparkline13-hd" style="border-radius: 5px; padding: 9px 4px 1px 9px;background-color:#141F29;">
                         <h1 style="color:white;font-size: 16px !important;letter-spacing: 0.2em"><i class="fa fa-product-hunt"></i> Liste <span class="table-project-n">des</span> des Sections de l'ISPT-KIN <a  onclick="return confirm('Etes-vous sûre...?');" href="section_vider.php" class="btn btn-danger btn-xs btn-supp"  style="color:white; background-color: #D80027; padding: 3px 8px !important;" title="Supprimer l'enregistrement"><i class="fa fa-trash">Vider</i></a>
                            <a href="new_section.php" class="btn btn-primary btn-xs btn-supp" title="Ajouter un enregistrement"><i class="fa fa-plus">Ajouter</i></a>
                        </h1>
                                </div>
                        <div class="sparkline13-list">
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" class="table table-striped">
                                        <thead>
                               <tr>
                                  <th>CODE</th><th>DESIGNATION</th><th>SYSTEME</th><th>ACTION</th><th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody style="background-color: white;">
                             <?php while ($et=$ps->fetch()){?>
                                <tr>
                                <td><?php  echo($et['Cod_Sect'])?></td>
                                <td><?php  echo($et['Des_Sect'])?></td>
                                <td><?php  echo($et['Systeme'])?></td>
                                <!--liens -->
                                <td><a class="btn btn-danger" onclick="return confirm('Etes-vous sûre...?');" href="SupprimeSection.php?id=<?php echo($et['Cod_Sect'])?>">Supprimer</a></td>
                                <td><a class="btn btn-primary" href="EditSection.php?id=<?php  echo($et['Cod_Sect'])?>">Edit</a> </td>
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