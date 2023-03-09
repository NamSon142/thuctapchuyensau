<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>

<body>
    <?php
    session_start();
    include_once("connect.php");

    if (isset($_POST['sbm'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $sql_login = "SELECT * FROM user WHERE user_email = '$email' AND user_pass = '$pass'";
        $query = mysqli_query($connect, $sql_login);
        if (mysqli_num_rows($query) > 0) {
            $_SESSION['email'] = $email;
            $_SESSION['pass'] = $pass;

            header("location: index.php");
        } else {
            $errorrs = '<div class="alert alert-danger">Tài khoản không hợp lệ !</div>';
        }
    }
    ?>
    <h2>Đăng nhập</h2>
    <?php
    if (isset($errorrs)) {
        echo $errorrs;
    }
    ?>
    <form action="login.php" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Mật khẩu</label>
            <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" name="sbm" class="btn btn-primary">Đăng nhập</button>
    </form>
</body>

</html>