<?php
require_once 'color.php';

class Graph
{
  var $w;
  var $h;
  var $th;
  var $fgcolor;
  var $bgcolor;
  var $nx,$ny;
  var $x1,$y1;
  var $x2,$y2;
  var $margin;

  function Graph($w,$h)
  {
    $this->w = $w;
    $this->h = $h;
    $this->th = 2;
    $this->fgcolor = new Color(0, 0, 0);
    $this->bgcolor = new Color(255, 255, 255);
    $this->margin = 30;
    $this->x1 = $this->margin;
    $this->y1 = $this->margin;
    $this->x2 = $this->w - $this->margin;
    $this->y2 = $this->h - $this->margin;
    $this->nx = 10;
    $this->ny = 10;
  }
  
  function create_image()
  {
    return @imagecreate($this->w,$this->h);
  }

  function draw($im)
  {
    $space_x = ($this->x2 - $this->x1) / $this->nx;
    $x = $this->x1;
    
    for ($i = 0; $i  <= $this->nx; $i++)
    {
      imagefilledrectangle($im , $x , $this->y1 , $x + $th , $this->y2 , $cl);
      $x += $space_x;
    }
    
    $space_y = ($this->y2 - $this->y1) / $this->ny;
    $y = $this->y1;
    
    for ($j = 0; $j  <= $this->ny; $j++)
    {
      imagefilledrectangle($im , $this->x1 ,$y , $this->x2 , $y + $th , $cl);
      $y += $space_y;
    }
   }
}
?>