<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
           include 'connection.php';    
           $sql = "UPDATE r34_tbl SET price='$815,000' where id='4' ";
           if(mysqli_query($conn, $sql)){
            echo "update successfully";
        }
        else{
           echo "error";
        }
           
        ?>
</body>
</html>