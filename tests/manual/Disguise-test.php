<?php

require_once (__DIR__ . '/../bootstrap.php');
use \Encryptor\Suite\Disguise;


$disguise = new Disguise();

$data = 'Hello World!';
echo 'Text: ' . htmlentities($data);

echo "<br>";
echo "<br>";

$en = $disguise->obscure($data);
echo 'Encrypted Text: ' . $en;

echo "<br>";
echo "<br>";

echo 'Decrypted Text: ' . $disguise->illumin($en);
