<?php
echo "<h1>Hello World!!!</h1>";
echo $_SERVER['SCRIPT_FILENAME'] . "<br />";

$arg1 = escapeshellarg('hello');
$arg2 = escapeshellarg('world');
//$output = shell_exec("nohup python3 /opt/test.py $arg1 $arg2 > /dev/null 2>&1 &");
$output = shell_exec("python3 /opt/test.py $arg1 $arg2");
echo $output;

phpinfo();