<?php
use App\Model\User;
use App\Model\Product;
require dirname(__DIR__) . '/vendor/autoload.php';

echo "<h1>Hello World!!!</h1>";
echo $_SERVER['SCRIPT_FILENAME'] . "<br />";
echo "dirname(__DIR__): " . dirname(__DIR__)  . "<br />";

$arg1 = escapeshellarg('hello');
$arg2 = escapeshellarg('world');
//$output = shell_exec("nohup python3 /opt/test.py $arg1 $arg2 > /dev/null 2>&1 &");
$output = shell_exec("python3 /opt/test.py $arg1 $arg2");
echo $output . "<br />";

$user = new User('John Doe');
echo $user->getName() . "<br />";

$product = new Product('Motorola');
echo $product->getName() . "<br />";

phpinfo();