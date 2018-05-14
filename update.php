<?php

$con=mysqli_connect("http://mysql.logistics.lol","root","moeproject16db!","info_wed");

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$username = $_POST['userID'];
$partner = $_POST['partner'];   

$sql = "UPDATE 'guest' SET 'partner' = '$partner' WHERE 'name' = '$username'";

if (!mysqli_query($con,$sql))
{
    die('Error: ' . mysqli_error($con));
}

mysqli_close($con);
?>