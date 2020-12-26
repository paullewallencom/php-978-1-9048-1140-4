<?
# thumb.php
header("Content-type: image/jpeg");
$image=$_REQUEST['image_path'];
$thumb = imagecreatetruecolor(200, 150);
$img = imagecreatefromjpeg($image);
imagecopy($thumb,$img, 0,0,0,0, 600, 450);
imagejpeg($thumb);
?>