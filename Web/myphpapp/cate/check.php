<?php
header("Content-Type:text/html;charset=utf-8");
session_start();
//var_dump($_SESSION['captcha_code']);

if(!empty($_POST)){
    $text = isset($_POST['captcha']) ? trim($_POST['captcha']) : "";
    //echo $text;
    if(empty($_SESSION['captcha_code'])){
        die("验证码过期，请重新登录。");
    }
    if(strtolower($text)!=strtolower($_SESSION['captcha_code'])){
        echo "<script>alert('验证码输入错误')</script>";
        header("refresh:2;url=http://localhost/captcha/check.php");
        die();
    }else{
        echo "<script>alert('验证码输入正确')</script>";
        header("refresh:2;url=http://localhost/captcha/check.php");
        die();
    }
}
require "check_html.php";
?>