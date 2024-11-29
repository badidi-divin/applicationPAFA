<?php
	session_start();
	session_unset();
	session_destroy();
	header('location:../pluggin/Pages/authentification_profil.php');
?>