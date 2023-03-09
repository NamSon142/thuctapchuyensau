<?php
class db{
    public $connect;

    public function __destruct()
    {
        $this->connect = mysqli_connect("localhost", "root", "", "thuctapchuyensau");
        mysqli_query($this->connect, "SET NAMEs 'utf8'");  
    }
}

?>