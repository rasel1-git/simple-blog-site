<!DOCTYPE html>
<html>
<head>
	<title>amar view</title>
	<style type="text/css">
		body{
			margin:0;
			background-color:#00BFFF;
			font-style: oblique;
		}
		.view1{
			
			text-align: center;
			color: #000;
			padding:50px;
			font-size:30px;
		}
		table{
			width: 20%;
			height: 100%;
			text-align: center;
			margin-left: 40%;
		}
.we{
	background-color: #090f;
	border:dashed;
	width: 40%;
	margin-left: 30%;
     }
	

		tr:hover {background-color:#FFA07A;}
		.foter_style{

 		color: #191970;
 		text-align: center;
		}
}
	</style>
</head>
<body>
	<div class="view1">
	<table border="0">
		<h2 style="background-color: yellow">Student Genneral information</h2>
		<p>Computer Technology
		shift:1st seseon:2017-2018</p>
		<form action="" method="POST">
serch by roll:<input type="text" name="roll" placeholder="">
<button>search</button></br>
</form>

<?php
$rollsearch = $_POST["SearchRoll"];
$conn = new mysqli("localhost", "root", "", "student");
$sql = "SELECT basic.roll,  image.image, basic.name, basic.mobile,basic.address FROM basic INNER JOIN image ON Basic.roll = image.roll where $rollsearch = Basic.roll";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
echo "<div class='we'>";
echo 'Information of ' . $row["name"].'</br>';
echo '<img src="upload/'.$row["image"].'" width="150px" height="150px"/></br>';
echo 'Name:'.$row["name"].'</br>';
echo 'Roll:'.$row["roll"].'</br>';
echo 'Mobile No:'.$row["mobile"].'</br>';
echo 'Address:'.$row["address"].'</br>';
?>
<?php
echo "</div>";
}
?>
	</table>
</div>
<div class="foter_style">
      <h2>Copyright © 2019 Rasel Hasan | All Rights Reserved |</h2>
</div>
</body>
</html>