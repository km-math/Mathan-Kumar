<html>
<head>
<link rel="stylesheet" type="text/css"  href="details_form.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>

<?php
include('headerfile.php');
$cmpnam=$_POST['cname'];
$cmpadd=$_POST['cadd'];
$cmpcty=$_POST['ctyname'];
$cmpstt=$_POST['sttname'];
$cmppin=$_POST['pcode'];
$cmpmob=$_POST['cmob'];
$cmpgst=$_POST['cgst'];
$cmpinsert="insert into companydetails (`Company Name`,`Address`, City, State,`Pin Code`,`Contact no`,`GST Code`) values('$cmpnam','$cmpadd','$cmpcty','$cmpstt','$cmppin','$cmpmob','$cmpgst')";
$cmpexe=mysql_query($cmpinsert) or die (mysql_error());

$cmpnyid="SELECT `Company id`FROM companydetails where `Company Name`='$cmpnam'";
$cmpidexe=mysql_query($cmpnyid) or die (mysql_error());
while($getval=mysql_fetch_array($cmpidexe))
{
$cmpid=$getval[0];
echo $cmpid;
}
?>

<body>

<form action="bank_details_db.php" method="POST" class="form-horizontal">
<div class="panel panel-primary fm">
<legend class="panel-heading"> Bank Details </legend>
<div class="form-group">
<label class="control-label col-lg-2" for="bname" > Bank Name: </label>
<div class="col-lg-10">
<input type="text" class="form-control xy pad" id="bname" name="bnknam" pattern="[A-Za-z\s]{1,25}" autofocus>  </input>
</div>
</div>
<div class="form-group">
<label class="control-label col-lg-2" for="accname" > Acc Holder Name: </label>
<div class="col-lg-10">
<input type="text" class="form-control xy pad" id="accname" name="acchnam" pattern="[A-Za-z\s]{1,25}">  </input>
</div>
</div>
<div class="form-group">
<label class="control-label col-lg-2" for="accnum" > Account Number: </label>
<div class="col-lg-10">
<input type="text" class="form-control xy pad" id="accnum" name="accnumb" pattern="[0-9]{16,17}">  </input>
</div>
</div>
<div class="form-group">
<label class="control-label col-lg-2" for="ifsc" > IFSC Code: </label>
<div class="col-lg-10">
<input type="text" class="form-control xy pad" id="ifsc" name="ifscod" pattern="^[A-Z]{4}[0-9]{7}$">  </input>
</div>
</div>

<div class="form-group">
<button class="btn btn-primary center-block" type="submit" value="<?php echo $cmpid; ?>" name="bnkcont" > Continue </button>
</div>

</div>
</form>

</body>
</html>