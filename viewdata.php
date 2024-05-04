
<!DOCTYPE html>
<html>
<head>
	<title>amar view</title>
	<style type="text/css">
		body{
			margin:0;
			background-color: #ffe6e6

		}
		.view1{
			
			text-align: center;
			color:#330000;
			padding:50px;
			font-size:30px;
		}
		table{
			width: 70px;
			height: 60px;
			
		}
		tr:hover {background-color:#ff00ff;}
	</style>
</head>
<body>
	<div class="view1">
	<table border="solid">
		<h2 style="background-color: yellow">Student Genneral information</h2>
		<h4>Naogaon Polytechnic Institute</h4><p>Computer Technology
		shift:1st seseon:2017-2018</p>

		<form action="mrsearch.php" method="POST">
serch by roll:<input type="text" name="SearchRoll" placeholder="search hear">
<button>search</button>
</form><tr><th>Id</th><th>Roll</th><th>Name</th><th>Image</th></tr>
<?php
$conn = new mysqli("localhost", "root", "", "student");
$sql = "SELECT basic.roll, basic.name, image.image FROM basic INNER JOIN image ON Basic.roll = image.roll";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
echo '<td>'.$row["roll"].'</td>';
echo '<td>'.$row["name"].'</td>';
echo '<td><img src="upload/'.$row["image"].'" width="500px"/></td></tr>';
?>
<?php
echo "</br>";
}
?>
	</table>
</div>

</body>
</html>