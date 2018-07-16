

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
$catgid=$_POST['add-s-catg'];
?>
<form action="db_subcatg.php" method="POST" class="form-horizontal">

<div class="panel panel-primary fm">
<legend class="panel-heading"> SubCategory </legend>
<div class="pad">

<div class="form-group">
<label class="control-label col-lg-2" for="category" > SubCategory Name </label> 
<div class="col-lg-10">

<input type="text" class="form-control xy" pattern="[A-Za-z\s]{1,15}" name="subcatg" id="category">

</div>
</div>
<div class="form-group"> 
<label class="control-label col-lg-2" for="supdtl" > Supplier Name </label>
<div class="col-lg-10"> 
<input type="text" class="form-control" pattern="[A-Za-z\s]{1,25}" name="supnam" id="supdtl">

</div>
</div>
<div class="form-group" > 
<label class="control-label col-lg-2" for="suptype" > Type </label>
<div class="col-lg-10">
<select class="form-control" name="suptyp" id="suptype"> <option>Whole Sale </option>
<option>Retail</option>

</select>  

</div>
</div>

</div>

<div class="form-group pull-right">
<button class="btn btn-primary " type="submit" value="<?php echo $catgid; ?>" name="catgid"> Add details </button>
</div>
</div>
</form>


</body>
</html>