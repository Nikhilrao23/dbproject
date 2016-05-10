<?php
include_once('connection.php');

echo"View Order History".PHP_EOL;
echo"Enter the Shipping Detail id".PHP_EOL;
$handle = fopen("php://stdin","r");
$line = fgets($handle);
$cartID = trim($line);
$resq = mysql_query("select * from shipping_address where SHID = '$cartID'");
//$db=mysql_fetch_object($res);
while($dba=mysql_fetch_array($resq))
{






$asd=$dba['SAName'];
echo "$asd".PHP_EOL;
$asd=$dba['city'];
echo "$asd".PHP_EOL;
$asd=$dba['country'];
echo "$asd".PHP_EOL;
$asd=$dba['Reciepname'];
echo "$asd".PHP_EOL;
$asd=$dba['state'];
echo "$asd".PHP_EOL;
$asd=$dba['zip'];
echo "$asd".PHP_EOL;





}

include 'welcome.php';
?>
