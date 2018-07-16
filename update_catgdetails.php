

<html>
<?php
include('headerfile.php');
$upcatgnam=$_POST['nwcatg'];
$oldcatg=$_POST['oldcatg'];

$catginsert="update category set `Category Name`='$upcatgnam' where `Category Name`='$oldcatg' ";
$catgupexe=mysql_query($catginsert) or die (mysql_error());

if($catgupexe)
{
	header('Location:select_cnam.php');
}
else
{
	echo "Error on updating data";
}

?>