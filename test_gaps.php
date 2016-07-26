<?php
include 'gaps.php';
$gaps = new Gaps();
$gaps->add_gap(40,60);
$gaps->add_gap(80,90);
print_r($gaps);
?>