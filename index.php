<?php
require 'vendor/autoload.php';
use CowSay\Cow;

$bessie = new Cow('Hello, Farm!');
$bessie->setEyes('oO')
    ->setTongue('U')
    ->setPoop('@@@')
    ->setUdder('W');
echo $bessie;

echo $bessie;
?>