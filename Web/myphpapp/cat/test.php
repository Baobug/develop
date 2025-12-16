<?php
//生成验证码
imagecreate(300, 200);//创建画布
//imagecreatetruecolor($img,220,220,220);//创建真彩色画布

//画一个矩形
$color = imagecolorallocate($img,0,255,0);//创建颜色
imagefilledrectangle($img,50,50,250,150,$color);//画一个填充的矩形

$color1 = imagecolorallocate($img,0,0,255);//创建颜色
imagestring($img,5,50,100,'Today is Wednesday',$color1);//画字符串

//输出图片
header('Content-Type:image/png');//输出头
ob_end_clean();//清除缓冲区
imagepng($img);//输出图片

?>
