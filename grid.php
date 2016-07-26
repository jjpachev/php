<?php
include 'interval.php';

function draw_grid( $im , $cl , $nx , $ny , $x1 , $y1 , 
$x2 , $y2 , $th )
{
  $space_x = ($x2 - $x1) / $nx;
  $x = $x1;
  
  for ($i = 0; $i  <= $nx; $i++)
  {
    imagefilledrectangle($im , $x , $y1 , $x + $th , $y2 , $cl);
    $x += $space_x;
  }
  
   $space_y = ($y2 - $y1) / $ny;
   $y = $y1;
  
  for ($j = 0; $j  <= $ny; $j++)
  {
    imagefilledrectangle($im , $x1 ,$y , $x2 , $y + $th , $cl);
    $y += $space_y;
  }
  
 
}
$im = @imagecreate(900, 900)
    or die("Cannot Initialize new GD image stream");
imagecolorallocate($im, 255 , 255 , 255);
$black = imagecolorallocate($im, 0 , 0 , 0);
draw_grid($im , $black , 30 , 30, 200 , 200 , 700 , 700 , 2);
imagepng($im, "grid.png");
imagedestroy($im);
?>