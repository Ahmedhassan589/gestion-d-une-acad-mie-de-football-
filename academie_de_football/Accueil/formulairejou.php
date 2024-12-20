<p>
<?php
// connexion
session_start();
$id=mysqli_connect("localhost","root","","gestion_academie") or die("erreur");
// recuperation

$Id_Jou = $_POST['Id_Jou'];
$Nom_Jou = $_POST['Nom_Jou'];
$Prenom_Jou = $_POST['Prenom_Jou'];
$Addr_Jou = $_POST['Addr_Jou'];
$Age_Jou = $_POST['Age_Jou'];
$Date_naissance = password_hash($_POST['Date_Naissance'],PASSWORD_BCRYPT);
$Id_equipe = $_POST['Id_equipe'];
$num_parent = $_POST['num_parent'];
$pay = $_POST['genre'];

    $t="INSERT INTO joueur(Id_Jou,Nom_Jou,Prenom_Jou,Addr_Jou,
    Age_Jou,Date_naissance,Id_equipe,num_parent) 
    VALUES('$Id_Jou,$Nom_Jou','$Prenom_Jou ','$Addr_Jou','$Age_Jou ','$Date_naissance', '$Id_equipe','$num_parent ','$pay')";
    $ajouter=mysqli_query($id,$t);
    if($ajouter){
        header("location:connecter.php");
    }
    else{
        echo " erreur d'ajout".mysqli_error($id);
    }
    
$id->close();
?>
<form method="POST" action="accueil.html">
    <input type="submit" value="ALLER AU MENU GENERAL">
</form>
</p>
