<?php
$serveur="localhost";
$user="root";
$mdp="";
$base="gestion_academie";
$sum=mysqli_connect($serveur,$user,$mdp,$base);
if (!$sum) {
	die("la connexion a échoué :".mysqli_connect_error());
}else"Connexion réussie";
?>