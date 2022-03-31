<?php
//存有美图链接的文件名img.txt
$filename = "webp.txt";
if(!file_exists($filename)){
    die('文件不存在');
}

//从文本获取链接
$pics = [];
$fs = fopen($filename, "r");
while(!feof($fs)){
    $line=trim(fgets($fs));
    if($line!=''){
        array_push($pics, $line);
    }
}

//从数组随机获取链接
$pic = $pics[array_rand($pics)];
die(header("Location: $pic"));
?>
