<?php
$SERVER="localhost";
$utilisateur="root";
$motDepasse="";
$base="gestion_academie";
$E=mysqli_connect($SERVER,$utilisateur,$motDepasse,$base);



$q=("SELECT Id_En,Nom_En,Prenom_En,Addr_En,Salaire_En,Id_jou,Id_equipe FROM entraineur ");
$res=mysqli_query($E,$q);
echo"<br><br><br><center><br><br><br>";
echo"<table border='1'>";
echo"<tr><td>Id_En</td> <td>Nom_En</td> <td>prenom_En</td> <td>Addr_En</td> <td>Salaire_En</td><td>Id_jou</td><td>Id_equipe</td>\n";
 while($row=mysqli_fetch_assoc($res)){
    echo"<tr><td>{$row['Id_En']}</td> <td>{$row['Nom_En']}</td> <td>{$row['Prenom_En']}</td> <td>{$row['Addr_En']}</td> <td>{$row['Salaire_En']}</td> <td>{$row['Id_jou']}</td> <td>{$row['Id_equipe']}</td>\n<br>";
 }
 echo"</center>";
 echo"</table>";

 
 ?>
