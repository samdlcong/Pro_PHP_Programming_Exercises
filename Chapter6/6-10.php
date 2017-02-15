<?php

$imgName = 'image.jpg';
$thumbName = 'thumb.png';
$metaData = getimagesize($imgName);
$img = '';
$newWidth = 200;
$newHeight = $metaData[1]/($metaData[0]/$newWidth);

switch($metaData['mime']){
	case 'image/jpeg':
		$img = imagecreatefromjpeg($imgName);
		break;
	case 'image/png':
		$img = imagecreatefrompng($imgName);
		break;
	case 'image/gif':
		$img = imagecreatefromgif($imgName);
		break;
	case 'image/wbmp':
		$img = imagecreatefromwbmp($imgName);
		break;
}		

if($img){
	$imgThumb = imagecreatetruecolor($newWidth,$newHeight);
	imagecopyresampled($imgThumb,$img,0,0,0,0,$newWidth,$newHeight,$metaData[0],$metaData[1]);
	imagepng($imgThumb,$thumbName);
	imagedestroy($imgThumb);
}