<?php
$img = imagecreate(300,200);

imagecolorallocate($img, 220 , 220 , 220 );

$color = imagecolorallocate($img, 0, 255 , 0);
imagerectangle($img,50,50,250,150,$color);

$color1 = imagecolorallocate($img, 0,0,255);
imagestring($img, 5, 50,100,"Today is wendnesday",$color1);

header("content-type:image/png");
ob_end_clean();
imagepng($img);
?>