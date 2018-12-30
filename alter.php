<?php
    $conn = mysqli_connect('localhost','root','12345678','homework');

    $id1 = mysqli_real_escape_string($conn,$_POST['id1']);
    $id = mysqli_real_escape_string($conn,$_POST['id']);
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $idCard = mysqli_real_escape_string($conn,$_POST['idCard']);
    $isFree = mysqli_real_escape_string($conn,$_POST['isFree']);
    $isHealth = mysqli_real_escape_string($conn,$_POST['isHealth']);

    if(!empty($id)){
        $query = "UPDATE sexworker SET id = '$id' WHERE id = '$id1'";
    }
    if(!empty($name)){
        $query = "UPDATE sexworker SET name = '$name' WHERE id = '$id1'";
    }
    if(!empty($idCard)){
        $query = "UPDATE sexworker SET idCard = '$idCard' WHERE id = '$id1'";
    }
    if(!empty($isFree)){
        $query = "UPDATE sexworker SET isFree = '$isFree' WHERE id = '$id1'";
    }
    if(!empty($isHealth)){
        $query = "UPDATE sexworker SET isHealth = '$isHealth' WHERE id = '$id1'";
    }
    if(mysqli_query($conn,$query)){
        echo '用户修改成功';
    }else{
        echo "用户修改失败".mysqli_error($conn);
    }

    mysqli_close($conn);
?>