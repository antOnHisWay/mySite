<?php
// store the image in variable
$image = imagecreatefromjpeg("../images/iconfont.jpeg");

// Calculate rgb pixel value at particular point.
$rgb = imagecolorat($image, 30, 25);
$red = ($rgb >> 16) & 255;
$green = ($rgb >> 8) & 255;
$blue = $rgb & 255;

var_dump($red, $green, $blue);

echo "#" . str_pad(dechex($red),2,"0",STR_PAD_LEFT) . str_pad(dechex($green),2,"0",STR_PAD_LEFT) . str_pad(dechex($blue),2,"0",STR_PAD_LEFT);
