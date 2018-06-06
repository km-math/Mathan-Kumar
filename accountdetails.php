<?php
include('headfile.php');
include('Amazon_login.php');
$Name=$_POST['usrname'];
$Mobile=$_POST['usrcountry'];
$Mobile.=$_POST['usrmobile'];
$Mail=$_POST['usrmail'];
$Password=$_POST['usrpaswrd'];
$insert="insert into accountdetails values('$Name','$Mobile','$Mail','$Password')";
$execute=mysql_query($insert) or die (mysql_error());

?>