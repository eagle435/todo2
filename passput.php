<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="checkpass.css">
    <title>Document</title>
</head>
<body>
    <form method="post" action="passput.php?ID=<?php echo $_GET['ID']; ?>">
     <center><input type="password" class="pass" name="txtpassword" placeholder="set password"><br>
     <input type="submit"  class="submit"  value="submit"></center>
    </form>

<?php

include("connection.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $listid = $_GET['ID'];
    $password = $_POST['txtpassword'];
    $query = "UPDATE list SET db_password='$password' WHERE id=$listid";
    mysqli_query($con, $query);
    $query2="UPDATE list SET db_status=1 WHERE id=$listid";
    mysqli_query($con, $query2);
    header("location:main.php");
}
?>

</body>
</html>