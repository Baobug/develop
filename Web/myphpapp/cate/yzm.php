<?php
// include 'yzm_fun.php';
// $text=random_text(5);

// $width=120;
// $height=40;
// $image=imagecreate($width,$height);
// $bg_color=imagecolorallocate($image,220,220,220);

// $font = 18;
// $font_style = '/www/myphp/cate/FZFS_GBK.ttf';
// $x=imagesx($image)/2-strlen($text)*imagefontwidth($font)/2-20;
// $y=imagesy($image)/2-imagefontheight($font)/2+10;
// $font_color=imagecolorallocate($image,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
// imagettftext($image, $font, 0, $x, $y, $font_color, $font_style, $text);

// //添加200个随机点
// for ($i=0; $i<=200; ++$i){
//     $color = imagecolorallocate($image, mt_rand(0,200), mt_rand(0,200), mt_rand(0,200));
//     imagesetpixel($image, mt_rand(0, $width), mt_rand(0, $height), $color);
// }

// if(!isset($_SESSION)){
//     session_start();
// }
// $_SESSION['captcha_code']=$text;

// header("Content-type:image/png");
// ob_end_clean();
// imagepng($image);
// imagedestroy($image);









// 1. 优先启动Session（必须在所有输出前）
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// 2. 引入随机字符串函数（若yzm_fun.php不存在，直接定义）
if (!function_exists('random_text')) {
    function random_text($length = 5) {
        // 排除易混淆字符：0/O、1/l
        $chars = '23456789abcdefghijkmnpqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ';
        $char_len = strlen($chars);
        $text = '';
        for ($i = 0; $i < $length; $i++) {
            $text .= $chars[mt_rand(0, $char_len - 1)];
        }
        return $text;
    }
}

// 3. 生成验证码文本
$text = random_text(5);

// 4. 画布配置（保持原尺寸）
$width = 120;
$height = 40;
// 替换废弃的imagecreate，改用imagecreatetruecolor（更兼容）
$image = imagecreatetruecolor($width, $height);
// 设置背景色（原浅灰色）
$bg_color = imagecolorallocate($image, 220, 220, 220);
imagefill($image, 0, 0, $bg_color); // 填充背景色

// 5. 绘制验证码（改用内置点阵字体，无TTF依赖）
$font_size = 5; // 内置字体大小（1-5，5最大）
// 计算文字居中位置（适配内置字体的宽高）
$font_width = imagefontwidth($font_size); // 单个字符宽度
$font_height = imagefontheight($font_size); // 单个字符高度
// 居中X坐标：(画布宽度 - 字符总数*单字符宽度) / 2
$x = ($width - strlen($text) * $font_width) / 2;
// 居中Y坐标：(画布高度 - 单字符高度) / 2
$y = ($height - $font_height) / 2;
// 随机文字颜色（深色，与背景区分）
$font_color = imagecolorallocate($image, mt_rand(0, 150), mt_rand(0, 150), mt_rand(0, 150));
// 绘制文字（核心：用imagestring替代imagettftext，无字体文件依赖）
imagestring($image, $font_size, $x, $y, $text, $font_color);

// 6. 添加200个随机干扰点（保留原逻辑，增强安全性）
for ($i = 0; $i <= 200; ++$i) {
    $color = imagecolorallocate($image, mt_rand(0, 200), mt_rand(0, 200), mt_rand(0, 200));
    imagesetpixel($image, mt_rand(0, $width), mt_rand(0, $height), $color);
}

// 7. 存储验证码到Session
$_SESSION['captcha_code'] = $text;

// 8. 输出图片（清理缓冲区，避免乱码）
header("Content-type:image/png");
ob_end_clean();
imagepng($image);

// 9. 移除废弃的imagedestroy（PHP8+自动回收内存）
// imagedestroy($image);







?>