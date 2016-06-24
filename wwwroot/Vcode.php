<?php

     session_start();
     //生成验证码图片
     Header("Content-type: image/PNG");
     $im = imagecreate(44,18); // 画一张指定宽高的图片
     $back = ImageColorAllocate($im, 245,245,245); // 定义背景颜色
     imagefill($im,0,0,$back); //把背景颜色填充到刚刚画出来的图片中
     $vcodes = "";

     srand((double)microtime()*1000000);

     //生成4位数字
     for($i=0;$i<4;$i++){
         $font = ImageColorAllocate($im, rand(100,255),rand(0,100),rand(100,255)); // 生成随机颜色
         $authnum=rand(1,9);
         $vcodes.=$authnum;
         imagestring($im, 5, 2+$i*10, 1, $authnum, $font);
     }

     $_SESSION['VCODE'] = $vcodes;

     for($i=0;$i<100;$i++) //加入干扰象素
     {
         $randcolor = ImageColorallocate($im,rand(0,255),rand(0,255),rand(0,255));
         imagesetpixel($im, rand()%70 , rand()%30 , $randcolor); // 画像素点函数
     }
     ImagePNG($im);
     ImageDestroy($im);

exit;































//文件头...
header("Content-type: image/png");
//创建真彩色白纸
$im = @imagecreatetruecolor(60, 30) or die("建立图像失败");
//获取背景颜色
$background_color = imagecolorallocate($im, 255, 255, 255);
//填充背景颜色(这个东西类似油桶)
imagefill($im,0,0,$background_color);

//获取边框颜色
$border_color = imagecolorallocate($im,200,200,200);

//画矩形，边框颜色200,200,200
imagerectangle($im,0,0,59,29,$border_color);

//逐行炫耀背景，全屏用1或0
for($i=2;$i<28;$i++){
    //获取随机淡色
    $line_color = imagecolorallocate($im,rand(200,255),rand(200,255),rand(200,255));
    //画线
    imageline($im,2,$i,57,$i,$line_color);
}

//设置字体大小
$font_size=16;

//设置印上去的文字
$Str[0] = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$Str[1] = "abcdefghijklmnopqrstuvwxyz";
$Str[2] = "01234567891234567890123456";

//获取第1个随机文字
$imstr[0]["s"] = $Str[rand(0,2)][rand(0,25)];
$imstr[0]["x"] = rand(2,5);
$imstr[0]["y"] = rand(1,4);

//获取第2个随机文字
$imstr[1]["s"] = $Str[rand(0,2)][rand(0,25)];
$imstr[1]["x"] = $imstr[0]["x"]+$font_size-1+rand(0,1);
$imstr[1]["y"] = rand(1,3);

//获取第3个随机文字
$imstr[2]["s"] = $Str[rand(0,2)][rand(0,25)];
$imstr[2]["x"] = $imstr[1]["x"]+$font_size-1+rand(0,1);
$imstr[2]["y"] = rand(1,4);

//获取第4个随机文字
$imstr[3]["s"] = $Str[rand(0,2)][rand(0,25)];
$imstr[3]["x"] = $imstr[2]["x"]+$font_size-1+rand(0,1);
$imstr[3]["y"] = rand(1,3);

//写入随机字串
for($i=0;$i<4;$i++){
    //获取随机较深颜色
    $text_color = imagecolorallocate($im,rand(50,180),rand(50,180),rand(50,180));
    //画文字
    imagechar($im,$font_size,$imstr[$i]["x"],$imstr[$i]["y"],$imstr[$i]["s"],$text_color);
}

//显示图片
imagepng($im);
//销毁图片
imagedestroy($im);
?>
