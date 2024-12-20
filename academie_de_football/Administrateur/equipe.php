<?php
$SERVER="localhost";
$utilisateur="root";
$motDepasse="";
$base="gestion_academie";
$E=mysqli_connect($SERVER,$utilisateur,$motDepasse,$base);



$q=("SELECT Id_equipe,Nom_equipe,Logo FROM equipe ");
$res=mysqli_query($E,$q);
echo"<br><br><br><center><br><br><br>";
echo"<table border='1'>";
echo"<tr><td>Id_equipe</td><td>Nom_equipe</td><td>Logo</td>\n";
 while($row=mysqli_fetch_assoc($res)){
    echo"<tr><td>{$row['Id_equipe']}</td> <td>{$row['Nom_equipe']}</td>  <td>{$row['Logo']}</td>\n<br>";
 }
 echo"</center>";
 echo"</table>";

 
 ?>
