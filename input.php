<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Data Input</title>
 <style type="text/css">
 	body{
 		background-image:url("images/login.jpg");
		 background-repeat: no-repeat;
    background-size: cover;
 	}
 	
 	.input{
 		margin: auto;
 		margin-top: 5%;
 		margin-left:30%;
 		margin-right: 30%; 
 		width: 50%
 		border:3px;
 		border-radius: 20px;
 		padding: 10px;
 		

 	}
 	.header{
 		margin-left:20%;
 		margin-right: 20%; 
 		border:3px solid #FF69B4;
 		text-align: center;
 		color: #E6E6FA;
 		background-color:#800000;
 	}
 	.save-btn{
 		border-radius: 20%;
 	}
 	
 	.foter_style{
 		color: #fff;
 		text-align: center;
 	}

 </style>
</head>
<body>
<div class="header">
<h2>Students Basic Information</h2>
</div>
<div class="input">
<table>
	
<form action="insert.php" method="POST" enctype="multipart/form-data">
<tr><td>Roll:</td><td><input type="text" name="roll" placeholder="Enter Your Roll"></td></tr>
<tr><td>Name:</td><td><input type="text" name="name" placeholder="Enter Your Name"></td></tr>
<tr><td>Mobile:</td><td><input type="text" name="mobile" placeholder="Enter Your Mobile"></td></tr>
<tr><td>Date of Birth:</td><td><input type="date" name="dob" style="width: 156px"></td></tr>
<tr><td>address:</td><td><input type="text" name="address" placeholder="Enter Your Address"></td></tr>
<tr><td>Upload photo:</td><td><input type="file" name="image"></td></tr>
<div class="save-btn">
<tr><td></td><td><input type="submit" name="" value="save"></td></tr>
</div>
</form>
</table>
</div>
<div class="foter_style">
      <h2>Copyright © 2019 Rasel Hasan | All Rights Reserved |</h2>
</div>
</body>
</html>