<?php
    $conn = mysqli_connect('localhost','root','12345678','homework');

    $id = mysqli_real_escape_string($conn,$_POST['id']);
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $idCard = mysqli_real_escape_string($conn,$_POST['idCard']);
    // $query = "DELETE FROM sexworker WHERE ;
    if(!empty($id)){
        $query = "DELETE FROM sexworker WHERE id = '$id'";
    }
    if(!empty($name)){
        $query = "DELETE FROM sexworker WHERE name = '$name'";
    }
    if(!empty($idCard)){
        $query = "DELETE FROM sexworker WHERE idCard = '$idCard'";
    }
    if(mysqli_query($conn,$query)){
        echo '用户删除成功';
    }else{
        echo "用户删除失败".mysqli_error($conn);
    }
    mysqli_close($conn);
?>