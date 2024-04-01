<?php
$newtitle = $_POST['txtnew_title'];
$newtext = $_POST['txtnew_text'];
$listid = $_GET['ID']; // get the ID from the URL
include("connection.php");
$query2 = "UPDATE list SET db_text = '$newtext', db_title = '$newtitle' WHERE id = $listid";
mysqli_query($con, $query2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="editnew.css">
    <title>Document</title>
</head>
<body>
    <form method="post" action="endedit.php">
        <input class="save" type="submit" value="save">
    </form>
</body>
</html>