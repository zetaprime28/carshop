
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
           $sql = "insert into cars_tbl(img, price, carname, year)
                    values('2010_nissan_gt-r-premium_img_7762-36568.jpg','$175,000','2010_Nissan_gtr','set in 2010.')";   
            if(mysqli_query($conn, $sql)){
                 echo "new record created successfully";
             }
             else{
                echo "error";
             }
           
        ?>

        
</body>
</html>