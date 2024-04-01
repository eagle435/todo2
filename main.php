    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <title>Document</title>
    </head>
    <body>
        <header>
        <form action="mainadd.html" method="post">
        <center> <h1>TO DO LIST</h1></center>
        <button ><span class="material-symbols-outlined">add</span></button>
        </form>
    
    <center>
    <div class="output">
        <table align="center">
        <?php
       
        include("connection.php");
        $query="SELECT * from list where db_status=0 order by id desc";
        $result=mysqli_query($con,$query);
        while($row=mysqli_fetch_array($result))
        {
           echo"
            <tr>
            <td><a href=content.php?ID=".$row['id']."><h1 id=title>".$row['db_title']."</h1></a></td>
            <td><button id=delete><a href=delete.php?ID=".$row['id']."><span class=material-symbols-outlined>delete</span></a></button></td>  
            <td><button id=edit><a href=edit.php?ID=".$row['id']."><span class=material-symbols-outlined>edit_square</span></a></button></td>           
            <td><div id=addpass><a href=passput.php?ID=".$row['id']."><span class=material-symbols-outlined>no_encryption</span></a></div></td>
            <td><h1 id=date>".$row['db_datetime']."</h1></td></tr>
            ";
           
        }
      
        include("connection.php");
        $query="SELECT * from list where db_status=1 order by id desc";
        $result=mysqli_query($con,$query);
        while($row=mysqli_fetch_array($result))
        {
            echo"
            <tr>
            <td><a href=checkpassword.php?ID=".$row['id']."><h1 id=title>".$row['db_title']."</h1></a></td>
            <td><button id=delete><a href=checkpassdelete.php?ID=".$row['id']."><span class=material-symbols-outlined>delete</span></a></button></td>  
            <td><button id=edit><a href=checkpassedit.php?ID=".$row['id']."><span class=material-symbols-outlined>edit_square</span></a></button></td>           
            <td><div id=addpass><a href=passremove.php?ID=".$row['id']."><span class=material-symbols-outlined>lock</span></a></div></td>
            <td><h1 id=date>".$row['db_datetime']."</h1></td></tr>
            ";
        }
        ?>
      
        </table>
</div>
    </center>


        </header>
</body>
</html>