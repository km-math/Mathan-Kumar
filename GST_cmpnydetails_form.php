<html>
<head>
<link rel="stylesheet" type="text/css"  href="details_form.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
<form action="cmp_details_entr_db.php" method="POST" class="form-horizontal">

<div class="panel panel-primary fm">
<legend class="panel-heading"> Company Details </legend>
<div class="form-group">
<label class="control-label col-lg-2" for="name" > Company Name: </label>
<div class="col-lg-10">
<input type="text" class="form-control xy pad" id="name" placeholder="Enter Company name" name="cname" pattern="[A-Za-z\s]{1,15}" title="letters" autofocus>  </input>
</div>
</div>
<div class="form-group">
<label class="control-label col-lg-2" for="address"> Address </label>
<div class="col-lg-10">
<textarea class="form-control pad" type="text" rows="5" cols="20" id="address" name="cadd" placeholder="Enter your Address">  </textarea>
</div>
</div>
<div class="form-group">
<label class="control-label col-lg-2" for="ctname" > City </label>
<div class="col-lg-10">
<input type="text" class="form-control xy pad" id="ctname" placeholder="City" name="ctyname" pattern="[A-Za-z]{1,15}" title="letters">  </input>
</div>
</div>
<div class="form-group">
<label class="control-label col-lg-2" for="stname" > State </label>
<div class="col-lg-10">
<input type="text" class="form-control xy pad" id="stname" placeholder="State" name="sttname" pattern="[A-Za-z\s]{1,20}" title="letters">  </input>
</div>
</div>
<div class="form-group">
<label class="control-label col-lg-2" for="pin" > Pincode </label>
<div class="col-lg-10">
<input type="text" class="form-control xy pad" id="pin" placeholder="Pincode" name="pcode" pattern="[0-9]{6}" title="number">  </input>
</div>
</div>
<div class="form-group">
<label class="control-label col-lg-2" for="mobile"> Contact No: </label>
<div class="col-lg-10">
<input class="form-control " type="tel" pattern="\d{10}" id="mobile" name="cmob" placeholder="Mobile Number">  </input>
</div>
</div>
<div class="form-group">
<label class="control-label col-lg-2" for="code" > GST Code: </label>
<div class="col-lg-10">
<input class="form-control" type="text"  id="code" name="cgst" >  </input>
</div>
</div>
<div class="form-group">
<button class="btn btn-primary center-block" type="submit" value="Continue" name="cont" > Continue </button>
</div>
</div>
</form>
</body>
</html>

