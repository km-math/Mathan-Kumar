<html>
<head>
<link rel="stylesheet" type="text/css"  href="details_form.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<form action="bank_details_db.php" method="POST" class="form-horizontal">
<div class="panel panel-primary fm">
<legend class="panel-heading"> Bank Details </legend>
<div class="form-group">
<label class="control-label col-lg-2" for="bname" > Bank Name: </label>
<div class="col-lg-10">
<input type="text" class="form-control xy pad" id="bname" name="bnkname" pattern="[A-Za-z\s]{1,25}" autofocus required>  </input>
</div>
</div>
<div class="form-group">
<label class="control-label col-lg-2" for="accname" > Acc Holder Name: </label>
<div class="col-lg-10">
<input type="text" class="form-control xy pad" id="accname" name="acchname" pattern="[A-Za-z\s]{1,25}" required>  </input>
</div>
</div>
<div class="form-group">
<label class="control-label col-lg-2" for="accnum" > Account Number: </label>
<div class="col-lg-10">
<input type="text" class="form-control xy pad" id="accnum" name="accnumb" pattern="[0-9]{16,17}" required>  </input>
</div>
</div>
<div class="form-group">
<label class="control-label col-lg-2" for="ifsc" > IFSC Code: </label>
<div class="col-lg-10">
<input type="text" class="form-control xy pad" id="ifsc" name="ifscod" pattern="^[A-Z]{4}[0-9]{7}$" required>  </input>
</div>
</div>

<div class="form-group">
<button class="btn btn-primary center-block" type="submit" value="Continue" name="cont" > Continue </button>
</div>

</div>
</form>

</body>


</html>