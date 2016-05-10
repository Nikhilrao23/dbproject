<?php
include_once('connection.php');
echo"Enter the cartid".PHP_EOL;
$handle=fopen("php://stdin","r");
$line=fgets($handle);
$cartID = trim($line);
echo"Enter the cartDate".PHP_EOL;
$line2 = fgets($handle);
$cartDate = trim($line2);
echo"Enter the PID".PHP_EOL;
$line3 = fgets($handle);
$cartstatus = trim($line3);
//echo"Enter the Pname".PHP_EOL;
//$line4 = fgets($handle);
//$Pname = trim($line4);
mysql_query("Insert into cart(cartID,cartDate,CartStatus)values ('$cartID', '$cartDate','$cartstatus')");
echo "Product is added to cart".PHP_EOL;
include 'welcome.php';
?>
