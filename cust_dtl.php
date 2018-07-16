<html> 
<head>
<link rel="stylesheet" type="text/css"  href="details_form.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>

<body>
<div class="panel panel-primary fm ">
<legend class="panel-heading"> Customer Details</legend>
<div class="panel-body">
<div> Thank You for purchasing. Kindely fill the details below. </div> <br> 
<form action="cust_dtl_db.php" method="POST" class="form-horizontal">
<div class="form-group">
<label for="custnam" class="col-lg-3 control-label"> Customer Name </label>
<div class="col-lg-9">
<input type="text" class="form-control" name="cnam" id="custnam" required>
</div>
</div>
<div class="form-group">
<label for="contnum" class="col-lg-3 control-label"> Contact Number </label>
<div class="col-lg-9">
<input type="text" class="form-control" name="cnum" id="contnum" required>
</div>
</div>
<div class="form-group">
<label for="addr" class="col-lg-3 control-label"> Address </label>
<div class="col-lg-9">
<textarea type="text" rows="5" class="form-control" name="addrs" id="addr" required> </textarea>
</div>
</div>
<button type="submit" class="btn btn-primary" > Submit </button>
</form>
<div>
</div>
</body>

</html>