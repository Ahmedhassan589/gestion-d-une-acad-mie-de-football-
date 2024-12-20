<?php

include 'connexion.php';
$idsup=$_GET['idsup'];
$requete="delete joueur.* from joueur where Id_Jou=$idsup";
$resultat=mysqli_query($sum,$requete);
if ($resultat) {
    header("Location:interfaceAdministrateur.php"); 
}else{
    die(mysqli_error($sum));
}

?>