<?php
$lat=$_POST['latitude'];
$longi=$_POST['longitude'];
$range=$_POST['range'];
$address=$_POST['address'];

require "init.php";
if(mysqli_query($con,"INSERT INTO dangerzone(`latitude`, `longitude`, `address`, `radius`, `flag`) VALUES('$lat','$longi','$address','$range','1')"))
	echo "done";
else
	echo mysqli_error($con);
?>