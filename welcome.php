<?php
include_once('connection.php');

echo"****Inventory System****".PHP_EOL;
echo"LOGIN AS --".PHP_EOL;
echo"1)Manager\n2)Inventory clerk\n3)User\n";
echo"Enter your option or type exit to quit -  ";
$handle = fopen("php://stdin","r");
$line = fgets($handle);
switch(trim($line))
{
	case "1":
	echo "Login page".PHP_EOL;
	include ('logindetails.php');

	break;
	case "2":
	echo"Login Page".PHP_EOL;
	include ('loginclerk.php');
	break;
	
	case "exit":
	break;
	case "3":
	echo"Login Page".PHP_EOL;
	include ('loginuser.php');
	break;
default:
	echo "Wrong option";
	break;
}

?>
