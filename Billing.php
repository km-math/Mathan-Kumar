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
$subcat=$_POST['subcatg'];
$catgid=$_POST['idcat'];
$qnty=$_POST['quanty'];
$price=$_POST['price'];
$value= $qnty*$price;
$gst=$value*(9/100);
$total=$gst+$gst+$value;
$invoice=10005;

$getscat="SELECT `SubCategory id` FROM subcategory where `SubCategory Name`='$subcat'";
$exescat=mysql_query($getscat) or die( mysql_error());

while($valscat=mysql_fetch_array($exescat))
		{ $scatgid=$valscat[0];}

$getcmpid="SELECT `Company id` FROM Category where `Category id`='$catgid'";
$execmpid=mysql_query($getcmpid) or die (mysql_error());
while($valcmpid=mysql_fetch_array($execmpid))
		{ $cmpid=$valcmpid[0];}
$getcmpdtl="SELECT `Company Name`,`Contact no`,`GST Code` FROM companydetails where `Company id`='$cmpid'";
$execmpdtl=mysql_query($getcmpdtl) or die (mysql_error());

$getcatnam="SELECT `Category Name` FROM category where `Category id`='$catgid'";
$execatnam=mysql_query($getcatnam) or die( mysql_error());

while($valcatg=mysql_fetch_array($execatnam))
		{ $catg=$valcatg[0];}

$getsup="SELECT `Supplier Name` FROM supplierdetails where `SubCategory id`='$scatgid'";
$exesup=mysql_query($getsup) or die( mysql_error());

while($valsup=mysql_fetch_array($exesup))
		{ $supnam=$valsup[0];}

$stck="INSERT INTO stockmaster (`Category Name`,`SubCategory Name`,`Stock Quantity`,`Rate PerQuantity`,MRP,`Company id`)values ('$catg','$subcat','$qnty','$price','$total','$cmpid')";	
$exestck=mysql_query($stck) or die( mysql_error());
?>





<div class="panel panel-default billpnl">
<legend class="panel-heading text-center" style="font-size:24px;"> Bill Details </legend>

<table border class="billtbl">

<?php 
while($valcmpdtl=mysql_fetch_array($execmpdtl))
		{ ?>
<tr>   <th colspan='2' rowspan='4'> Company Name: <span class="cmpstyl"> <?php echo $valcmpdtl[0]; ?> </span> </th>
<th colspan='3'> Invoice No: <span class="datstyl"> <?php echo $invoice; ?> </span> </th>
</tr>
<tr> <th colspan='3'> Date: <span class="datstyl"> <?php echo date("d-m-Y"); ?> </span> </th> </tr>
<tr> <th colspan='3'>Contact No: <span class="txtstyl"> <?php echo $valcmpdtl[1]; ?> </span> </th></tr>
<tr> <th colspan='3'>GST Code: <span class="txtstyl"><?php echo $valcmpdtl[2]; ?> </span> </th></tr>
		<?php } ?>
<tr> 
<th class="text-center"> Category</th>
<th class="text-center"> Sub-Category</th>
<th class="text-center"> Quantity</th>
<th class="text-center"> Cost per</th>
<th class="text-center"> Value</th>
</tr>

<tr class="maincont"> 
<td class="txtstyl"> <?php echo $catg; ?> </td>
<td class="txtstyl"> <?php echo $subcat; ?> </td>  
<td class="txtstyl"> <?php echo $qnty; ?> </td>
<td class="txtstyl"> <?php echo $price; ?> </td>
<td class="txtstyl"> <?php echo $value; ?> </td>

</tr>
<tr> 
     <th colspan='4'class="text-right"> CGST (9%) = </th>
	 <td class="txtstyl"> <?php echo $gst; ?>  </td>
</tr>
<tr>
     <th colspan='4'class="text-right"> SGST (9%) = </th>
	 <td class="txtstyl"> <?php echo $gst; ?>  </td>
</tr>
<tr>
	 <th colspan='4'class="text-right"> Total = </th>  
<td class="txtstyl"> <?php echo $total; ?>  </td>
</tr>

</table>
<div class="text-right">
<a href="cust_dtl.php"> <button type="button" class="btn btn-primary"> Continue </button> </a>
</div> 
</div>

</body>
</html>