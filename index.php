<?php 
session_start();
include_once("controller/UserController.php");


if(isset($_SESSION['email']) && isset($_SESSION['pass'])){
    $usercontroller = new UserController();
    if(isset($_GET['layout'])){
        $layout = $_GET['layout'];
        switch($layout){
            case 'adduser':
                $usercontroller->addUser();
                break;
            case 'edituser':
                $usercontroller->editUser();
                break;
        }
    }else{
        $usercontroller->getAllUser();
    }
}else{
    include_once("login.php");
}
