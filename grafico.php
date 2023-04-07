<?php

$image = imagecreate(500, 500);
$background_color = imagecolorallocate($image,0,0,0);
$text_color = imagecolorallocate($image,200,200,000);
imagestring($image, 105, 200, 200, "TripleYei", $text_color);
imagestring($image, 105, 200, 250, "blogtriple.netlify.app", $text_color);
header('Content-type: image/png');
imagepng($image);