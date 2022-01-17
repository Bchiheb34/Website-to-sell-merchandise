<?php
$conn = mysqli_connect('localhost','root','');
if(!$conn){
die("ne pourrait pas se relier:". mysqli_error());
}
mysqli_select_db($conn, 'produit') ;

?>