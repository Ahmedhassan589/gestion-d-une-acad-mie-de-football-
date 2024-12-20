<?php
$SERVER="localhost";
$utilisateur="root";
$motDepasse="";
$base="gestion_academie";
$E=mysqli_connect($SERVER,$utilisateur,$motDepasse,$base);

echo"<center><b><h1>rechercher la liste formateur:<h1><b></center>";
$Id_For=$_POST["Id_For"];
$q=("SELECT * FROM formateur where Id_For='$Id_For'");
$res=mysqli_query($E,$q);
echo"<br><br><br><center><br><br><br>";
echo"<table border='1'>";
echo"<tr><td>Id_For</td><td>Nom_En</td>  <td>Prenom_For</td> <td>Addr_For</td> <td>Id_equipe</td>\n";
 while($row=mysqli_fetch_assoc($res)){
    echo"<tr><td>{$row['Id_For']}</td> <td>{$row['Nom_For']}</td> <td>{$row['Prenom_For']}</td> <td>{$row['Addr_For']}</td> <td>{$row['Id_equipe']}</td>\n<br>";
 }
 echo"</center>";
 echo"</table>";
 ?>
 <div align=right><form method="POST" ACTION="MEUN.HTML">
 <input type="submit" value="Retour"> 
 </FORM></div>
