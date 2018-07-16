<html>
<head>   
<link rel="stylesheet" type="text/css"  href="details_form.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
 
	<div class="panel panel-primary fm">
	<legend class="panel-heading"> Choose SubCategory </legend>
	<form action="delete_subcatgdetails.php" method="POST" class="form-horizontal">
	<div class="form-group">
	<label class="control-label col-lg-2" for="subcategory" > SubCategory Name </label>
	<div class="col-lg-10">
	<input class="form-control xy pad" list="subcategory" name="subcatsl">
	<datalist id="subcategory">
	<?php 
	include('headerfile.php');
	$catgid=$_POST['dltsubcat'];
	$subcatglist="SELECT `SubCategory Name` FROM subcategory where `Category id`='$catgid'";
	$exesubcatl=mysql_query($subcatglist) or die (mysql_error());
	while($value=mysql_fetch_array($exesubcatl))
		{ ?>
	 <option value="<?php echo $value[0]; ?>" >  </option>
	 <?php } ?>
	 
	</datalist>
	</input>
	</div>
	</div>
	<div class="text-center">
	<div class="d-inline-block">
	<button class="btn btn-primary" type="submit" value="Edit" name="cont" > Delete </button>
	</form>
	
</body>
</html>	