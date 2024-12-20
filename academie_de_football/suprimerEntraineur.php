<?php

include 'connexion.php';
$idsup=$_GET['idsup'];
$requete="delete  entraineur.* from entraineur where Id_En=$idsup";
$resultat=mysqli_query($sum,$requete);
if ($resultat) {
    header("Location:interfaceAdministrateur.php"); 
}else{
    die(mysqli_error($sum));
}

?>