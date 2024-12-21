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
          $sql = "DELETE FROM r35_tbl WHERE id=32";
           if(mysqli_query($conn, $sql)){
            echo "delete successfully";
        }
        else{
           echo "error";
        }
           
        ?>
</body>
</html>