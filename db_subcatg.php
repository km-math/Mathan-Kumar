
<?php
include('headerfile.php');
$scatnam=$_POST['subcatg'];
$supname=$_POST['supnam'];
$suptype=$_POST['suptyp'];
$catgid=$_POST['catgid'];

$scatgin="insert into subcategory (`SubCategory Name`,`Category id`) values('$scatnam','$catgid')";
$scatgexe=mysql_query($scatgin) or die (mysql_error());

$getcmpid="SELECT `Company id` FROM category where `Category id`='$catgid'";
$execmpid=mysql_query($getcmpid) or die (mysql_error());

while($idval=mysql_fetch_array($execmpid))
{
	$cmpid=$idval[0];
}

$getscatid="SELECT `SubCategory id` FROM subcategory where `SubCategory Name`='$scatnam'";
$exescatid=mysql_query($getscatid) or die (mysql_error());

while($scatidval=mysql_fetch_array($exescatid))
{
	$scatgid=$scatidval[0];
}

$supdtl="INSERT INTO supplierdetails values ('$supname','$suptype','$cmpid','$scatgid')";
$exesupdtl=mysql_query($supdtl) or die( mysql_error());


header('Location:select_cnam.php');

?>