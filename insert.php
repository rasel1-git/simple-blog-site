<?php 

$roll = $_POST["roll"];
$name = $_POST["name"];
$mobile = $_POST["mobile"];
$dob = $_POST["dob"];
$address = $_POST["address"];
$image = $_FILES['image']['name'];



$temp = $_FILES['image']['tmp_name'];
$target = "upload/".$image;
if(move_uploaded_file($_FILES['image']['tmp_name'], $target))
{
echo "image upload successfull </br>";
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$sql = "INSERT INTO basic (roll, name, mobile, dob, address) VALUES ('$roll', '$name', '$mobile', '$dob', '$address')";
if ($conn->query($sql) === TRUE) {
echo "New record created successfully for basic table</br>";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO image (roll, name, image) VALUES ('$roll','$name', '$image')";
if ($conn->query($sql) === TRUE){
echo "New record created successfully for basic table</br>";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
echo "<tr><td></td><td><div id='view'><a href='viewdata.php'>Show Data</a></div></td></tr>";
?>