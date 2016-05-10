<?php
include_once('connection.php');
echo "Enter the Shipping address name".PHP_EOL;
$handle=fopen("php://stdin","r");
$line=fgets($handle);
$SAName = trim($line);
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
echo "Enter the SHID id".PHP_EOL;
$handle=fopen("php://stdin","r");
$line7=fgets($handle);
$SHID = trim($line7);


mysql_query ("Insert into shipping_address values ('$SAName', '$city', '$country', '$Reciepname', '$state', '$zip', '$SHID')");
echo "Shipping details have been added".PHP_EOL;
echo "**********************************************************".PHP_EOL;
echo" Enter the Shipping Cart Details".PHP_EOL;
echo" 1. SHID number".PHP_EOL;
$handle=fopen("php://stdin","r");
$line33=fgets($handle);
$SHID = trim($line33);
echo" 2.cartID".PHP_EOL;
$handle=fopen("php://stdin","r");
$line22=fgets($handle);
$cartID = trim($line22);
echo" 3.Serial_no".PHP_EOL;
$handle=fopen("php://stdin","r");
$line11=fgets($handle);
$Serial_No = trim($line11);

mysql_query ("Insert into Shipping_Cart_Details values ('$Serial_No', '$SHID', '$cartID')");

echo "Shipping Cart details have been added".PHP_EOL;
include 'last.php';
?>





