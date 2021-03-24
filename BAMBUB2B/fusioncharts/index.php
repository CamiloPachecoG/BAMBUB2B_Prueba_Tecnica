	<?php 
		include("fusioncharts-wrapper/fusioncharts.php");
	?>

<html>
<head>
	<script type="text/javascript" src="js/fusioncharts.js"></script>
	
	<script type="text/javascript" src="js/themes/fusioncharts.theme.fusion.js"></script>
	<title>Grafico</title>
</head>
<body>
	<?php
				// Chart Configuration stored in Associative Array
		$arrChartConfig = array(
		    "chart" => array(
		        "caption" => "Ventas por dia de diferentes cadenas (CENCOSUD)",
		        "subCaption" => "Periodo 01-07-2019 a 01-13-2019",
		        "xAxisName" => "Dias",
		        "yAxisName" => "Ventas",
		        "numberSuffix" => "$",
		        "theme" => "fusion"
		    ),
		    "dataset"=>array(
		    	"seriesname" =>"CENCOSUD",
		    	"showPlotBorder"=>"1",
		    	"drawFullAreaBorder"=> "0",
          "plotBorderThickness"=> "3",
		    )
		);
		// JSON Encode the data to retrieve the string containing the JSON representation of the data in the array.
		$jsonEncodedData = json_encode($arrChartConfig);
		// An array of hash objects which stores data
    $arrChartData = array(
		["01-07-2019", "20003"],
		["01-08-2019", "50248"],
		["01-09-2019", "9167"],
		);
		$arrLabelValueData = array();
		    // Pushing labels and values
		    for($i = 0; $i < count($arrChartData); $i++) {
		        array_push($arrLabelValueData, array(
		"label" => $arrChartData[$i][0], "value" => $arrChartData[$i][1]
		));
		}
		$arrChartConfig["data"] = $arrLabelValueData;
		// JSON Encode the data to retrieve the string containing the JSON representation of the data in the array.
		$jsonEncodedData = json_encode($arrChartConfig);
		// chart object
		$Chart = new FusionCharts("column2d", "MyFirstChart" , "700", "400", "chart-container", "json", $jsonEncodedData);
		// Render the chart
		$Chart->render();
	?>
	<center>
		<div id="chart-container">Chart will render here!</div>
	</center>
</body>
</html>