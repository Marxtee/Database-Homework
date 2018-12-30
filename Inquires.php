<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/Inquire.css">
    <link rel="shortcut icon" href="./image/rocken.ico" type="image/x-icon" />
    <title>Inquire</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" class="main">
        <?php
        $conn = mysqli_connect('localhost','root','12345678','homework')
            or die('Error connecting to MySql server');
        $query = "SELECT * FROM sexworker";
        $result = mysqli_query($conn,$query);

        while($row = mysqli_fetch_array($result)){
            echo '<input id="check" type="checkbox" value="'.$row['id'].'" name="todelete[]"/>';
            echo '<input disabled="disabled" type="text" value="'.$row['id'].'"/>';
            echo '<input id="name" disabled="disabled" type="text" value="'.$row['name'].'"/>';
            echo '<input disabled="disabled" id="idCard" type="text" value="'.$row['idCard'].'"/>';
            echo '<input disabled="disabled" type="text" value="'.$row['isFree'].'"/>';
            echo '<input disabled="disabled" type="text" value="'.$row['isHealth'].'"/>';
            echo '<br/>';
        }
        mysqli_close($conn);
        ?>
    </form>
</body>
</html>