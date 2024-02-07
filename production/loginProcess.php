<?php
include "Config.php";
error_reporting(E_ALL^E_NOTICE);

if(isset($_POST['submit'])){
    session_start();
    $username=$_POST['username'];
    $password=$_POST['password'];
    $result=mysqli_query($conn,"select * from users where username='".$username."' and password='".$password."'");
    if($row=mysqli_fetch_array($result)){
        $_SESSION['admin']=$row['id'];
        $_SESSION['name']=$row['fullname'];
        header('location:dashboard.php');
    }
    else{
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Invalid Username or Password')
        window.location.href='javascript:history.go(-1)';
        </SCRIPT>");
    }

}
?>