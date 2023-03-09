<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <h2>Danh sach nguoi dung</h2>
    <a class="btn btn-primary" href="?layout=adduser">Them moi</a>
    <?php
        
    ?>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên</th>
                <th scope="col">Email</th>
                <th scope="col">Cấp bậc</th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // $sql = "SELECT * FROM user ORDER BY user_id DESC";
                // $query = mysqli_query($connect, $sql);
                // while($row = mysqli_fetch_array($query)){
                foreach($rows as $row):
            ?>
            <tr>
                <th scope="row"><?=$row['user_id'] ?></th>
                <td><?=$row['username'] ?></td>
                <td><?=$row['user_email'] ?></td>
                <td><?=$row['user_level'] ?></td>
                <td>
                    <a class="btn btn-primary" href="">Sửa</a>
                    <a class="btn btn-danger" href="deluser&user_id=<?=$row['user_id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xoá ?')">Xoá</a>
                </td>
            </tr>
            <?php
                // }
                endforeach;
            ?>
        </tbody>
    </table>
    <a class="btn btn-danger" href="logout.php">Đăng xuất</a>
</body>

</html>