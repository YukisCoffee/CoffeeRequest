<?php
require "autoloader.php";

function testGenerator(): Generator/*<int>*/
{
    yield;

    throw new Exception();

    return 1;
}

try {
$a = testGenerator();
$a->next();
} catch (Exception) {}

echo $a->getReturn();