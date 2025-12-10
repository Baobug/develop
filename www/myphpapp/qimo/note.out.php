<?php
header("Content-type:text/html;charset=utf-8");
date_default_timezone_set("Asia/Shanghai");
$path="./note/";
if(!file_exists($path)){
    mkdir($path,0777,true);
}
$dr=opendir($path);

while($filen=readdir($dr)){ 
    if($filen!="." and $filen!=".."){
        $fs=fopen($path.$filen,"r");
        echo"<pre>";
        echo"<b>标题：</b>".fgets($fs)."<br>";
        echo"<b>作者：</b>".fgets($fs)."<br>";
        echo"<b>内容：</b>";

        echo "<p>".fread($fs,filesize($path.$filen))."</p>";
        echo"</pre>";
        echo"<hr>";
        fclose($fs);

    }
}
closedir($dr);

echo"<a href='note.in.php'>返回留言界面</a>";



?>