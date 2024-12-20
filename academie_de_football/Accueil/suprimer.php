<?php

include 'connexion.php';
$idsup=$_GET['idsup'];
$requete="delete parent.* from parent where num_parent=$idsup";
$resultat=mysqli_query($sum,$requete);
if ($resultat) {
    header("Location:interfaceAdministrateur.php"); 
}else{
    die(mysqli_error($sum));
}

?>