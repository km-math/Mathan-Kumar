<?php
include('headerfile.php');
include('login.php');
$Name=$_POST['usrname'];
$Password=$_POST['usrpaswrd'];

$Usrname="SELECT Username FROM logindetails";
$executeun=mysql_query($Usrname) or die (mysql_error());

while($rowun=mysql_fetch_array($executeun))
{
	$length=$executeun.length;
	echo $length;
}	
	
	
?>