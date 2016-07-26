<?php
include 'interval.php';

$i = new Interval();
$i->start = 10;
$i->end = 20;
print_r ($i);

$j = new Interval(50,60);
print_r($j);
?>