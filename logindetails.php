<?php
include_once('connection.php');


echo"Manager login details".PHP_EOL;
echo"Enter Username".PHP_EOL;
$handle = fopen("php://stdin","r");
$line = fgets($handle);
echo"Enter Password".PHP_EOL;
system('stty -echo');
$handle2 = fopen("php://stdin","r");
$line2 = fgets($handle2);
system('stty echo');

$username=trim($line);
$password=trim($line2);

if($username=="manager" && $password =="manager")
{

include('mandet.php');
}
else
{

}















 






?>

