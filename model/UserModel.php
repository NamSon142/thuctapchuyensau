<?php

class UserModel{

    public function getAllUser(){
        $connect = mysqli_connect("localhost", "root", "", "thuctapchuyensau");
        mysqli_query($connect, "SET NAMEs 'utf8'");

        $sql = "SELECT * FROM user ORDER BY user_id DESC";
        $query = mysqli_query($connect, $sql);
        $rows = array();
        while($row = mysqli_fetch_array($query)){
            $rows[] = $row;
        }
        return $rows;
    }

    public function addUser($rows){
        $connect = mysqli_connect("localhost", "root", "", "thuctapchuyensau");
        mysqli_query($connect, "SET NAMEs 'utf8'");

        $sql = "INSERT INTO user (username, user_email, user_pass, user_level) VALUE ('".$rows['username']."', '".$rows['user_email']."', '".$rows['user_pass']."', '".$rows['user_level']."')";
        // echo $sql;
        mysqli_query($connect, $sql);
    }

    public function getUserById($id){
        $connect = mysqli_connect("localhost", "root", "", "thuctapchuyensau");
        mysqli_query($connect, "SET NAMEs 'utf8'");

        $sql = "SELECT * FROM user WHERE user_id = '$id'";
        $query = mysqli_query($connect, $sql);
        return $query;
    }

    public function editUser(){

    }

    // public function delUser($id){
    //     $connect = mysqli_connect("localhost", "root", "", "thuctapchuyensau");
    //     mysqli_query($connect, "SET NAMEs 'utf8'");
    //     $sql = "DELETE FROM user WHERE user_id = '$id'";
    //     mysqli_query($connect, $sql);
    // }
}
