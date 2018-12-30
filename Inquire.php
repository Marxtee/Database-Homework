<?php
$conn = mysqli_connect('localhost','root','12345678','homework')
    or die('Error connecting to MySql server');
$id = $_POST['id'];
$name = $_POST['name'];
$idCard = $_POST['idCard'];
$isFree = $_POST['isFree'];
$isHealth = $_POST['isHealth'];
if(!empty($id)){
    $query = "SELECT * FROM sexworker WHERE id='$id'";
    $result = mysqli_query($conn,$query);
}
if(!empty($name)){
    $query = "SELECT * FROM sexworker WHERE name='$name'";
    $result = mysqli_query($conn,$query);
}
if(!empty($idCard)){
    $query = "SELECT * FROM sexworker WHERE idCard='$idCard'";
    $result = mysqli_query($conn,$query);
}
if(!empty($isFree)){
    $query = "SELECT * FROM sexworker WHERE isFree='$isFree'";
    $result = mysqli_query($conn,$query);
}
if(!empty($isHealth)){
    $query = "SELECT * FROM sexworker WHERE isHealth='$isHealth'";
    $result = mysqli_query($conn,$query);
}


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