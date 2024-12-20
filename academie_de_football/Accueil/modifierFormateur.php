<?php
include 'connexion.php';

$idmodif=$_GET["idmodif"];
$requet=" select * from formateur where	Id_For=$idmodif";
$result=mysqli_query($sum,$requet);
if ($result) {
    while ($lign=mysqli_fetch_row($result)) {
        $Id_For=$lign[0];
        $Nom_For=$lign[1];
        $Prenom_For=$lign[2];
        $Addr_For=$lign[3];
        $Id_equipe=$lign[4];
    }
}

if (isset($_POST["connexion"])) {
    $Id_For=$_POST["Id_For"];
    $Nom_For=$_POST["Nom_For"];
    $Prenom_For=$_POST["Prenom_For"];
    $Addr_For=$_POST["Addr_For"];
    $Id_equipe=$_POST["Id_equipe"];

    $sql="update formateur set Nom_For='$Nom_For',Prenom_For='$Prenom_For',
    Addr_For='$aAddr_For',Id_equipe='$Id_equipe'
    where Id_For=$Id_For";
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
                            <label for="Id_For">Id_For</label>
                            <input type="number"   id="Id_For" value="<?php echo"$Id_For"?>" name="Id_For">
                        </div>
                        <div class="form-element">
                            <label for="Nom_For">Nom_For</label>
                            <input type="text" value="<?php echo"$Nom_For"?>" id="Nom" name="Nom_For">
                        </div>
                        <div class="form-element">
                            <label for="Prenom_For">Prenom_For</label>
                            <input type="text" value="<?php echo"$Prenom_For"?>" id="Prenom_For" name="Prenom_For">
                        </div>
                        <div class="form-element">
                            <label for=" Addr_For">Addr_For</label>
                            <input type="text" value="<?php echo" $Addr_For"?>" id=" Addr_For" name="Addr_For">
                        </div>
                        <div class="form-element">
                            <label for=" Id_equipe">equipe</label>
                            <input type="text" value="<?php echo" $Id_equipe"?>" id=" Id_equipe" name="Id_equipe">
                        </div>
                        <div class="form-element">
                           <input type="submit" name="connexion" value="connexion" class="button">
                        </div>  
                            </form>
</body>
</html>
