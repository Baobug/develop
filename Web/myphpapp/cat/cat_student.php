<?php
// $img = imagecreatefrompng("/var/www/myphpapp/cat/tb.png");

// //画一个矩形
// $color = imagecolorallocate($img,0,0,0);//创建颜色
// imagefilledrectangle($img,100,50,500,420,$color);//画一个填充的矩形

// $color1 = imagecolorallocate($img,0,0,0);//创建颜色
// //imagestring($img,5,50,100,'Today is Wednesday',$color1);//画字符串
// imagefttext($img,30,0,150,200,$color1,'./msyh.ttf','学号：W2400230');
// imagefttext($img,30,0,150,200,$color1,'./msyh.ttf','姓名：周天宝');
// imagefttext($img,30,0,150,200,$color1,'./msyh.ttf','邮箱：123@qq.com');
// imagefttext($img,30,0,150,200,$color1,'./msyh.ttf','专业：信息安全');


// //输出图片
// header('Content-Type:image/png');//输出头
// ob_end_clean();//清除缓冲区
// imagepng($img);//输出图片



// 关闭错误输出（生产环境建议日志记录）
error_reporting(E_ALL);
ini_set('display_errors', 0);

// 1. 定义路径（建议使用绝对路径）
$pngPath = "/var/www/myphpapp/cat/bg.png";
$fontPath = "/var/www/myphpapp/msyh.ttf"; // 替换为字体文件实际绝对路径

// 2. 检查图片文件是否存在
if (!file_exists($pngPath)) {
    header('HTTP/1.1 500 Internal Server Error');
    exit("图片文件不存在：$pngPath");
}

// 3. 创建图片资源（修正拼写错误）
$img = imagecreatefrompng($pngPath);
if (!$img) {
    header('HTTP/1.1 500 Internal Server Error');
    exit("无法创建图片资源：$pngPath");
}

// 4. 定义颜色（黑色）
$black = imagecolorallocate($img, 0, 0, 0);
if (!$black) {
    imagedestroy($img);
    header('HTTP/1.1 500 Internal Server Error');
    exit("无法分配颜色");
}

// 5. 绘制黑色填充矩形
imagefilledrectangle($img, 100, 50, 500, 420, $black);

// 6. 检查字体文件是否存在
if (!file_exists($fontPath)) {
    imagedestroy($img);
    header('HTTP/1.1 500 Internal Server Error');
    exit("字体文件不存在：$fontPath");
}

// 7. 绘制文字（调整Y坐标避免重叠，每行间隔50px）
$fontSize = 30;   // 字体大小
$angle = 0;       // 旋转角度
$x = 150;         // X坐标
$baseY = 200;     // 基础Y坐标

// 学号
imagefttext($img, $fontSize, $angle, $x, $baseY, $black, $fontPath, '学号：W2400230');
// 姓名（Y坐标+50）
imagefttext($img, $fontSize, $angle, $x, $baseY + 50, $black, $fontPath, '姓名：周天宝');
// 邮箱（Y坐标+100）
imagefttext($img, $fontSize, $angle, $x, $baseY + 100, $black, $fontPath, '邮箱：123@qq.com');
// 专业（Y坐标+150）
imagefttext($img, $fontSize, $angle, $x, $baseY + 150, $black, $fontPath, '专业：信息安全');

// 8. 输出图片（处理缓冲区）
if (ob_get_length()) {
    ob_end_clean(); // 仅当有缓冲区内容时清理
}
header('Content-Type: image/png');
header('Cache-Control: no-cache, no-store, must-revalidate'); // 防止缓存
imagepng($img);

// 9. 释放资源
imagedestroy($img);
exit;
?>

