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
$catgname=$_POST['catgslct'];

$collcatgid="select `Category id` from category where `Category Name`='$catgname'";
$catgidexe=mysql_query($collcatgid) or die (mysql_error());
while($valcatg=mysql_fetch_array($catgidexe))
{ 
$catgid= $valcatg[0]; 

}
?>
<form action="Billing.php" method="POST" class="form-horizontal">

<div class="panel panel-primary fm">
<legend class="panel-heading"> Category </legend>
<div class="pad">

<div class="form-group">
<label class="control-label col-lg-2" for="category" > Category Name </label> 
<div class="col-lg-10">
<input type="text" class="form-control" name="catg" id="modalname" value="<?php echo $catgname; ?>" readonly>
</div>
</div>

<legend> Sub-Category </legend>
<div class="form-group">
<label class="control-label col-lg-2" for="subcategory" > Modal Name </label> 
<div class="col-lg-10">
<input class="form-control xy pad" list="subcategory" name="subcatg">
<datalist id="subcategory">
	<?php 
	include('headerfile.php');
	$subcatglist="SELECT `SubCategory Name` FROM subcategory where `Category id`='$catgid'";
	$exesctgl=mysql_query($subcatglist) or die (mysql_error());
	while($value=mysql_fetch_array($exesctgl))
		{ echo $value[0]; ?>
	 <option value="<?php echo $value[0]; ?>" >  </option>
	 <?php } ?>
	 
	</datalist>
	</input>
</div>
</div>
<div class="form-group">
<label class="control-label col-lg-2" for="quan" > Quantity </label> 
<div class="col-lg-3">
<input type="number" class="form-control" min="1" name="quanty" id="quan" required>
</div>
<label class="control-label col-lg-2" for="prc" > Price </label> 
<div class="col-lg-3">

<input type="text" class="form-control" pattern="^[0-9]+(\.[0-9]{2}?)$" name="price" id="prc" title="Enter the price with 2 decimal digits." required>
</div>
<div class="col-lg-2">
<button class="btn btn-primary " type="submit" value="<?php echo $catgid; ?>" name="idcat" > Continue </button>
</div>
</div>


</div>
</form>
<div class="col-lg-6">
<form action="Add_newsubcatg.php" method="POST" class="form-horizontal">
<button class="btn btn-primary marg" type="submit" value="<?php echo $catgid;?>" name="add-s-catg" style="margin-left:125px;"> Add new SubCategory </button>
</form>
</div>
<div class="col-lg-6">
<form action="Select_delete_catg.php" method="POST" class="form-horizontal">
<button class="btn btn-primary " type="submit" value="<?php echo $catgid; ?>" name="dltsubcat"> Delete SubCategory  </button>
</form>
</div>
</div>
</body>
</html>