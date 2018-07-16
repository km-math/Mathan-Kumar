<html>
<head>
<link rel="stylesheet" type="text/css"  href="login_style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
</head>

<body>
<form action="logindetails.php" method="POST" class="center out_box">
<div class="heading center"> Login </div>
<b>User Name</b> <input type = "text" name="usrname"> <br>
<b>Password </b> <input type="password" pattern=".{6,}" placeholder="At least 6 characters" style="margin-bottom:0px;" name="usrpaswrd" required> 
<span> <span class="info"> i </span>  Passwords must be at least 6 characters. </span>

<input type="submit" class="buttn" value="Submit" >  </input>

</form>
</body>
</html>