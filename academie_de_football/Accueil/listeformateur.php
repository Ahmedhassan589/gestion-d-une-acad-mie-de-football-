<?php
$SERVER="localhost";
$utilisateur="root";
$motDepasse="";
$base="gestion_academie";
$E=mysqli_connect($SERVER,$utilisateur,$motDepasse,$base);



$q=("SELECT Id_For,Nom_For,Prenom_For,Addr_For,Id_equipe FROM formateur ");
$res=mysqli_query($E,$q);
echo"<br><br><br><center><br><br><br>";
echo"<table border='1'>";
echo"<tr><td>Id_For</td> <td>Nom_For</td> <td>prenom_For</td> <td>Addr_For</td> <td>Id_equipe</td>\n";
 while($row=mysqli_fetch_assoc($res)){
    echo"<tr><td>{$row['Id_For']}</td> <td>{$row['Nom_For']}</td> <td>{$row['Prenom_For']}</td> <td>{$row['Addr_For']}</td> <td>{$row['Id_equipe']}</td>\n<br>";
 }
 echo"</center>";
 echo"</table>";

 
 ?>
