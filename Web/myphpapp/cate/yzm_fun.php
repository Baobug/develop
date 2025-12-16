<?php
/**
 * 生成随机验证码文本
 * @param int $length 验证码长度，默认5位
 * @return string 随机字符串（字母+数字）
 */
function random_text($length = 5) {
    // 可选：纯数字验证码
    // $chars = '0123456789';
    // 字母+数字（排除易混淆字符）
    $chars = '23456789abcdefghijkmnpqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ';
    $char_length = strlen($chars);
    $random_str = '';
    for ($i = 0; $i < $length; $i++) {
        $random_str .= $chars[mt_rand(0, $char_length - 1)];
    }
    return $random_str;
}




// function random_text($count,$rm_similar=false){
//     $chars = array_flip(array_merge(range(0,9),range('A','Z'),range('a','z')));
//     //chars = array_merge(range(0,9),range('A','Z'),range('a','z'));
//     //shuffle($chars);
//     if($rm_similar){
//         unset($chars[0],$chars[1],$chars['l'],$chars['O']);
//     }
//     for($i=0;$text=,"";$i<$count;$i++){
//         $text .= array_rand($chars);
//     }
//     return $text;
// }
?>