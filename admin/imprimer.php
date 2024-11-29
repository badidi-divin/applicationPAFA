<?php
	session_start();
	require_once '../bdd/connexion.php';

	$requete="SELECT * FROM etudiant";
	$ps=$pdo->query($requete);

	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tableau de Bord</title>
	<link rel="stylesheet" href="tt/css/test.css">
	<style type="text/css">
		@page
		{
			size:A4;
			margin:0; 

		}
		#print-btn{
			display: none;
			visibility: none;
		}
		.margetop{
			margin-top: 60px;
		}
		.spacer{
			margin-top: 10px;
		}
		.space{
			margin-top: 70px;
		}
		.spac{
			margin-top: 80px;
		}
		.a{
			text-align:center;
			text-decoration: blink;
		}
	</style>
</head>
<body>
	<!--************************ Header ***********************************-->
	<!-- Navigation -->

			<div class="container headings text-center margetop" >
				<h2 class=" pt-1" style="font-weight: bold;">ISPT-KIN</h2>
				<h5 class=" pt-1" style="font-weight: bold;">Institut Supérieur Pédagogique et Technique de Kinshasa</h5>
				<img src="../images/16.gif" align="center" width="100px" height="100px">
			</div>
		<div class="container col-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
						LISTE DES ETUDIANTS ENROLES
					</div>	
					<!-- Le corps du tableau où l'on mettra le contenu -->
					<div class="panel-body">
						<table class="table table-striped" style="background-color: white; font-size: 12px;">
							<thead>
								<tr>
					 <th>ID</th><th>NOM_COMPLET</th><th>SEXE</th><th>SECTION</th><th>MENTION</th><th>PROMOTION</th><th>LOCAL</th><th>ANNEE_ACADEMIQUE</th>
								</tr>
							</thead>
							<tbody>
								 <?php while ($et=$ps->fetch()){?>
                                <tr>
                                <td><?php  echo($et['id'])?></td>
                               <td ><?php  echo($et['nom_complet'])?></td>
                                <td><?php  echo($et['sexe'])?></td>
                                <td><?php  echo($et['section'])?></td>
                                <td><?php  echo($et['Mention'])?></td>
                                <td><?php  echo($et['promotion'])?></td>
                                <td><?php  echo($et['Local'])?></td>
                                <td><?php  echo($et['annee'])?></td>
                                <!--liens -->
                                            </tr>   
                                    <?php } ?>  
							</tbody>
						</table>
						<div class="text-center">
							<button onclick="window.print();" class="btn btn-primary">Print</button>
						</div>	
					</div>
				</div>	
			</div>
	<!-- Circulation de la page -->
	
	
	<!-- Affichage inscris end -->
		
	




<!-- ***********footer Ends******************** -->
<!-- **********************Code Javascript*********************-->
	<script src="tt/js/jquery.js"></script>
	<script src="tt/js/bootstrap.min.js"></script>
</body>
</html>
