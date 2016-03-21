<?php
include_once('connection.php');

echo"**** List of products for spot checking on quantity***".PHP_EOL;
$handle=fopen("php://stdin","r");
$res=mysql_query("select Pname,Pprice,Pquantity from products where Pquantity <= 5 ");
while($row=mysql_fetch_array($res))
{
echo "".$row['Pname'].PHP_EOL;
echo "".$row['Pprice'].PHP_EOL;
echo "".$row['Pquantity'].PHP_EOL;
$PPname=$row['Pname'];
mysql_query("update products set Pquantity =10 where Pname ='$PPname'");
}
echo"***** Product quantity has beeen updated after spot checking***".PHP_EOL;
include 'welcome.php';
?>
