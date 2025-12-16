<?php
//连接数据库
$link = mysqli_connect(hostname: "localhost",username: "root",password: "P@ssw0rd",database: "W2400230");
if($link){
    echo("连接成功");
}else{
    echo("连接失败".mysqli_connect_error());
}
//选择数据库
mysqli_select_db($link,"W2400230");
mysqli_set_charset($link,"utf8");
//执行SQL语句

//表单提交数据，使用预定义变量接收处理$_POST
if(!empty($_POST)){
    $felid=$_POST['felid'];
    $keyword=$_POST['keyword'];
    $where=" where $felid like '%$keyword%'";
}

//执行SQL语句
//$sql="select * from students where $felid like '%$keyword%'";
$sql="select * from students $where";
$data=mysqli_query($link,$sql);
//处理结果
$student=array();
while($row=mysqli_fetch_array($data)){
    $student[]=$row;
}
//释放资源关闭连接
mysqli_free_result($data);
mysqli_close($link);

define("APP","students");


require "./list_html.php";
?>