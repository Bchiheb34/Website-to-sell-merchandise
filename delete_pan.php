<?php
include ('connexion_BDD.php'); 

$var = $_GET['id_Ar'];
$acc = "UPDATE articles SET Etat='0'  where id_Ar = '$var'";
$result_acc = mysqli_query($conn, $acc);
header( "Location: home.php" );	
?> 
