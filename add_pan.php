<?php
include ('connexion_BDD.php'); 

$var = $_GET['id_Ar'];
$acc = "UPDATE articles SET Etat='1'  where id_Ar = '$var'";
$result_acc = mysqli_query($conn, $acc);

$choix = $_POST['choisi'];
		echo $choix;
		$sql = "UPDATE articles SET Quant='$choix'  where id_Ar = '$var'";
		$result = mysqli_query($conn, $sql);
header( "Location: home.php" );	
?> 
