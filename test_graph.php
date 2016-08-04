<?php
require_once 'graph.php';
$graph = new Graph(1000,1000);
$im = $graph->create_image();
$graph->draw($im);
imagepng($im, 'graph.png');

?>