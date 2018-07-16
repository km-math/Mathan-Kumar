<html>
<head>
<link rel="stylesheet" type="text/css"  href="details_form.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<?php
include('headerfile.php');
$cmpname=$_POST['cmpslct'];


$collect="select `Company Name`,`Address`,`City`, `State`, `Pin Code`, `Contact no`,`GST Code` from companydetails where `Company Name`='$cmpname'";
$collexe=mysql_query($collect) or die (mysql_error());
while($value=mysql_fetch_array($collexe))
{
	?>
	<body>
	<form action="update_cmpdetails.php" method="POST" class="form-horizontal">
	<div class="panel panel-primary fm">
	<legend class="panel-heading"> Company Details </legend>
	<div class="form-group">
	<label class="control-label col-lg-2" for="name" > Company Name </label>
	<div class="col-lg-10">
	<input type="text" class="form-control xy pad" id="name" value="<?php echo $value[0]?>" name="upname" pattern="[A-Za-z]{1,15}" title="letters" readonly>  </input>
	</div>
	</div>
	<div class="form-group">
	<label class="control-label col-lg-2" for="address"> Address </label>
	<div class="col-lg-10">
	<textarea class="form-control pad" type="text" rows="5" cols="20" id="address" name="upadd" value=""> <?php echo $value[1]?> </textarea>
	</div>
	</div>
	<div class="form-group">
	<label class="control-label col-lg-2" for="city" > City </label>
	<div class="col-lg-10">
	<input class="form-control" type="text" pattern="[A-Za-z]{1,15}" id="city" name="upcty" value="<?php echo $value[2]?>" >  </input>
	</div>
	</div>
	<div class="form-group">
	<label class="control-label col-lg-2" for="stat" > State </label>
	<div class="col-lg-10">
	<input class="form-control" type="text" pattern="[A-Za-z]{1,15}" id="stat" name="upstt" value="<?php echo $value[3]?>" >  </input>
	</div>
	</div>
	<div class="form-group">
	<label class="control-label col-lg-2" for="pcode" > Pin Code </label>
	<div class="col-lg-10">
	<input class="form-control" type="text" pattern="[0-9]{6}" id="pcode" name="uppin" value="<?php echo $value[4]?>" >  </input>
	</div>
	</div>
	
	<div class="form-group">
	<label class="control-label col-lg-2" for="mobile"> Contact No </label>
	<div class="col-lg-10">
	<input class="form-control " type="tel" pattern="\d{10}" id="mobile" name="upmob" value="<?php echo $value[5]?>">  </input>
	</div>
	</div>
	<div class="form-group">
	<label class="control-label col-lg-2" for="code" > GST Code: </label>
	<div class="col-lg-10">
	<input class="form-control" type="text"  id="code" name="upgst" value="<?php echo $value[6]?>" >  </input>
	</div>
	</div>
	<?php
	}
	
?>
<div class="form-group">
<button class="btn btn-primary center-block" type="submit" value="Update" name="cont" > Update </button>
</div>
</div>
</form>




</body>
</html>