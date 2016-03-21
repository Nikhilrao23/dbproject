
<?php
include_once('connection.php');
echo"-----Welcome" .PHP_EOL;
echo"1)revise stock based on spot checking\n";
echo"Enter your option -  ";
$handle = fopen("php://stdin","r");
$line = fgets($handle);
switch(trim($line)) 
{
        case "1":
        include ('revise.php');
        break;
	
	

	case "exit":
	break;
        default:
        echo "Wrong option";
        break; 
}   




?>
