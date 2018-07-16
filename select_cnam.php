<html>
<head>   
<link rel="stylesheet" type="text/css"  href="details_form.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
 
	<div class="panel panel-primary fm">
	<legend class="panel-heading"> Choose Company </legend>
	<form action="Select_catgdetails.php" method="POST" class="form-horizontal">
	<div class="form-group">
	<label class="control-label col-lg-2" for="company" > Company Name </label>
	<div class="col-lg-10">
	<input class="form-control xy pad" list="company" name="cmpslct">
	<datalist id="company">
	<?php 
	include('headerfile.php');
	$cmplist="SELECT `Company Name` FROM companydetails";
	$execl=mysql_query($cmplist) or die (mysql_error());
	while($value=mysql_fetch_array($execl))
		{ ?>
	 <option value="<?php echo $value[0]; ?>" >  </option>
	 <?php } ?>
	 
	</datalist>
	</input>
	</div>
	</div>
	<div class="text-center">
	<div class="d-inline-block">
	<button class="btn btn-primary" type="submit" value="Edit" name="cont" > Continue to Next Page </button>
	</form>
	<a href="select_cmp_edit.php"> <button class="btn btn-primary marg" type="button" style="margin-left:125px;"> Edit Company Details  </button> </a>
	
	<a href="GST_cmpnydetails_form.php"> <button class="btn btn-primary marg" type="button"style="margin-left:125px;"> Add new Company </button> </a>
	</div>
	</div>
	
	
	


</body>
</html>
