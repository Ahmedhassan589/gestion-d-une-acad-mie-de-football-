<?php

include 'connexion.php';

if (isset($_POST["connexion"])) {
    $num=$_POST["numero"];
    $nom=$_POST["lastname"];
    $prenom=$_POST["fistname"];
    $adre=$_POST["addre"];
    $age=$_POST["age"];
    $Naissance=$_POST["naiss"];
    $Equipe=$_POST["equip"];
    $parent=$_POST["parent"];
    $requete="insert into joueur (Id_Jou,Nom_Jou,Prenom_Jou,Addr_Jou,Age_Jou,Date_Naissance,Id_equipe,Id_parent)
    values($num,'$nom','$prenom','$adre','$age','$Naissance','$Equipe','$parent')";
    $resultat=mysql_query($requete);
    if ($resultat) {
        header("Location:interfaceAdministrateur.php");
    }else{
        die(mysql_error($con));
    }
}


?>?