<?php
include_once('connection.php');
include_once('session.php');
echo"****List of Products****".PHP_EOL;
$handle=fopen("php://stdin","r");
$db=mysql_query("select Pname from products");
while($row=mysql_fetch_array($db))
{
echo "".$row['Pname'].PHP_EOL;
}
echo" Enter the Product name for which to set a initial stock".PHP_EOL;
$line=fgets($handle);
$Pname = trim($line);
echo "Enter the new product quantity to be renewed".PHP_EOL;
$line2=fgets($handle);
$Pquantity = trim($line2);
$db=mysql_query("update products set Pquantity = '$Pquantity' where Pname ='$Pname' ");
echo "The quantity is updated ".PHP_EOL;
include 'mandet.php';
?>
