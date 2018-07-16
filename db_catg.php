
<?php
include('headerfile.php');
$catnam=$_POST['catg'];
$cmpid=$_POST['cmpnyid'];

$catgin="insert into category (`Category Name`,`Company id`) values('$catnam','$cmpid')";
$catgexe=mysql_query($catgin) or die (mysql_error());
header('Location:select_cnam.php');

?>