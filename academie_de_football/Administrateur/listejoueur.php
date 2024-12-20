<?php
$SERVER="localhost";
$utilisateur="root";
$motDepasse="";
$base="gestion_academie";
$E=mysqli_connect($SERVER,$utilisateur,$motDepasse,$base);



$q=("SELECT Id_jou,Nom_jou,prenom_jou,Addr_jou,Age_jou,Date_Naissance,Id_equipe,num_parent FROM joueur ");
$res=mysqli_query($E,$q);
// Styles CSS pour le tableau
echo "
<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f8f9fa;
        color: #343a40;
        margin: 0;
        padding: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        text-align: center;
    }
    table {
        width: 90%;
        border-collapse: collapse;
        background-color: brown;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }
    th, td {
        padding: 15px;
        border: 1px solid #dee2e6;
        text-align: left;
    }
    th {
        background-color: #007bff;
        color: blue;
        font-weight: bold;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    tr:hover {
        background-color: #e9ecef;
    }
    tr {
        transition: background-color 0.3s;
    }
    @media (max-width: 600px) {
        table {
            width: 100%;
        }
        th, td {
            padding: 10px;
        }
    }
</style>
";
echo"<br><br><br><center><br><br><br>";
echo"<table border='1'>";
echo"<tr><td>Id_jou</td><td>Nom_jou</td><td>prenom_jou</td><td>Addr_jou</td><td>Age_jou</td> <td>Date_Naissance</td> <td>Id_equipe</td> <td>num_parent</td> \n";
 while($row=mysqli_fetch_assoc($res)){
    echo"<tr><td>{$row['Id_jou']}</td> <td>{$row['Nom_jou']}</td>  <td>{$row['prenom_jou']}</td> <td>{$row['Addr_jou']}</td> <td>{$row['Age_jou']}</td> <td>{$row['Date_Naissance']}</td> <td>{$row['Id_equipe']}</td> <td>{$row['num_parent']}</td>\n<br>";
 }
 echo"</center>";
 echo"</table>";
