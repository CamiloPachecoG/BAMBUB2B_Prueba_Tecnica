<?php
	include("conec.php");

  $sql="SELECT data_b2b.SKU, data_b2b.VENTAS, data_b2b.FECHA FROM data_b2b WHERE(data_b2b.FECHA BETWEEN '01-07-2019' AND '01-13-2019')";
  $data=mysqli_query($conn,$sql);
  echo $data;
?>