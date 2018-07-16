<html>
<head>
<link rel="stylesheet" type="text/css"  href="details_form.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<?php
include('headerfile.php');
$cmpname=$_POST['cmpslct'];

$collcmpid="select `Company id` from companydetails where `Company Name`='$cmpname'";
$cmpidexe=mysql_query($collcmpid) or die (mysql_error());
while($valcid=mysql_fetch_array($cmpidexe))
{ 
$cmpid= $valcid[0]; 
}
?>

<div class="panel panel-primary fm">
<legend class="panel-heading"> Category </legend>
<form action="Select_subcatg.php" method="POST" class="form-horizontal">


<div class="form-group">
<label class="control-label col-lg-2" for="category" > Category Name </label> 
<div class="col-lg-8">
	<input class="form-control xy pad" list="category" name="catgslct">
	<datalist id="category">
	<?php 
	include('headerfile.php');
	$catglist="SELECT `Category Name` FROM category where `Company id`='$cmpid'";
	$exectgl=mysql_query($catglist) or die (mysql_error());
	while($value=mysql_fetch_array($exectgl))
		{ ?>
	 <option value="<?php echo $value[0]; ?>" >  </option>
	 <?php } ?>
	</datalist>
	</input>
</div>
<div class="col-lg-2">
<button class="btn btn-primary " type="submit" value="$cmpid" name="sub" > Select </button>
</div>
</div>
</form>

<div class="col-lg-6">
<form action="Select_edit_catg.php" method="POST">
<button class="btn btn-primary " type="submit" value="<?php echo $cmpid; ?>" style="margin-left:125px;" name="edtcat"> Edit Category  </button>
</form>
</div>
<div class="col-lg-6">
<form action="Add_newcatg.php" method="POST">
<button class="btn btn-primary " type="submit" value="<?php echo $cmpid;?>" name="addcatg"> Add new Category </button>
</form>
</div>

</div>
</body>
</html>