<?php
	//Récuperation du paramètre URL appelé code
	require_once('../bdd/connexion.php');
	$ps=$pdo->prepare("TRUNCATE TABLE inscription_special_classique");
	$params=array($id);
	$ps->execute($params);
	
	header("location:".$_SERVER['HTTP_REFERER']);
?>