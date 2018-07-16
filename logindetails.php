<?php
include('headerfile.php');
$Name=$_POST['usrname'];
$Password=$_POST['usrpaswrd'];
$Usrname="SELECT Username FROM logindetails";
$executeun=mysql_query($Usrname) or die (mysql_error());
$b=1;
while($rowun=mysql_fetch_array($executeun))
{
$a=count($rowun);
$i=0;

if(@$rowun[$i]==$Name)
	{ 
	$passwrd="SELECT Password FROM logindetails WHERE Username='$Name'";
	$executepw=mysql_query($passwrd) or die (mysql_error());
	while($rowpw=mysql_fetch_array($executepw))
	{
	$Originalpw=$rowpw[0];
		if($Originalpw==$Password)
		{ 
		header('Location:select_cnam.php');
		}
		else
		{ 
		?>
		<script> alert ("PASSWORD is wrong")  </script>
		<?php
		}
	}
	$b=0;
	}
	else
	{ 
	$x=1;
	}
}
if($b!=0 && $x==1)
{
 ?>
	<script> alert ("Your Username is wrong")  </script>
	<?php
} 
?>