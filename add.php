<?php
include_once('connection.php');
$uri="mongodb://raonikhil23:Keepcalm23@ds017862.mlab.com:17862/inventory_db";
$conn=new Mongoclient($uri);
$db=$conn->inventory_db;
$productscollection=$db->products;

echo"Enter the product id".PHP_EOL;
$handle=fopen("php://stdin","r");
$line=fgets($handle);
$PID = trim($line);
echo"Enter the Product name".PHP_EOL;
$line2= fgets($handle);
$Pname = trim($line2);
echo"Enter the Product price".PHP_EOL;
$line3= fgets($handle);
$Pprice = trim($line3);
echo"Enter the Product Quantity".PHP_EOL;
$line4= fgets($handle);
$Pquantity= trim($line4);
$productinfo=array('ProductID'=> $PID,
		'Productname'=>$Pname,
	 	'Price'=>$Pprice,
		'Quantity'=>$Pquantity);
$productscollection->insert($productinfo);
mysql_query("Insert into products values('', '$Pname','$Pprice','$Pquantity')");
echo "Products added".PHP_EOL;
include 'mandet.php';






?>
