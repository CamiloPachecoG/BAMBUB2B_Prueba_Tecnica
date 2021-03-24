<?php
    include_once 'Datos/conec.php';
    $i=0;
    $sql = "SELECT data_b2b.SKU, SUM( CASE WHEN data_b2b.FECHA='01-07-2019' THEN data_b2b.VENTAS ELSE NULL END ) AS '01-07-2019', SUM( CASE WHEN data_b2b.FECHA='01-08-2019' THEN data_b2b.VENTAS_B2B ELSE NULL END )AS '01-08-2019', SUM( CASE WHEN data_b2b.FECHA='01-09-2019' THEN data_b2b.VENTAS_B2B ELSE NULL END )AS '01-09-2019' FROM data_b2b WHERE (data_b2b.FECHA BETWEEN '01-07-2019' AND '01-13-2019') GROUP BY data_b2b.SKU";
    $sql2 = "SELECT data_b2b.FECHA FROM data_b2b WHERE(data_b2b.FECHA BETWEEN '01-07-2019' AND '01-13-2019') GROUP BY data_b2b.FECHA";
    #$sql2 = "SELECT data_b2b.SKU FROM data_b2b WHERE(data_b2b.FECHA BETWEEN '01-07-2019' AND '01-13-2019') GROUP BY data_b2b.SKU";
    $sql3 = "SELECT SUM(data_b2b.VENTAS) as VENTAS, data_b2b.FECHA FROM data_b2b WHERE(data_b2b.FECHA BETWEEN '01-07-2019' AND '01-13-2019') GROUP BY data_b2b.FECHA";
    
  	$data = mysqli_query($conn,$sql);
  	$data2 = mysqli_query($conn,$sql2);
  	$data3 = mysqli_query($conn,$sql3);
  	
?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Tabla</title>
    <!-- Step 1 - Include the fusioncharts core library -->
    <script type="text/javascript" src="path/to/local/fusioncharts.js"></script>
    <!-- Step 2 - Include the fusion theme -->
    <script type="text/javascript" src="path/to/local/themes/fusioncharts.theme.fusion.js"></script>
</head>
<body>
   <table>
   	<thead>
   		<th>Producto</th>
   		<?php 
   			while($head=mysqli_fetch_array($data2)){
   				echo "<th>".$head['FECHA']."</th>";
   			}
   		?>
   		</thead>
   		<tbody>
   			<?php
   				while($dat=mysqli_fetch_array($data)){
	   				echo "<tr>";
	   				echo '<td class="pro">Producto '. $dat['SKU'].'</td>';
	   				if($dat['01-07-2019']==NULL){
	   					echo "<td>0</td>"	;
	   				}else{
	   					echo "<td>".$dat['01-07-2019']."</td>";
	   				}
	   				if($dat['01-08-2019']==NULL){
	   					echo "<td>0</td>"	;
	   				}else{
							echo "<td>".$dat['01-08-2019']."</td>";
						}
						if($dat['01-09-2019']==NULL){
	   					echo "<td>0</td>"	;
	   				}else{
	   					echo "<td>".$dat['01-09-2019']."</td>";
	   				}
	   				echo "</tr>";
   				}
   		?>
   		<tr> 
   			<td class="fin">Total:</td>
   			<?php
   				while($total=mysqli_fetch_array($data3)){
   					echo '<td class="fin">'.$total['VENTAS'].'</td>';
   				}
   			?>
   		</tr>
   	</tbody>
   </table>    
</body>
</html>
