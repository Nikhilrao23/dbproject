
<?php
include_once('connection.php');
echo"-----Welcome" .PHP_EOL;
echo"1)add products\n2)set initial product stock\n3)schedule new products to be ordered\n";
echo"Enter your option -  ";
$handle = fopen("php://stdin","r");
$line = fgets($handle);
switch(trim($line)) 
{
        case "1":
        include ('add.php');
        break;
        case "2":
        include ('stock.php'); 
	break;
        case "3":
	include ('schedule.php'); 
        break;
	
	

	case "exit":
	break;
        default:
        echo "Wrong option";
        break; 
}   




?>
