<?
include 'Singleton.class.php';

$var1 = Singleton::getInstance();
$var1->write1();

$var2 = Singleton::getInstance();

echo '<br />';
var_dump($var1 === $var2);


