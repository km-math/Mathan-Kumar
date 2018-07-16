

<html>
<head>   
<link rel="stylesheet" type="text/css"  href="details_form.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
 
	<div class="panel panel-primary fm">
	<legend class="panel-heading"> Choose Category </legend>
	<form action="edit_catgdetails.php" method="POST" class="form-horizontal">
	<div class="form-group">
	<label class="control-label col-lg-2" for="category" > Category Name </label>
	<div class="col-lg-10">
	<input class="form-control xy pad" list="category" name="catgslct">
	<datalist id="category">
	<?php 
	include('headerfile.php');
	$cmpnyid=$_POST['edtcat'];
	$catglist="SELECT `Category Name` FROM category where `Company id`='$cmpnyid'";
	$execatl=mysql_query($catglist) or die (mysql_error());
	while($value=mysql_fetch_array($execatl))
		{ ?>
	 <option value="<?php echo $value[0]; ?>" >  </option>
	 <?php } ?>
	 
	</datalist>
	</input>
	</div>
	</div>
	<div class="text-center">
	<div class="d-inline-block">
	<button class="btn btn-primary" type="submit" value="Edit" name="cont" > Edit </button>
	</form>
	
</body>
</html>	