<?php
$SERVER="localhost";
$utilisateur="root";
$motDepasse="";
$base="gestion_academie";
$E=mysqli_connect($SERVER,$utilisateur,$motDepasse,$base);



$q=("SELECT Id_jou,Nom_jou,prenom_jou,Addr_jou,Age_jou,Date_Naissance,Id_equipe,num_parent FROM joueur ");
$res=mysqli_query($E,$q);
echo"<br><br><br><center><br><br><br>";
echo"<table border='1'>";
echo"<tr><td>Id_jou</td><td>Nom_jou</td><td>prenom_jou</td><td>Addr_jou</td><td>Age_jou</td> <td>Date_Naissance</td> <td>Id_equipe</td> <td>num_parent</td>\n";
 while($row=mysqli_fetch_assoc($res)){
    echo"<tr><td>{$row['Id_jou']}</td> <td>{$row['Nom_jou']}</td>  <td>{$row['prenom_jou']}</td> <td>{$row['Addr_jou']}</td> <td>{$row['Age_jou']}</td> <td>{$row['Date_Naissance']}</td> <td>{$row['Id_equipe']}</td> <td>{$row['num_parent']}</td>\n<br>";
 }
 echo"</center>";
 echo"</table>";

 
 ?>
