<?php
class Color
{
  var $r;
  var $b;
  var $g;
  
  function Color($r,$g,$b)
  {
    $this->r = $r;
    $this->g = $g;
    $this->b = $b;
  }

  function allocate($im)
  {
    return imagecolorallocate($im, $this->r,
      $this->g, $this->b);
  }
}
?>