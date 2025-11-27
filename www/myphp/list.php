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
$sql="SELECT * FROM students";
$data=mysqli_query($link,$sql);

//处理结果
while($row = mysqli_fetch_assoc($data)){
    $student[]=$row;

}
/*
//显示操作结果
foreach($student as $key=>$value){
    print_r($value);
    echo"<br>";
}
*/
//释放资源关闭连接
mysqli_free_result($data);
mysqli_close($link);


//文件包含语句P48
require "./list_html.php";

?>

