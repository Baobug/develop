<?php
// 用户在表单中输入用户名和密码，提交到此页面进行验证，和users表中的数据进行比对，如果正确则进入网站主页

//连接mysql数据库
$link = mysqli_connect(hostname: "localhost",username: "root",password: "P@ssw0rd",database: "W2400230");
if(!$link){
    echo("连接失败".mysqli_connect_error());  
}
//选择数据库
mysqli_select_db($link,"W2400230");
mysqli_set_charset($link,"utf8");//设置编码 防止中文乱码

//判断用户名是否存在如果不存在跳转到注册页面如果密码正确跳转到主页
if(!empty($_POST)){
    $u_name=$_POST['username'];
    $u_psw=$_POST['userpassword'];

//执行SQL语句
$sql="SELECT user_id,user_password from users where user_name='$u_name'";

$row=mysqli_query($link,$sql);

if(!$row){
    //用户名不存在跳转到注册页面
    header("location: ./register.php");
    die();
}else{
    //用户名存在判断密码是否正确，正确则跳转到主页
    $u_new_psw=md5($u_psw);
    //MD5加密后的密码和数据库中的密码进行比对
    $data=mysqli_fetch_assoc($row);
   // print_r($data);

    if($u_new_psw==$data['user_password']){
        session_start();
       // $_SESSION['username']=$u_name;
 
       $_SESSION['username'] = array("id"=>$data['user_id'], "name"=>$u_name);



        header("location: ./user.php");
        die();

    }else{
        echo "<script>alert('用户名或密码错误');</script>";
    } 
    }
}

define("APP","users");
require "./login_html.php";
?>