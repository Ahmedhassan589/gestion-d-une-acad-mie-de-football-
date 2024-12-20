<?php
$SERVER="localhost";
$utilisateur="root";
$motDepasse="";
$base="gestion_academie";
$E=mysqli_connect($SERVER,$utilisateur,$motDepasse,$base);

echo"<center><b><h1>inscription des etudiants en ligne:<h1><b></center>";
$Id_jou=$_POST["Id_jou"];
$q=("SELECT * FROM joueur where Id_jou='$Id_jou'");
$res=mysqli_query($E,$q);
echo"<br><br><br><center><br><br><br>";
echo"<table border='1'>";
echo"<tr><td>Id_jou</td><td>Nom_jou</td> <td>Prenom_jou</td> <td>Addr_jou</td> <td>Age_jou</td> <td>Date_Naissance</td> <td>Id_equipe</td> <td>num_parent</td>\n";
 while($row=mysqli_fetch_assoc($res)){
    echo"<tr><td>{$row['Id_Jou']}</td> <td>{$row['Nom_Jou']}</td> <td>{$row['Prenom_Jou']}</td> <td>{$row['Addr_Jou']}</td> <td>{$row['Age_Jou']}</td> <td>{$row['Date_Naissance']}</td> <td>{$row['Id_equipe']}</td> <td>{$row['num_parent']}</td>\n<br>";
 }
 echo"</center>";
 echo"</table>";
 ?>
 <div align=right><form method="POST" ACTION="MEUN.HTML">
 <input type="submit" value="Retour"> 
 </FORM></div>
