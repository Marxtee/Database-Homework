<?php
    $conn = mysqli_connect('localhost','root','12345678','homework');

    if(isset($_POST['id'])){
        // echo "POST:你的名字是".$_POST['name'];
        #将拿到的数据转换一下
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
    }
?>
