<?php
include 'connexion.php';

$idmodif=$_GET["idmodif"];
$requet=" select * from formateur where	Id_For=$idmodif";
$result=mysqli_query($sum,$requet);
if ($result) {
    while ($lign=mysqli_fetch_row($result)) {
        $num=$lign[0];
        $nom=$lign[1];
        $prenom=$lign[2];
        $adresse=$lign[3];
        $Equipe=$lign[4];
    }
}

if (isset($_POST["connexion"])) {
    $numero=$_POST["numero"];
    $lastname=$_POST["lastname"];
    $fistname=$_POST["fistname"];
    $adrresse=$_POST["adresse"];
    $equipe=$_POST["Equipe"];

    $sql="update formateur set Nom_For='$lastname',Prenom_For='$fistname',
    Addr_For='$adrresse',Id_equipe='$equipe'
    where Id_For=$numero";
    $resultat=mysqli_query($sum,$sql);
    if ($resultat) {
        header("Location:interfaceAdministrateur.php");
    }else{
        die(mysqli_error($sum));
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
                            <label for="num">Identifiant</label>
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
                            <input type="text" value="<?php echo" $adresse"?>" id=" Adresse" name="adresse">
                        </div>
                        <div class="form-element">
                            <label for=" Adresse">Salaire</label>
                            <input type="text" value="<?php echo" $Equipe"?>" id=" Adresse" name="Equipe">
                        </div>
                        <div class="form-element">
                           <input type="submit" name="connexion" value="connexion" class="button">
                        </div>  
                            </form>
</body>
</html>
