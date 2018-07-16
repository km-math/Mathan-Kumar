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
$cmpid=$_POST['addcatg'];
?>
<form action="db_catg.php" method="POST" class="form-horizontal">

<div class="panel panel-primary fm">
<legend class="panel-heading"> Category </legend>
<div class="pad">

<div class="form-group">
<label class="control-label col-lg-2" for="category" > Category Name </label> 
<div class="col-lg-10">

<input type="text" class="form-control " pattern="[A-Za-z\s]{1,15}" name="catg" id="category" class="xy">

</div>
</div>

</div>

<div class="form-group pull-right">
<button class="btn btn-primary " type="submit" value="<?php echo $cmpid; ?>" name="cmpnyid"> Add Category </button>
</div>
</div>
</form>


</body>
</html>