<?php
$user_id = $_GET['user_id'];
session_start();
include_once("connect.php");
if(isset($_SESSION['email']) && isset($_SESSION['pass'])){
    mysqli_query($connect, "DELETE FROM user WHERE user_id = '$user_id'");
    header("location: index.php");
}
?>