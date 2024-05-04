<?php
$image = $_FILES['image']['name'];
echo $image."<br>";
$size = $_FILES['image']['size'];
echo $size."<br>";
$type = $_FILES['image']['type'];
echo $type."<br>";
$temp = $_FILES['image']['tmp_name'];
echo $temp."<br>";
$target = "upload/".$image;
echo $target;
if (move_uploaded_file($_FILES['image']['tmp_name'].$target)) {
echo "image upload successfull";
}
?>