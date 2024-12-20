<?php

include 'connexion.php';

if (isset($_POST["connexion"])) {
    $Id_For=$_POST["Id_For"];
    $Nom_For=$_POST["Nom_For"];
    $Prenom_For=$_POST["Prenom_For"];
    $Addr_For=$_POST["Addr_For"];
    $Id_equipe=$_POST["Id_equipe"];
    $requete= select * from Formateur;
    $resultat=mysqli_query($sum,$requete);
    if ($resultat) {
        header("Location:interfaceAdministrateur.php");
    }else{
        die(mysqli_error($sum));
    }
}

?> le base de donnee est bien enregistre .