<?php

$servername="localhost";
$username="root";
$password="";
$dbname="base2";



               
$connect= new mysqli($servername,$username,$password,$dbname);



if(!$connect)
	die("Problème de connexion");
//else
	//echo "Connexion établie avec succès";



?>

