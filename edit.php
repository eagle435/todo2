<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="edit.css">
    <title>Document</title>
</head>
<body>
    <header>
    <center>
    <form action="editnew.php?ID=<?php echo $_GET['ID']; ?>" method="post">

        <?php 
          include("connection.php");
          $listid=$_GET['ID'];
          $query="SELECT * from list where id=$listid";
          $result=mysqli_query($con,$query);
          while($row=mysqli_fetch_array($result))
{   echo "
    <input type='text' class=title placeholder='set title' name='txtnew_title' value=".$row['db_title']." required><br>
    <textarea class=text cols='50' rows='10' name='txtnew_text'>
    ".$row['db_text']."</textarea><br>
    <a href='edtinew.php?ID=".$row['id']."'><input class=submit type='submit'> </a>
    ";
}
?>
    </form>
    </center>
    </header>
</body>
</html>
