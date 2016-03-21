<?php
include_once('connection.php');
echo "Enter the Shipping address name".PHP_EOL;
$handle=fopen("php://stdin","r");
$line=fgets($handle);
$SName = trim($line);
echo "Enter the city name".PHP_EOL;
$handle=fopen("php://stdin","r");
$line2=fgets($handle);
$city = trim($line2);
echo "Enter the country name".PHP_EOL;
$handle=fopen("php://stdin","r");
$line3=fgets($handle);
$country = trim($line3);
echo "Enter the Reciepent name".PHP_EOL;
$handle=fopen("php://stdin","r");
$line4=fgets($handle);
$Reciepname = trim($line4);
echo "Enter the State name".PHP_EOL;
$handle=fopen("php://stdin","r");
$line5=fgets($handle);
$state = trim($line5);
echo "Enter the Zip code".PHP_EOL;
$handle=fopen("php://stdin","r");
$line6=fgets($handle);
$zip = trim($line6);
echo "Enter the cart id".PHP_EOL;
$handle=fopen("php://stdin","r");
$line7=fgets($handle);
$cartID = trim($line7);

mysql_query ("Insert into shipping_address values ('$SName', '$city', '$country', '$Reciepname', '$state', '$zip', '$cartID')");
echo "Shipping details have been added".PHP_EOL;
include 'last.php';
?>





