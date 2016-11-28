<?php

require_once (__DIR__ . '/../encryption/src/Disguise.php');

$disguise = new Disguise();

$data = 'This is a Rock ´N Roll..';
$en = $disguise->obscure($data);
echo $en;

echo "<br>";
echo "<br>";

echo $disguise->illumin($en);
