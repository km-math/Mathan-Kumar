<html>
<head>
<link rel="stylesheet" type="text/css"  href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
</head>

<body>
<img src="amazon.in_2.jpg">
<form action="accountdetails.php" method="POST" class="center out_box">
<div class="heading"> Create Account</div>  
<b> Your name </b><input type="text"  pattern="[A-Za-z]{1,15}" title="letters" name="usrname"> 
<b>Mobile number</b> <br> <span class="inline" > <input list ="countrycode" class="list" name="usrcountry" required>
<datalist id ="countrycode">
<option>  Afghanistan +93</option>
<option>  Algeria +213</option>
<option> Bangladesh +880  </option>
<option>  Brazil +55</option>
<option> Denmark +45</option>
<option> France +33</option>
<option> Iceland +354</option>
<option selected>  India +91</option>
<option> Indonesia +62</option>
<option>  Kenya +254</option>
<option>  Madagascar +261</option>
<option>  Malaysia +60</option>
<option> Ukraine +380</option>
</datalist> <input type="tel" pattern="\d{10}" title="Mobile number" placeholder="Mobile number" style="width:73%;" name="usrmobile"></span> 

<b>Email address (Optional)</b> <input type = "email" pattern="[a-z0-9][a-z0-9._-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="usrmail"> <br>  

<b>Password </b> <input type="password" pattern=".{6,}" placeholder="At least 6 characters" style="margin-bottom:0px;" name="usrpaswrd"> 
<span> <span class="info"> i </span>  Passwords must be at least 6 characters. </span>

<div class="marg"> We will send you a text to verify your phone.<br> Message and Data rates may apply.</div>

<input type="submit" class="buttn" value="continue">  </input>

<div class="signin"> Already have an account? <a href="#"> Sign in <i class="fa fa-caret-right"></i></a></div>
</form>

</body>
