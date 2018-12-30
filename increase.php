<?php
    $conn = mysqli_connect('localhost','root','12345678','homework');

    $id = mysqli_real_escape_string($conn,$_POST['id']);
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $idCard = mysqli_real_escape_string($conn,$_POST['idCard']);
    $isFree = mysqli_real_escape_string($conn,$_POST['isFree']);
    $isHealth = mysqli_real_escape_string($conn,$_POST['isHealth']);
    $query = "INSERT INTO sexworker(id,name,idCard,isFree,isHealth) VALUES('$id','$name','$idCard','$isFree','$isHealth')";

    if(mysqli_query($conn,$query)){
        echo '用户添加成功';
    }else{
        echo "用户添加失败".mysqli_error($conn);
    }
    mysqli_close($conn);
?>
