<?php

include 'connexion.php';
$idsup=$_GET['idsup'];
$requete="delete equipe.* from equipe where Id_equipe=$idsup";
$resultat=mysqli_query($sum,$requete);
if ($resultat) {
    header("Location:interfaceAdministrateur.php"); 
}else{
    die(mysqli_error($sum));
}

?>