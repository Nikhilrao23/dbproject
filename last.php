
<?php
include_once('connection.php');
echo"-----Welcome----".PHP_EOL;
echo"1)view stock\n2)place order\n3)view order\n";
echo"Enter your option -  ";
$handle = fopen("php://stdin","r");
$line = fgets($handle);
switch(trim($line)) 
{
        case "1":
        include ('view.php');
        break;
        case "2":
        include ('place.php'); 
	break;
        case "3":
	include ('vhistory.php'); 
        break;
	
	

	case "exit":
	break;
        default:
        echo "Wrong option";
        break; 
}   




?>
