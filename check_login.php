<?php
session_start();
require 'connection.php';

if($_SESSION['login']==null || $_SESSION['login']== ''){
    header('location:' . '../login.php');
}

$user = $_POST['user'];
$pw = md5($_POST['pw']);

    $sql = "select * from tbl_users where username = '$user' && '$pw' ";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0 ){
        $_SESSION['login'] = $user;
        header('location:'. 'index.php');
    }else{
        header('location:'. '../login.php');
    }


?>