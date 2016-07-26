<?php
require_once 'color.php';

class Graph
{
  var $w;
  var $h;
  var $th;
  var $fgcolor;
  var $bgcolor;

  function Graph($w,$h)
  {
    $this->w = $w;
    $this->h = $h;
    $this->th = 2;
    $this->fgcolor = new Color(0, 0, 0);
    $this->bgcolor = new Color(255, 255, 255);
  }

}
?>