<?php

$con=mysqli_connect("localhost","root","moeproject16db!","info_wed");

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$userInfo = $_POST['userID'];
$partner = $_POST['hasPartner'];
$hasPartner = 0;

if($partner=="YES"){
	$hasPartner = 1;
}   

$sql = "INSERT INTO guest(name,partner,updated) VALUES('$userInfo','$hasPartner',1)";

if (!mysqli_query($con,$sql))
{
    die('Error: ' . mysqli_error($con));
}

mysqli_close($con);
?>