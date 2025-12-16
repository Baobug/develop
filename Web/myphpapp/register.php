<?php

//连接数据库
$link = mysqli_connect(hostname: "localhost",username: "root",password: "P@ssw0rd",database: "W2400230");
if(!$link){
    echo("连接失败".mysqli_connect_error());
}
//选择数据库
mysqli_select_db($link,"W2400230");
mysqli_set_charset($link,"utf8");//设置编码 防止中文乱码

//插入数据
$username=$_POST['username'];
$userpw=$_POST['userpw'];
$useremail=$_POST['useremail'];
$u_use_psw=md5($userpw);
//执行SQL语句
//insert into users (username,userpw,useremail) values ('$_POST[username]',md5('$_POST[userpw]'),'$_POST[useremail]')";
$sql="INSERT INTO users(user_name,user_password,user_email) VALUES('$username','$u_use_psw','$useremail')";
//echo $sql;
$res = mysqli_query($link,$sql );

if($res){
    header("location: ./login.php");
    die();
  }else{
 echo "<script>alert('用户信息添加失败');</script>"; 
}

//释放资源关闭连接
//mysqli_free_result($data);
//mysqli_close($link);

define("APP","users");

require "./register_html.php";


?>