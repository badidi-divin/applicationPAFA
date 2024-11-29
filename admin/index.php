<?php
    session_start();
    // Connection datatabase
    require_once '../bdd/connexion.php';

    if (isset($_POST['formconnect'])) {

        $Pseudo=htmlspecialchars($_POST['pseudo']);

        $mdp=md5($_POST['password']);

        if (!empty($Pseudo) AND !empty($mdp)) {

            // Vérification si l'utilisateur existe vraiment
            $requiser=$pdo->prepare("SELECT * FROM admin WHERE pseudo=? AND password=?");
            $requiser->execute(array($Pseudo,$mdp));
            // rowCount permet de compter le nombre saisie par le user
            $userexist=$requiser->rowCount();
            if ($userexist==1) {
                $userinfo=$requiser->fetch();
                $_SESSION['id']=$userinfo['id'];
                $_SESSION['pseudo']=$userinfo['pseudo'];
                $_SESSION['password']=$userinfo['password'];
                header("Location:tableau_bord.php");        
            }
            else
            {
                $erreur="Mauvais Pseudo ou mauvais mot de passe! ";
            }
            
        }
        else
        {
            $erreur="Tous les champs doivent etre completés";
        }

    }
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ISPT-KIN| Connexion</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
        <link rel="stylesheet" href="css/custom.css">
    <!-- modals CSS
        ============================================ -->
    <link rel="stylesheet" href="css/modals.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- forms CSS
    ============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
     <!-- select2 CSS
        ============================================ -->
    <link rel="stylesheet" href="css/select2/select2.min.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- chosen CSS
        ============================================ -->
    <link rel="stylesheet" href="css/chosen/bootstrap-chosen.css">
     <!-- style Alert CSS
        ============================================ -->
    <link rel="stylesheet" href="css/alerts.css">
     <!-- style Alert CSS
        ============================================ -->
    <link rel="stylesheet" href="css/custom.css">
<style>
   .error-pagewrap{
    padding-top: 55px;
    font-size: 20px;
    background-image: url(../images/20.png);
    min-height: 100vh;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    position: relative;
    z-index: 1;}

    .custom-login{
        background-color: #FFFCC8;
        padding: 10px;
        overflow: hidden;
        border-top-right-radius: 10px;
        border-top-left-radius: 10px;
    }

    .loginbtn{
    background-color: #FF8800 !important;
    border: 1px solid #FF8800 !important;
    font-size: 14px;
    font-weight: bolder;
    /* font-family: Poppins-Medium; */
    font-size: 16px;
    color: white;
    line-height: 1.2;
    display: flex;
    justify-content: center;
    border-radius: 25px;
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    -moz-transition: all 0.4s;
    transition: all 0.4s;
}

.form-control{
    margin-bottom: 33px;
    padding: 24px !important;
    width: 100%;
    padding: 14.5px 0px 14.5px 30px;
    border: 1px solid white;
    border-radius: 27.5px;
    -o-border-radius: 27.5px;
    -ms-border-radius: 27.5px;
    -moz-border-radius: 27.5px;
    font-size: 17px;
    font-weight: 400;
    background: rgba(255, 255, 255, 0.2);
    color: white;
    letter-spacing: 0.2em;
}

.form-control:focus{
    border: 2px solid #FFFCC8;
}
    
    </style>
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body>

	<div class="error-pagewrap fade in">
		<div class="error-page-int">
          
			<div class="text-center m-b-md col-xd-12  custom-login" style="background-color:white;padding: 20px;width: 92%;margin-left: 19px;">
				<!--img src="img/logo/logo.png" style="margin-bottom: 16px;"--><h3 style="letter-spacing:0.2em; font-weight: bolder;">AUTHENTIFICATION</h3>
			</div>
			<div class="content-error">

				<div class="hpanel">
                     
                    <div class="panel-body gradient-ohhappiness col-xd-3 col-md-3 col-lg-12" >
                           <form method="post" action="">
                               <div class="form-group">
                                    <label class="control-label" for="pseudo" style="color:#FFFFFF;letter-spacing:0.1em">Nom d'utilisateur</label>
                                    <input type="text" placeholder="Nom d'utilisateur" title="SVP entrez votre nom d'utilisateur" required="required" value="" name="pseudo"  class="form-control" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="password" style="color:#FFFFFF; letter-spacing:0.1em">Votre mot de passe</label>
                                    <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" class="form-control" autocomplete="off">
                                </div>
                                <button class="btn btn-success btn-block loginbtn" name="formconnect">Connectez - vous</button>
                                <?php
                                if (isset($erreur)) {
                                    echo "<font color='red'>".$erreur."</font>";
                                }
                            ?>
                            </form>
                        
                    </div>
                    <div class="alert alert-danger alert-mg-b alert-st-four is-no-visible" role="alert">
                            <i class="fa fa-times edu-danger-error admin-check-pro admin-check-pro-none" aria-hidden="true"></i>
                                
                            <p class="message-mg-rt message-alert-none"></p>
                        </div>
                </div>
			</div>
		</div>   
    </div>
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="js/tawk-chat.js"></script>
     <script src="js/app/login.js"></script>
      <!-- SWEET ALERTS JS
        ============================================ -->
    <script src="js/alerts-boxes/sweet-alert-script.js"></script>
    <script src="js/alerts-boxes/sweetalert.min.js"></script>
</body>

</html>