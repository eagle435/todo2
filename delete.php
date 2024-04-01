<?php
include("connection.php");
$listid=$_GET['ID'];
$query=" DELETE FROM list where id=$listid ";
mysqli_query($con,$query);
header("location:main.php");
?>