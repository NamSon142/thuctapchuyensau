<?php
include_once("model/UserModel.php");

class UserController
{
    public function getAllUser()
    {
        $usermodel = new UserModel();
        $rows = $usermodel->getAllUser();
        // print_r($rows);
        include_once("view/listuser.php");
    }

    public function getUserById($id)
    {
    }

    public function addUser()
    {
        $usermodel = new UserModel();
        include_once("view/adduser.php");
        if (isset($_POST['sbm'])) {
            $user_email = $_POST['user_email'];
            $user_pass = $_POST['user_pass'];
            $username = $_POST['username'];
            $user_level = $_POST['user_level'];

            // echo $user_email."<br/>".$user_pass."<br/>".$username."<br/>".$user_level;

            $rows = array(
                'username' => $username,
                'user_email' => $user_email,
                'user_pass' => $user_pass,
                'user_level' => $user_level,
            );
            $rows = $usermodel->addUser($rows);
            header("location: index.php");
        }
    }

    public function editUser()
    {
    }

    // public function deleteUser($id)
    // {
    //     $usermodel = new UserModel();
    //     $delete = $usermodel->delUser($id);
    //     if($delete){
    //         header("location: index.php");
    //     }
    // }
}
