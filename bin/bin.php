<?php
header('content-type:image/png');
$img = imagecreatefrompng ('Logo_of_Super_Bowl_XLV.svg.png') ;
$adatok = getimagesize('Logo_of_Super_Bowl_XLV.svg.png');
$w = $adatok[0];
$h = $adatok[1];

for($y = 0; $y < $h; $y++){
        for($x = 0; $x < $w; $x++){
            $rgb = imagecolorat($img, $x, $y);
            $r = ($rgb >> 16) & 0xFF;
            $g = ($rgb >> 8) & 0xFF;
            $b = $rgb & 0xFF;
            if($b > 30 && $r > 59){
                imagesetpixel($img, $x, $y, imagecolorallocate($img, 255, 255, 255));
            }
            else{
                imagesetpixel($img, $x, $y, imagecolorallocate($img, 0, 0, 0));
            }
        }
}

imagepng($img);
imagedestroy($img);
?>
