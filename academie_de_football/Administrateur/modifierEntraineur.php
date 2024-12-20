<?php
include 'connexion.php';

$Id_En=$_POST["Id_En"];
$requet=" select * from entraineur where Id_En=$Id_En";
$result=mysqli_query($sum,$requet);
if ($result) {
    while ($lign=mysqli_fetch_row($result)) {
        $Id_En=$lign[0];
        $Nom_En=$lign[1];
        $Prenom_En=$lign[2];
        $Addr_En=$lign[3];
        $Salaire_En=$lign[4];
        $Id_jou=$lign[5];
        $Id_equipe=$lign[6]; 
    }
}

if (isset($_POST["connexion"])) {
    $Id_En=$_POST["Id_En"];
    $Nom_En=$_POST["Nom_En"];
    $Prenom_En=$_POST["Prenom_En"];
    $Addr_En=$_POST["Addr_En"];
    $Salaire_En=$_POST["Salaire_En"];
    $Id_jou=$_POST["Id_jou"];
    $Id_equipe=$_POST["Id_equipe"];

    $sql="update entraineur set Id_En='$Id_En',Nom_En='$Nom_En',Prenom_En='$Prenom_En',
    Addr_En='$Addr_En',Salaire_En='$Salaire_En',Id_jou='$Id_jou',Id_equipe='$Id_equipe',
    where Id_En=$Id_En";
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
                            <label for="Id_En">Identifiant</label>
                            <input type="number"   id="Id_En" value="<?php echo"$Id_En"?>" Name="Id_En">
                        </div>
                        <div class="form-element">
                            <label for="Nom_En">Nom_En</label>
                            <input type="text" value="<?php echo"$Nom_En"?>" id="Nom_En" Name="Nom_En">
                        </div>
                        <div class="form-element">
                            <label for="Prenom_En">Prenom_En</label>
                            <input type="text" value="<?php echo"$Prenom_En"?>" id="Prenom_En" Name="Prenom_En">
                        </div>
                        <div class="form-element">
                            <label for=" Addr_En">Addr_En</label>
                            <input type="text" value="<?php echo" $Addr_En"?>" id=" Addr_En" Name="Addr_En">
                        </div>
                        <div class="form-element">
                            <label for=" Addr_En">Salaire_En</label>
                            <input type="number" value="<?php echo" $Salaire_En"?>" id=" Addr_En" Name="Addr_En">
                        </div>
                        <div class="form-element">
                            <label for=" Id_jou">Id_jou</label>
                            <input type="number" value="<?php echo" $Id_jou"?>" id=" Id_jou" Name="Id_jou">
                        </div>
                        <div class="form-element">
                            <label for=" Id_equipe">Id_equipe</label>
                            <input type="number" value="<?php echo" $Id_equipe"?>" id=" Id_equipe" Name="Id_equipe">
                        </div>
                        <div class="form-element">
                           <input type="submit" name="connexion" value="connexion" class="button">
                        </div>  
                            </form>
</body>
</html>
