<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Inquire.css">
    <link rel="shortcut icon" href="rocken.ico" type="image/x-icon" />
    <title>Inquire</title>
</head>
<body>
    <div class="body">
        <table>
            <tr id="users">
                <th>编号</th>
                <th>姓名</th>
                <th>身份证</th>
                <th>是否空闲</th>
                <th>健康状况</th>
            </tr>
            <tr>
            <?php
                $conn = mysqli_connect("localhost","root","12345678","homework");

                $query = 'SELECT * FROM sexworker';

                $result = mysqli_query($conn,$query);

                $users = mysqli_fetch_all($result,MYSQLI_ASSOC);

                echo json_encode($users);
            ?>
            <td><?php echo $?></td>
            </tr>
        </table>
    </div>
</body>
</html>

