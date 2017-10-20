<!DOCTYPE html>
<html>
<head>
	<title>AmbiLamp</title>
	<link rel="stylesheet" type="text/css" href="assets/css/details.css">
</head>
<body>

<?php
  include "header.php";
?>

<!-- Buttons and Canvases -->
<input type="button" id="temp-btn" class="btn" value="View Temperature Chart" onclick="drawTemp()">
<canvas id="temp-chart-long" class="chart" width="900" height="350" hidden></canvas>
<input type="button" id="sound-btn" class="btn" value="View Sound Chart" onclick="drawSound()">
<canvas id="sound-chart-long" class="chart" width="900" height="350" hidden></canvas>

<!-- Tables -->
<div id="tables-container">
	<div class="table">
		<table id="temp-table" style="float: left" class="table">
			<tr>
			    <th>Time</th>
			    <th>Temperature</th> 
			    <th>Deviation from Average</th>
			</tr>
			<tr>
			    <td>i</td>
			    <td>am</td> 
			    <td>a</td>
			</tr>
			<tr>
			    <td>table</td>
			    <td>for</td> 
			    <td>demonstration</td>
			<tr>
			    <td>i</td>
			    <td>am</td> 
			    <td>a</td>
			</tr>
			<tr>
			    <td>table</td>
			    <td>for</td> 
			    <td>demonstration</td>
			</tr>
			<tr>
			    <td>i</td>
			    <td>am</td> 
			    <td>a</td>
			</tr>
			<tr>
			    <td>table</td>
			    <td>for</td> 
			    <td>demonstration</td>
			</tr>
			<tr>
			    <td>i</td>
			    <td>am</td> 
			    <td>a</td>
			</tr>
			<tr>
			    <td>table</td>
			    <td>for</td> 
			    <td>demonstration</td>
			</tr>
		</table>
	</div>
	<div class="table">
		<table id="sound-table" style="float: left" class="table">
			<tr>
			    <th>Time</th>
			    <th>Amplitude</th> 
			    <th>Deviation from Average</th>
			</tr>
			<tr>
			    <td>i</td>
			    <td>am</td> 
			    <td>a</td>
			</tr>
			<tr>
			    <td>table</td>
			    <td>for</td> 
			    <td>demonstration</td>
			</tr>
			<tr>
			    <td>i</td>
			    <td>am</td> 
			    <td>a</td>
			</tr>
			<tr>
			    <td>table</td>
			    <td>for</td> 
			    <td>demonstration</td>
			</tr>
			<tr>
			    <td>i</td>
			    <td>am</td> 
			    <td>a</td>
			</tr>
			<tr>
			    <td>table</td>
			    <td>for</td> 
			    <td>demonstration</td>
			</tr>
			<tr>
			    <td>i</td>
			    <td>am</td> 
			    <td>a</td>
			</tr>
			<tr>
			    <td>table</td>
			    <td>for</td> 
			    <td>demonstration</td>
			</tr>
		</table>
	</div>
</div>


<script type="text/javascript" src="assets/js/details.js"></script>

</body>
</html>
