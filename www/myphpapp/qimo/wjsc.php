<?php
if(!empty($_POST)){
    $number=$_POST['xuehao'];
    $name=$_POST['xingming'];

    if(isset($_FILES)){
        print_r($_FILES);
    }

    echo"<>你的学号是：" .$number;
    echo"<>你的姓名是：" .$name;

    echo"<p>上传的文件名是：".$_FILES['wjname']['name'];
    echo"<p>上传的文件类型是：".$_FILES['wjname']['type'];
    echo"<p>上传的文件大小是：".$_FILES['wjname']['size'];
    echo"<p>上传的文件结果是：".$_FILES['wjname']['error'];
    echo"<p>上传的临时文件名称：".$_FILES['wjname']['tmp_name'];

    $file_ex = substr($_FILES['wjname']['name'],strrpos($_FILES['wjname']['name'],'.') +1);


    $save = "./note/" .$number . ".".$file_ex ;

    if(move_uploaded_file($_FILES['wjname']['tmp_name'],$save)){
        echo"<p>上传文件保存位置" .$save ;
    }



}else{
    require("wjsc_html.php");
}





?>