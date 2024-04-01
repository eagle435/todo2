<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST['txttext'];
    $title=$_POST['txttitle'];
    $passcode=$_POST['txtpasscode'];
    $id=$_POST['ID'];
    include("connection.php");
    $query="UPDATE list set db_status=1 where id=$id ";
    mysqli_query($con,$query);
    $query2="INSERT INTO list (db_text,db_title,db_passcode) values ('$text','$title','$passcode')";
    mysqli_query($con,$query2);
    header("location:main.php");
}
?>
