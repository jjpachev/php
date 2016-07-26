<?php
$im = @imagecreate(200, 45)
    or die("Cannot Initialize new GD image stream");
$background_color = imagecolorallocate($im, 0, 0, 255);
$text_color = imagecolorallocate($im, 233, 150, 91);
imagestring($im, 3, 5, 5,  "Hello World!", $text_color);
imagepng($im, "hello.png");
imagedestroy($im);
?>