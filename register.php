<?php
include_once('connection.php');
echo "*** Register form*** ".PHP_EOL;
echo " Enter username".PHP_EOL;
$handle = fopen("php://stdin","r");
$line =fgets($handle);
$username= trim($line);
echo " Enter your password ".PHP_EOL;
$line2 = fgets($handle);
$password=trim($line2);

$db=mysql_query("Select * from userinfo where username='$username'");
$row=mysql_fetch_object($db);
//echo "$row".PHP_EOL;
//$susername=$row->username;
if($row!="")
{
	echo "USERNAME ALREADY EXIST!!!".PHP_EOL;
	return include "mail.php";
	
}	

else
	{
	echo "User Registration type yes to confirm or no to cancel".PHP_EOL;
	$line6=fgets($handle);
	$confirm=trim($line6);	
		if($confirm=="yes")
		{
	mysql_query("Insert into userinfo values ('','$username','$password','$mobile','$email','$gender')");


	echo " REGISTRATION SUCCESSFULL!! ".PHP_EOL;
	//include_once('mail.php');
	return include "mail.php";
		}
		else
		{
		echo "REGISTRATION CANCELED!!".PHP_EOL;
		//include_once('mail.php');
		return include "mail.php";
		}
	}
?>
