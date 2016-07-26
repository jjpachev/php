<?php
require_once 'interval.php';

class Gaps
{
  var $intervals;
  
  function Gaps()
  {
     $this->intervals = [];
  }
  
  function add_gap ($start,$end)
  {
     $gap = new Interval($start,$end);
     $this->intervals[] = $gap;
  }
}
?>