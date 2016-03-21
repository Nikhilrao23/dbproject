<?php 
include_once('connection.php');

echo"View Stock".PHP_EOL;
echo"Enter the Product name".PHP_EOL;
$handle = fopen("php://stdin","r");
$line = fgets($handle);
$Pname = trim($line);
$db =mysql_query(" select PID , Pquantity, Pprice from products where Pname ='$Pname' ");
while ($row=mysql_fetch_array($db))
{
echo "".$row['PID'].PHP_EOL;
echo "".$row['Pprice'].PHP_EOL;
echo "".$row['Pquantity'].PHP_EOL;
}
include 'last.php';
?>
