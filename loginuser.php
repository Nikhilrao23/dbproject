<?php
include_once('connection.php');


echo"Inventory User login details".PHP_EOL;
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

if($username=="user" && $password =="user")
{

include('last.php');
}
else
{

}















 






?>

