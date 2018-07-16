<?php 
include('headerfile.php');
$bnkname=$_POST['bnknam'];
$Accholdname=$_POST['acchnam'];
$Accnumb=$_POST['accnumb'];
$ifsccode=$_POST['ifscod'];
$cmpid=$_POST['bnkcont'];

$bnkdtl="INSERT INTO bankdetails values ('$bnkname','$Accholdname','$Accnumb','$ifsccode','$cmpid')";
$exebnkdt=mysql_query($bnkdtl) or die (mysql_error());

header('Location:select_cnam.php');

?>