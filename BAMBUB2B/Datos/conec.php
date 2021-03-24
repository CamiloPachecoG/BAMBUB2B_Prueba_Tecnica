<?php
	$servername='localhost';
  $db='bambub2b';
  $username='root';
  $password='';

  $conn=mysqli_connect($servername,$username,$password,$db);
  if(!$conn){
      die("Fallo la conexion: ".mysqli_connect_error());
  }
?>

