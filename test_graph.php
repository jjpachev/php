<?php
require_once 'graph.php';
$graph = new Graph(500,500);
$im = $graph->create_image();
$graph->add_hgap(1, 10, 10);
$graph->add_hgap(2, 20, 20);
$graph->add_vgap(3, 30, 30);
$graph->add_vgap(4, 30, 30);
print_r($graph);
$graph->draw($im);
imagepng($im, 'graph.png');

?>