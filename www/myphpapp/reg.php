<?php
$link = mysqli_connect(hostname: "localhost",username: "root",password: "P@ssw0rd",database: "W2400230");
if( !$link ){
   echo "数据库连接失败" . mysqli_connect_error();
}
mysqli_select_db($link, "W2400230");
mysqli_set_charset($link, "utf8");

if(!empty($_POST)){
//print_r($_POST);

$u_name = $_POST['u_name'];
$u_psw = $_POST['u_psw'];
$u_email = $_POST['u_email'];      
$u_new_psw = md5($u_psw);

$sql = "insert into users (u_name,u_psw,u_email) values 
('$u_name','$u_new_psw','$u_email')";
$res = mysqli_query($link,$sql );

if($res){
   header("location: ./login.php");
 //echo "<script>alert('用户信息添加成功');</script>";
 die();
  }else{
 echo "<script>alert('用户信息失败');</script>";
   }

}

define("APP","students");
require "./register_html.php";
?>