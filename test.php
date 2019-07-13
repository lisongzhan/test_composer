<?php 
require_once "vendor/autoload.php";
//Lisongzhan\Mycomposer:q

$hello = new Lisongzhan\Mycomposer\Hello();
echo $hello->hello();

echo "\n";
$hiGirl = new Lisongzhan\Mycomposer\Hello('My Goddess');
echo $hiGirl->hello();


