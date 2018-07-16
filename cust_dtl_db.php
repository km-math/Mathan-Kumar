
<?php
include('headerfile.php');
$cusname=$_POST['cnam'];
$cusnumb=$_POST['cnum'];
$cusaddrs=$_POST['addrs'];

$cusdtl="INSERT INTO customerdetails VALUES ('$cusname','$cusnumb','$cusaddrs')";
$exedtl=mysql_query($cusdtl) or die( mysql_error());

echo"<script> alert('Have a nice day');
	window.location.href='login.php'</script>";

?>