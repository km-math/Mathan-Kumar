
<html>
<head>
<link rel="stylesheet" type="text/css"  href="details_form.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<?php
include('headerfile.php');
$catgnam=$_POST['catgslct'];
?>
	<body>
	<form action="update_catgdetails.php" method="POST" class="form-horizontal">
	<div class="panel panel-primary fm">
	<legend class="panel-heading"> Category </legend>
	<div class="form-group">
	<label class="control-label col-lg-2" for="name" > New Category Name </label>
	<div class="col-lg-10">
	<input type="text" class="form-control xy pad" id="name" value="<?php echo $catgnam; ?>" name="nwcatg" pattern="[A-Za-z\s]{1,25}" title="letters" autofocus>  </input>
	</div>
	</div>

<div class="form-group">
<button class="btn btn-primary center-block" type="submit" value="<?php echo $catgnam; ?>" name="oldcatg" > Update </button>
</div>
</div>
</form>




</body>
</html>