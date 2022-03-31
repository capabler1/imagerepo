
<?php
$img=file('webp.txt');
$url=array_rand($img);
header("Location:".$img[$url]);
?>