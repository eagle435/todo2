<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="content.css">
    <title>Document</title>
</head>
<body>
    <div class="content">

<?php
include("connection.php");
$listid=$_GET['ID'];
 $query1="SELECT * from list where id=$listid";
 $result=mysqli_query($con,$query1);
 
 while($row=mysqli_fetch_array($result))
 {
    echo"
     <tr>
     <td><h1 id=title>".$row['db_title']."</h1></a></td><br><br><br><br>
     <td><h3 id=text> ".$row['db_text']."</h3></td><br><br><br><br><br>
    <td> <h4 id=date> ".$row['db_datetime']."</h4></td>";
    
 }


 
?>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mainss.css">
    <title>Document</title>
</head>
<body>

<center>
<form method="post" action="content_return.php">
<input class=return type=submit value=return to main>
</center>
    </form>
</body>
</html>
