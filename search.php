<!DOCTYPE html>
<!--
<html>
<head>
	<title>amar view</title>
	<style type="text/css">
		body{
			margin:0;
			background-color:#00BFFF;
		}
		.view1{
			
			text-align: center;
			color: #0000CD;
			padding:50px;
			font-size:30px;
		}
		table{
			width: 100%;
			height: 100%
		}
		tr:hover {background-color:#FFA07A;}
	</style>
</head>
<body>
	<div class="view1">
	<table border="1">
		<h2 style="background-color: yellow">Student Genneral information</h2>
		<p>Computer Technology
		shift:1st seseon:2017-2018</p>
		<form>
serch by roll:<input type="text" name="roll" placeholder="">
<button>search</button>
</form>
		<tr><th>Id</th><th>Roll</th><th>Name</th><th>Image</th></tr>
<?php
$rollsearch = $_POST["SearchRoll"];
$conn = new mysqli("localhost", "root", "", "student");
$sql = "SELECT basic.id, basic.roll, basic.name, image.image FROM basic INNER JOIN image ON Basic.roll = image.roll where $rollsearch = Basic.roll";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
echo '<tr><td>'.$row["id"].'</td>';
echo '<td>'.$row["roll"].'</td>';
echo '<td>'.$row["name"].'</td>';
echo '<td><img src="upload/'.$row["image"].'" width="200" height="100"/></td></tr>';
?>
<?php
echo "</br>";
}
?>
	</table>
</div>

</body>
</html>
-->