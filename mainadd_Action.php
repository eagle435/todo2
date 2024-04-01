<?php
$text = $_POST['txttext'];
$title=$_POST['txttitle'];
    include("connection.php");
    $query="INSERT INTO list (db_text,db_title) values ('$text','$title')";
    mysqli_query($con,$query);
    header("location:main.php");

?>