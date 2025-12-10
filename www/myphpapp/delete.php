<?php
$link = mysqli_connect(hostname: "localhost",username: "root",password: "P@ssw0rd",database: "W2400230");
if( !$link ){
   echo "数据库连接失败" . mysqli_connect_error();
}

mysqli_select_db($link, "W2400230");
mysqli_set_charset($link, "utf8");
//print_r($_GET);
$id = $_GET['id'];

$sql = "delete from students where id=$id";
$res = mysqli_query($link , $sql);
if($res){
       header("location: ./list.php");
  }else{
 echo "<script>alert('用户信息删除失败');</script>";
   }



?>