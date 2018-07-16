?>
<body>

<form action="update_cmpdetails.php" method="POST" class="form-horizontal">
<div class="panel panel-primary fm">
<legend class="panel-heading"> Company Details </legend>
<div class="form-group">
<label class="control-label col-lg-2" for="name" > Company Name </label>
<div class="col-lg-10">
<input type="text" class="form-control xy pad" id="name" value="<?php echo $value[0]?>" name="upname" pattern="[A-Za-z]{1,15}" title="letters" disabled>  </input>
</div>
</div>
<div class="form-group">
<label class="control-label col-lg-2" for="address"> Address </label>
<div class="col-lg-10">
<textarea class="form-control pad" type="text" rows="5" cols="20" id="address" name="upadd" value="<?php echo $value[1]?>">  </textarea>
</div>
</div>
<div class="form-group">
<label class="control-label col-lg-2" for="mobile"> Contact No </label>
<div class="col-lg-10">
<input class="form-control " type="tel" pattern="\d{10}" id="mobile" name="upmob" value="<?php echo $value[2]?>">  </input>
</div>
</div>
<div class="form-group">
<label class="control-label col-lg-2" for="code" > GST Code: </label>
<div class="col-lg-10">
<input class="form-control" type="text"  id="code" name="upgst" value="<?php echo $value[3]?>" >  </input>
</div>
</div>
<?php




	
	
	<div class="form-group">
<button class="btn btn-primary center-block" type="submit" value="Update" name="cont" > Update </button>
</div>
</div>
</form>






<br> <br>
<div class="panel panel-primary fm post">

<table class="table table-bordered">
<thead>
<tr>
<th> Company Name  </th>
<th> Address  </th>
<th> Mobile No </th>
<th> GST Code  </th>
</tr>
</thead>
<tbody>
<tr> 
<td> <?php echo $cmpnam; ?> </td> 
<td> <?php echo $cmpadd; ?></td> 
<td><?php echo $cmpmob; ?> </td> 
<td><?php echo $cmpgst; ?> </td> 
</tr>
</tbody>
</table>




=====================================



<body>
<div class="panel panel-primary fm post">

<table class="table table-bordered">
<thead>
<tr>
<th> Company Name  </th>
<th> Address  </th>
<th> Mobile No </th>
<th> GST Code  </th>
</tr>
</thead>
<tbody>
<tr> 
<td> <?php echo $upcmpnam; ?> </td> 
<td> <?php echo $upcmpadd; ?></td> 
<td><?php echo $upcmpmob; ?> </td> 
<td><?php echo $upcmpgst; ?> </td> 
</tr>
</tbody>
</table>
</div>
<form action="GST_catgdetails_form.php" method="POST" class="form-horizontal">
<div class="form-group ">
<button class="btn btn-primary center-block" type="submit" value="Continue" name="cont" > Continue to Next Page </button>
</div>
</form>

</body>
</html>