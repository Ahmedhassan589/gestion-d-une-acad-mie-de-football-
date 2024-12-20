<?php

include 'connexion.php';
$idsup=$_GET['idsup'];
$requete="delete   formateur.* from  formateur where Id_For	=$idsup";
$resultat=mysqli_query($sum,$requete);
if ($resultat) {
    header("Location:interfaceAdministrateur.php"); 
}else{
    die(mysqli_error($sum));
}

?>