<?php
header("Content-Type: text/html; charset=utf-8");
    session_start();
   // print_r($_SESSION);

//处理登陆后的显示用户名
if(isset($_SESSION['username'])){
    $longin=true;
    $userinfo=$_SESSION['username'];
}else{
    $longin=false;
    $userinfo=array();
}
//用户退出
if(isset($_GET['action'])&&$_GET['action']=="logout"){
    unset($_SESSION['username']);
    
    if(empty($_SESSION['userinfo'])){
        session_destroy();
    }
    header("location: ./user.php");
    die();
}

define("APP","users");
require "./user_html.php";


?>