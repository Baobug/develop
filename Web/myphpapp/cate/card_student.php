<?php
// $img = imagecreatefrompng("./bg.png");

// imagecolorallocate($img, 220 , 220 , 220 );

// $color = imagecolorallocate($img, 0, 255 , 0);
// imagerectangle($img,50,50,850,550,$color);

// $font = "C:\Windows\Fonts\STXINWEI.TTF";
// $color1 = imagecolorallocate($img, 0,0,255);
// imagefttext($img, 36,0,120,190,$color1,$font,"学号：W2400230");
// imagefttext($img, 36,0,120,250,$color1,$font,"姓名：周天宝");
// imagefttext($img, 36,0,120,310,$color1,$font,"邮箱：123@qq.com");
// imagefttext($img, 36,0,120,370,$color1,$font,"专业：信息安全");

// header("content-type:image/png");
// ob_end_clean();
// imagepng($img);





// 1. 加载背景图（确保bg.png存在于当前目录）
$img = imagecreatefrompng("./bg.png");
if (!$img) {
    // 若bg.png不存在，创建白色背景画布
    $img = imagecreatetruecolor(900, 600);
    $bgColor = imagecolorallocate($img, 255, 255, 255);
    imagefill($img, 0, 0, $bgColor);
}

// 2. 绘制绿色边框
$borderColor = imagecolorallocate($img, 0, 255, 0);
imagerectangle($img, 50, 50, 850, 550, $borderColor);

// 3. 处理字体（Ubuntu需安装中文字体，例如"Noto Sans SC"）
// 先在Ubuntu安装字体：sudo apt install fonts-noto-cjk
$font = "/usr/share/fonts/opentype/noto/NotoSansCJK-Regular.ttc"; // 字体绝对路径
if (!file_exists($font)) {
    die("字体文件不存在，请先安装Noto Sans SC字体");
}

// 4. 绘制文字（蓝色）
$textColor = imagecolorallocate($img, 0, 0, 255);
imagefttext($img, 36, 0, 120, 190, $textColor, $font, "学号：W2400230");
imagefttext($img, 36, 0, 120, 250, $textColor, $font, "姓名：周天宝");
imagefttext($img, 36, 0, 120, 310, $textColor, $font, "邮箱：123@qq.com");
imagefttext($img, 36, 0, 120, 370, $textColor, $font, "专业：信息安全");

// 5. 输出图片
header("Content-Type: image/png");
imagepng($img);

// 6. 释放资源
imagedestroy($img);

?>