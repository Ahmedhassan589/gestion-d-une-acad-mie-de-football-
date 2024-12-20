<?php

include 'connexion.php';

if (isset($_POST["connexion"])) {
    $num=$_POST["nom"];
    $nom=$_POST["pasword"];
    $requete=" select * from administrateur where Nom_Admin='$num' and Mot_de_Passe='$nom' ";
    $resultat=mysqli_query($sum,$requete);
    $num_ligne=mysqli_num_rows($resultat);
    if ($num_ligne > 0) {
        header("Location:../Administrateur/interfaceAdministrateur.php");
    }else{
        die('donne erroner');
    }
}


?>