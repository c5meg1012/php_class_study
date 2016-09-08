<?php

require_once 'Output.php';
require_once 'HtmlOutput.php';

$obj1 = new HtmlOutput('ゆうき', 1, 10);
// $obj2 = new HtmlOutput('ゆうき', 2, 10);
// $obj3 = new HtmlOutput('ゆうき', 1, 20);
// $obj4 = new HtmlOutput('ゆうき', 2, 20);

echo $obj1->call();
// echo $obj2->call();
// echo $obj3->call();
// echo $obj4->call();
