<?php
include 'connexion.php';

$idmodif=$_GET["idmodif"];
$requet=" select * from joueur where Id_jou=$idmodif";
$result=mysqli_query($sum,$requet);
if ($result) {
    while ($lign=mysqli_fetch_row($result)) {
        $Id_Jou=$lign[0];
        $Nom_Jou=$lign[1];
        $Prenom_Jou=$lign[2];
        $Addr_Jou=$lign[3];
        $Age_Jou=$lign[4];
        $Date_Naissance=$lign[5];
        $Id_equipe=$lign[6];
        $num_parent=$lign[7];
    }
}

if (isset($_POST["connexion"])) {
    $Id_Jou=$_POST["Id_Jou"];
    $Nom_Jou=$_POST["Nom_Jou"];
    $Prenom_Jou=$_POST["Prenom_Jou"];
    $Addr_Jou=$_POST["Addr_Jou"];
    $Age_Jou=$_POST["Age_Jou"];
    $Date_Naissance=$_POST["Date_Naissance"];
    $Id_equipe=$_POST["Id_equip"];
    $num_parent=$_POST["num_paren"];

    $sql="update joueur set Nom_Jou='$Nom_Jou',Prenom_Jou='$Prenom_Jou',
    Addr_Jou='$Addr_Jou',Age_Jou='$Age_Jou',Date_Naissance='$Date_Naissance',Id_equipe='$Id_equipe',num_parent='$num_parent'
    where Id_Jou=$Id_Jou";
    $resultat=mysqli_query($sum,$sql);
    if ($resultat) {
        header("Location:interfaceAdministrateur.php");
    }else{
        die(mysql_error($sum));
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>modifier.Com</title>
    <link rel="stylesheet" href="modifier.css">
</head>
<body>
<form action="" method="POST" id="modifier" class="modifier">
                        <h2>modifier</h2>
                        <div class="form-element">
                            <label for="num">Numero</label>
                            <input type="number"   id="num" value="<?php echo"$num"?>" name="numero">
                        </div>
                        <div class="form-element">
                            <label for="Nom">Nom</label>
                            <input type="text" value="<?php echo"$nom"?>" id="Nom" name="lastname">
                        </div>
                        <div class="form-element">
                            <label for="Prenom">Prenom</label>
                            <input type="text" value="<?php echo"$prenom"?>" id="Prenom" name="fistname">
                        </div>
                        <div class="form-element">
                            <label for=" Adresse">Adresse</label>
                            <input type="text" value="<?php echo" $adrresse"?>" id=" Adresse" name="addre">
                        </div>
                        <div class="form-element">
                            <label for=" age">Age</label>
                            <input type="text" value="<?php echo" $age"?>" id=" age" name="age">
                        </div>
                        <div class="form-element">
                            <label for="Naissance">Naissance</label>
                            <input type="date" value="<?php echo"$Naissance"?>" id="Naissance" name="naiss">
                        </div>
                        <div class="form-element">
                            <label for="motpass">Equipe</label>
                            <input type="number" value="<?php echo"$Equipe"?>" id="motpass" name="equip">
                        </div>
                        <div class="form-element">
                            <label for="parent">parent</label>
                            <input type="number" value="<?php echo"$parent"?>" id="parent" name="parent">
                        </div>
                        <div class="form-element">
                           <input type="submit" name="connexion" value="connexion" class="button">
                        </div>  
                            </form>
</body>
</html>
