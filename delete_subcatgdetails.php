<html>
<?php
include('headerfile.php');
$dltscatgnam=$_POST['subcatsl'];

$dltsubcatg="DELETE FROM subcategory where `SubCategory Name`='$dltscatgnam' ";
$subcatdltexe=mysql_query($dltsubcatg) or die (mysql_error());

	header('Location:select_cnam.php');

?>