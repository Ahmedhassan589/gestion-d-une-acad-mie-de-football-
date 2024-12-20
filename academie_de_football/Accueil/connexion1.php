<?php

include 'connexion.php';

if (isset($_POST["connexion"])) {
    $num=$_POST["Id_jou"];
    $nom=$_POST["pasword"];
    $requete=" select * from joueur where Id_jou='$num' and pasword='$nom' ";
    $resultat=mysqli_query($sum,$requete);
    $num_ligne=mysqli_num_rows($resultat);
    if ($num_ligne > 0) {
        header("Location:../connexion/connecte.php");
    }else{
        die('donne erroner');
    }
}


?>