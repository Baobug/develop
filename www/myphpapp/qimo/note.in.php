<?php
header("Content-type:text/html;charset=utf-8");
date_default_timezone_set("Asia/Shanghai");
$path="./note/";
if(!file_exists($path)){
    mkdir($path,0777,true);
}
$filname = "note".date("YmdHis").".txt";

if(!empty($_POST)){
    $fp=fopen($path.$filname,"w");
    fwrite($fp,$_POST['title']."\r\n");
    fwrite($fp,$_POST['author']."\r\n");
    fwrite($fp,$_POST['content']."\r\n");
    fclose($fp);
    header("Location:note.out.php");

}
require("notepad.html");



?>