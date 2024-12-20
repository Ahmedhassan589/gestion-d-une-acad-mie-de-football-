<?php
include 'connexion.php';

$idmodif=$_GET["idmodif"];
$requet=" select * from joueur where Id_jou=$idmodif";
$result=mysqli_query($sum,$requet);
if ($result) {
    while ($lign=mysqli_fetch_row($result)) {
        $Id_jou=$lign[0];
        $Nom_jou=$lign[1];
        $Prenom_jou=$lign[2];
        $Addr_jou=$lign[3];
        $Age_jou=$lign[4];
        $DateNaissance=$lign[5];
        $Id_equipe=$lign[6];
        $num_parent=$lign[7];
    }
}

if (isset($_POST["connexion"])) {
    $Id_jou=$_POST["Id_jou"];
    $lastname=$_POST["lastname"];
    $fistname=$_POST["fistname"];
    $location=$_POST["addr_jou"];
    $Age=$_POST["age"];
    $DateNaissance=$_POST["DateNaissance"];
    $Id_equipe=$_POST["Id_equip"];
    $responsable=$_POST["num_parent"];

    $sql="update joueur set Nom_Jou='$lastname',Prenom_Jou='$fistname',
    Addr_Jou='$location',Age_Jou='$Age',DateNaissance='$Naissance',Id_equipe='$equipe',num_parent='$responsable'
    where Id_Jou=$numero";
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
                            <label for="Id_jou">Id_jou</label>
                            <input type="number"   id="Id_jou" value="<?php echo"$Id_jou"?>" name="Id_jou">
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
                            <label for=" Addr_jou">Addr_jou</label>
                            <input type="text" value="<?php echo" $addr"?>" id=" Addr" name="addr">
                        </div>
                        <div class="form-element">
                            <label for=" age">Age</label>
                            <input type="text" value="<?php echo" $age"?>" id=" age" name="age">
                        </div>
                        <div class="form-element">
                            <label for="DateNaissance">DateNaissance</label>
                            <input type="date" value="<?php echo"$DateNaissance"?>" id="DateNaissance" name="DateNaissance">
                        </div>
                        <div class="form-element">
                            <label for="motpass">equipe</label>
                            <input type="number" value="<?php echo"$Id_equipe"?>" id="motpass" name="Id_equipe">
                        </div>
                        <div class="form-element">
                            <label for="parent">num_parent</label>
                            <input type="number" value="<?php echo"$num_parent"?>" id="num_parent" name="num_parent">
                        </div>
                        <div class="form-element">
                           <input type="submit" name="connexion" value="connexion" class="button">
                        </div>  
                            </form>
</body>
</html>
