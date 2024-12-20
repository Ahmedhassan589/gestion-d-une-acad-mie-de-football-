<?php
$SERVER="localhost";
$utilisateur="root";
$motDepasse="";
$base="gestion_academie";
$E=mysqli_connect($SERVER,$utilisateur,$motDepasse,$base);



$q=("SELECT num_parent,Nom_parent FROM parent ");
$res=mysqli_query($E,$q);
echo"<br><br><br><center><br><br><br>";
echo"<table border='1'>";
echo"<tr><td>Num_parent</td><td>Nom_parent</td>\n";
 while($row=mysqli_fetch_assoc($res)){
    echo"<tr><td>{$row['num_parent']}</td> <td>{$row['Nom_parent']}</td> \n<br>";
 }
 echo"</center>";
 echo"</table>";

 
 ?>
