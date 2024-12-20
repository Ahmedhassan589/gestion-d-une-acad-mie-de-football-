<?php
include 'connexion.php';

$idmodif=$_GET["idmodif"];
$requet=" select * from joueur where Id_jou=$idmodif";
$result=mysqli_query($sum,$requet);
if ($result) {
    while ($lign=mysqli_fetch_row($result)) {
        $num=$lign[0];
        $nom=$lign[1];
        $prenom=$lign[2];
        $adrresse=$lign[3];
        $age=$lign[4];
        $Naissance=$lign[5];
        $Equipe=$lign[6];
        $parent=$lign[7];
    }
}

if (isset($_POST["connexion"])) {
    $numero=$_POST["numero"];
    $lastname=$_POST["lastname"];
    $fistname=$_POST["fistname"];
    $location=$_POST["addre"];
    $Age=$_POST["age"];
    $Naissance=$_POST["naiss"];
    $Equipe=$_POST["equip"];
    $responsable=$_POST["parent"];

    $sql="update joueur set Nom_Jou='$lastname',Prenom_Jou='$fistname',
    Addr_Jou='$location',Age_Jou='$Age',Date_Naissance='$Naissance',Id_equipe='$Equipe',Id_parent='$responsable'
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
