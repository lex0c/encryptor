<?php

require_once (__DIR__ . '/../encryption/src/SMCrypter.php');

$smCrypt1 = new SMCrypter();
$smCrypt2 = new SMCrypter();

$originalValue = "Meu EMAIL é 'leonardo_carvalho@outlook.com' and (10+5/2*7=0999) <>because yes. çÇ>";
echo 'Original Text: '.$originalValue;

echo "<br>";
echo "<br>";

$key = $smCrypt1->keyGenerator();
//$key = 3000000;
//$key = 'VE16Z2pNPT1RTzVn';
echo 'Generated Key: '.$key;

echo "<br>";
echo "<br>";

$en = $smCrypt1->encode($key, $originalValue);
echo 'Encrypted Text: '.$en;

echo "<br>";
echo "<br>";

echo 'Decrypted Text: '.$smCrypt2->decode($key, $en);
