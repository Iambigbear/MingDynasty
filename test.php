<?php
/**
 * Created by PhpStorm.
 * User: zhuangshaoxiong
 * Date: 2015/12/3
 * Time: 20:19
 */
$string = "abcdefghijklmnopqrstuvwxyz0123456789";
$str = "";
for($i=0;$i<4;$i++){
    $pos = rand(0,35);
    $str .= $string{$pos};
}
session_start();
$_SESSION['checknode'] = $str;
$img_handle = Imagecreate(100, 20);
$back_color = ImageColorAllocate($img_handle, 255, 255, 255);
$txt_color = ImageColorAllocate($img_handle, 0,0, 0);

echo ddddd;
for($i=0;$i<3;$i++)
{
    $line = ImageColorAllocate($img_handle,rand(0,255),rand(0,255),rand(0,255));
    Imageline($img_handle, rand(0,15), rand(0,15), rand(100,150),rand(10,50), $line);
}

for($i=0;$i<200;$i++)
{
    $randcolor = ImageColorallocate($img_handle,rand(0,255),rand(0,255),rand(0,255));
    Imagesetpixel($img_handle, rand()%100 , rand()%50 , $randcolor);
}
Imagefill($img_handle, 0, 0, $back_color);
ImageString($img_handle, 28, 10, 0, $str, $txt_color);
ob_clean();
header("Content-Type: image/png;");
Imagepng($img_handle);

