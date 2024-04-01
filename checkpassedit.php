<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="checkpass.css">
    <title>Document</title>
</head>
<body>
    
<form method='post' action='checkpassedit.php?ID=<?php echo $_GET['ID']; ?>'>
<center><input type='password'  class="pass"   name='txtpassword' placeholder='Enter password'><br>
<input type='submit'  class="submit"  value='Access'>  </center> 
</form>  

<?php
include("connection.php");
$listid = $_GET['ID'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST['txtpassword'];
    $query = "SELECT db_password FROM list WHERE id=$listid";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
    if ($password == $row['db_password']) {
        header("Location:edit.php?ID=".$listid);
    } else {
        echo " <div class=error>Incorrect password </div>";    }
}
?>

</body>
</html>
