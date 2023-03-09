<?php
// include_once("../connect.php");
// if(isset($_POST['sbm'])){
//     $user_email = $_POST['user_email'];
//     $user_pass = $_POST['user_pass'];
//     $username = $_POST['username'];
//     $user_level = $_POST['user_level'];

//     $sql = "INSERT INTO user (username, user_email, user_pass, user_level) VALUE ('$username', '$user_email', '$user_pass', '$user_level')";
//     mysqli_query($connect, $sql);
//     header("location: listuser.php");
// }
?>

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
    <div class="container">
        <div class="row">
            <form action="?layout=adduser" class="row g-3" method="POST">
                <div class="row">
                    <div class="col-md-4">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" name="user_email" class="form-control" id="inputEmail4" require>
                    </div>
                    <div class="col-md-4">
                        <label for="inputPassword4" class="form-label">Mat khau</label>
                        <input type="password" name="user_pass" class="form-control" id="inputPassword4" require>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <label for="" class="form-label">Ho ten</label>
                        <input type="text" name="username" class="form-control" id="" placeholder="" require>
                    </div>
                    <div class="col-md-4">
                        <label for="" class="form-label">Cap bac</label>
                        <select id="" name="user_level" class="form-select">
                            <option selected value="1">Admin</option>
                            <option value="0">Member</option>
                        </select>
                    </div>
                </div>

                <div class="col-12">
                    <button type="submit" name="sbm" class="btn btn-primary">Them moi</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>