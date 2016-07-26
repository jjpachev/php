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

  function allocate($img)
  {
    return imagecolorallocate($img, $this->r,
      $this->g, $this->b);
  }
}
?>