<?php

include 'connexion.php';

if (isset($_POST["connexion"])) {
    $num=$_POST["nom"];
    $nom=$_POST["pasword"];
    $requete=" select * from parent where Nom_parent='$num' and pasword='$nom' ";
    $resultat=mysqli_query($sum,$requete);
    $num_ligne=mysqli_num_rows($resultat);
    if ($num_ligne > 0) {
        header("Location:../Parents/parent.php");
    }else{
        die('donne erroner');
    }
}


?>