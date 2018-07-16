<html>
<?php
include('headerfile.php');
$upcmpnam=$_POST['upname'];
$upcmpadd=$_POST['upadd'];
$upcmpcty=$_POST['upcty'];
$upcmpstt=$_POST['upstt'];
$upcmppin=$_POST['uppin'];
$upcmpmob=$_POST['upmob'];
$upcmpgst=$_POST['upgst'];
$cmpinsert="update companydetails set Address='$upcmpadd', City='$upcmpcty', State='$upcmpstt',`Pin Code`='$upcmppin',`Contact No`='$upcmpmob',`GST Code`='$upcmpgst' where `Company Name`='$upcmpnam' ";
$cmpupexe=mysql_query($cmpinsert) or die (mysql_error());

if($cmpupexe)
{
	header('Location:select_cnam.php');
}
else
{
	echo "Error on updating data";
}

?>
