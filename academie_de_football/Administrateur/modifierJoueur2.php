<?php
include 'connexion.php';

$Id_Jou=$_POST["Id_Jou"];
$requet=" select * from joueur where Id_jou=$Id_Jou";
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
    $num_parent=$_POST["num_parent"];

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
    <title>modifierjoueur</title>
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
                            <label for="Nom_Jou">Nom_Jou</label>
                            <input type="text" value="<?php echo"$Nom_Jou"?>" id="Nom" name="Nom_Jou">
                        </div>
                        <div class="form-element">
                            <label for="Prenom_Jou">Prenom_Jou</label>
                            <input type="text" value="<?php echo"$Prenom_Jou"?>" id="Prenom" name="Prenom_Jou">
                        </div>
                        <div class="form-element">
                            <label for=" Addr_Jou">Addr_Jou</label>
                            <input type="text" value="<?php echo" $Addr_Jou"?>" id=" Addr_Jou" name="Addr_Jou">
                        </div>
                        <div class="form-element">
                            <label for=" Age_Jou">Age_Jou</label>
                            <input type="text" value="<?php echo" $Age_Jou"?>" id=" Age_Jou" name="Age_Jou">
                        </div>
                        <div class="form-element">
                            <label for="Date_Naissance">Date_Naissance</label>
                            <input type="date" value="<?php echo"$Date_Naissance"?>" id="Date_Naissance" name="Date_Naissance">
                        </div>
                        <div class="form-element">
                            <label for="Id_equipe">Id_equipe</label>
                            <input type="number" value="<?php echo"$Id_equipe"?>" id="Id_equipe" name="Id_equipe">
                        </div>
                        <div class="form-element">
                            <label for="num_parent">num_parent</label>
                            <input type="number" value="<?php echo"$num_parent"?>" id="num_parent" name="num_parent">
                        </div>
                        <div class="form-element">
                           <input type="submit" name="connexion" value="connexion" class="button">
                        </div>  
                            </form>
</body>
</html>
