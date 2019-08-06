<?php

if($_POST["submit"]) {
    $recipient="seon5.sc@gmail.com";
    $subject="Rental request for Chevrolet Cruze Sedan";
    $FirstName=$_POST["fname"];
    $LastName=$_POST["lname"];
    $email=$_POST["email"];

    $mailBody="First Name: $fname\n Email: $email\n\n Date in: $datein \n Date Out: $dateout";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p> Confirmed. </p>";
}

?>

<!DOCTYPE HTML>
<html lang="en">
<style>

@font-face 
{
    font-family: aquawax_pro_trialdemibold;
    src: url('aquawax-pro-demibold-trial-webfont.woff2') format('woff2'),
         url('aquawax-pro-demibold-trial-webfont.woff') format('woff');
    font-weight: normal;
    font-style: normal;

}
	
.text 
{
  	color:white;
  	font-size: 25px;
  	position: relative;
  	font-family: Montserrat Regular;
  	text-align: left;
	padding-left: 20px;
  	width: auto;
  	display: inline-block;
}
	
.textl 
{
  	color:white;
  	font-size: 25px;
  	position: inherit;
  	font-family: Montserrat Regular;
  	text-align: left;
	padding-left: 20px;
  	width: auto;
  	display: inline-block;
}

.texto
{
	color:white;
  	font-size: 35px;
  	position: inherit;
  	font-family: Montserrat Bold;
  	text-align: left;
  	width: auto;
  	display: inline-block;
}
		
}
	
.lefttext
{
	text-align: left;
	align-content: center;
	position: absolute;
  	left: 150px;
  	width: 200px;
  	height: 120px;
}
.lrmgs
{
	margin-left: 18%;
	margin-right: 18%;		
}

.subheadertext
{
	text-align: center;
	font-family: Montserrat Bold;
	font-size: 80px;
	color: black;
	padding-top: 1%;
}

.headertext 
{
  	color: white;
  	font-size: 25px;
  	position: relative;
  	font-weight: bold;
  	font-family: HelveticaNeue;
  	text-align: center;
  	width: auto;
  	display: inline-block;	
}
	
.container 
{
  	text-align: center;
	font-size: 20;
	padding: 20px;
}
	
.bottomleft 
{
 	position: absolute;
 	bottom: 0px;
 	left: 16px;
  	font-size: 18px;
}

.break
{
	border-style: none;
	border-color: black;
	padding: 0px;
	border-radius: 0px;
	width: 100%;
	height: auto;
	background-color: white;
	display: inline-block;
  	color: white;
  	font-size: 60;
  	position: relative;
  	font-family: HelveticaNeue;
  	text-align: center;
}

.box
{
	border-style: none;
	border-color: black;
	border-radius: 20px;
	width: auto;
	height: auto;
	background-color: rgba(255,255,255, 0.3);
	display: inline-block;
	padding: 20px;
}
	
.boxheader
{
	border-style: none;
	border-color: black;
	padding: 0px;
	border-radius: 0px;
	width: 100%;
	height: auto;
	background-color: rgba(135,135,135, 0.75);
	display: inline-block;
  	color: white;
  	font-size: 50px;
  	position: relative;
  	font-family: HelveticaNeue;
  	text-align: center;
}
	
.boxheaderb
{
	border-style: none;
	border-color: black;
	border-radius: 0px;
	width: 100%;
	height: auto;
	background-color: black;
	display: inline-block;
  	color: white;
  	font-size: 20px;
  	position: relative;
  	font-family: khmer sangam mn;
  	text-align: center;
}
	
.boxheaderp2
{
	border-style: none;
	border-color: black;
	padding: 0px;
	border-radius: 0px;
	width: 100%;
	height: auto;
	background-color: white;
	display: inline-block;
  	color: black;
  	font-size: 60;
  	position: relative;
  	font-family: HelveticaNeue;
  	text-align: center;
}
	
.footer 
{
	border-style: solid;
	border-color: black;
	border-radius: 0px;
  	position: relative;
  	left: 0;
  	bottom: 0;
  	width: 100%;
  	background-color: white;
  	color: white;
  	text-align: center;
}
	
	
.btn-group 
{
	display: flex;
	align-items: center;
  	justify-content: center;
	width: auto;
}

.btn-group-wrap
{
	display: inline-block;
	padding-bottom: 10px;
}

.btn
{
	padding-right: 10px;
	font-size: 27;
	color: white;		
}

.con 
{
  	text-align: center;
}

.contain
{	
	text-align: center;
	font-size: 10;
	padding: 20px;		
}

.confollow
{	
	position: inherit;
	text-align: center;
	font-size: 10;
	padding: 20px;
	width: auto;
}

.conbox
{
	opacity: 0.5;
	border-style: none;
	border-color: black;
	border-radius: 20px;
	width: 100%;
	height: auto;
	background-color: rgba(77,77,77, 1);
	display: inline-block;
	padding: 20px;
}

.conboxform
{
	opacity: 0.5;
	border-style: none;
	border-color: black;
	border-radius: 20px;
	width: 100%;
	height: auto;
	background-color: rgba(77,77,77, 1);
	display: inline-block;
	padding: 20px;
	font-size: 25px;
	font-family: khmer sangam mn;
}

.ctcbox
{
	opacity: 0.5;
	border-style: none;
	border-color: black;
	border: 20%;
	border-radius: 0px;
	width: 100%;
	height: 100%;
	background-color: rgba(77,77,77, 1);
	display: inline-block;
	padding: 20px;
}

.cen 
{
    position:inherit;
    width:300px;
    height:300px;
    background:#063;
    bottom:0px;
    right:25%;
    left:50%;
    margin-left:-150px;
}
	
.center
{
	position: relative;
  	left: 0;
  	top: 50%;
 	width: 100%;
  	text-align: center;
  	font-size: 120px;	
}
	
.centerleft
{
	padding-top: 1%;
	position: relative;
  	left: 0;
 	width: 100%;
  	text-align: left;		
}

.cd-section
{
	width: 100%;
	background-image: url(beach.png);
  	background-size: cover;
  	background-repeat: repeat-x,repeat-y;
 	background-position: center center;
	background-attachment: fixed'';
}

.cd-section--bg-fixed 
{
  	min-height: 100vh;
	background-image: url(beach.png);
  	background-attachment: fixed;
}
	
</style>

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button 
{
  	background-color: #4CAF50;
  	color: white;
  	padding: 14px 20px;
  	margin: 8px 0;
  	border: none;
  	cursor: pointer;
  	width: 100%;
  	opacity: 0.9;
}

button:hover 
{
  	opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn 
{
  	padding: 14px 20px;
  	background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn 
{
  	float: center;
  	width: 50%;
}

/* Add padding to container elements */
.container 
{
  	padding: 16px;
	border: none;
}

/* Clear floats */
.clearfix::after 
{
  	content: "";
  	clear: both;
  	display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
	
</style>

<style>
	
@media screen and (max-width: 600px) 

{
	input[type=text], input[type=password], input [type=date] 
	{
  	width: 100%;
	}
	
  	div.boxheader
	
	{
		font-size: 20px;
		<p> <a href="https://cseonn9.github.io/Home/"><img border="0" alt="logo" src="logo.png" width="45 px" height="45 px" align ="center">  </a> T.C.F VACATION RENTALS </p>
	}
	
	div.subheadertext
	
	{
		font-size: 20px;
	}
	
	div.center
	{
		font-size: 20px;
	}
	
	div.row
	{

	}
}
	
</style>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" /> 
	<title>BookCSS</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script><link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script>document.getElementsByTagName("html")[0].className += " js";</script>
	<link rel="stylesheet" href="assets/css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	
</head>

<body>
	
<?=$thankYou ?>

<section class="cd-section cd-section--bg-fixed">

<div class="con">

	<div class="boxheader">	
	
		<div class="centerleft">	
		
	<p> <a href="https://cseonn9.github.io/Home/"><img border="0" alt="logo" src="logo.png" width="90 px" height="90 px" align ="center">  </a> T.C.F VACATION RENTALS </p>
	
		</div>

	</div>
	
	<div class="boxheaderb">	
	
		<div class="centerleft">
		
			<div class="btn-group-wrap">
 		
  				<div class="btn-group-lg">
  		
   			<a href="https://cseonn9.github.io/Home/" class="btn"> HOME </a>
   			<a href="https://cseonn9.github.io/Fleet/" class="btn"> FLEET </a>
    		<a href="https://cseonn9.github.io/ContactUs#" class="btn"> CONTACT US </a>
    
 				</div>
 		
 			</div>	
		
		</div>

	</div>
	
</div>

<div class="container"> 

<div class="row">
		
<!-- Column 1 -->
		
 	<div class="column" style="background-color:transparent; opacity: 1">
 		
 			<img src="Chevrolet_Cruze_Sedan.png" style = "width: 40%">

	</div>
 	
  	<div class="column" style="background-color:transparent; opacity: 1">
	
		<form action="index.php" style="border:none">
 
    		<h1>Sign Up</h1>
    
    		<p>Please fill in this form to make the rental transaction</p>
    
    		<hr>
    
    		<label for="fname"><b>First Name</b></label>
    		<input type="text" placeholder="First Name" name="fname" required>
    
    		<label for="lname"><b>Last Name</b></label>
    		<input type="text" placeholder="Last Name" name="lname" required>

    		<label for="email"><b>Email</b></label>
    		<input type="text" placeholder="Enter Email" name="email" required><br>

    		<br>
    		<br>

    		<label for="datein"><b>Pickup Date</b></label>
    		<input type="date" placeholder="DD/MM/YYY" name="datein" required>
    		<br>
    		<br>
    		<br>

    		<label for="dateout"><b>Return  Date</b></label>
    		<input type="date" placeholder="DD/MM/YYY" name="dateout" required>
    		<br>
   	 		<br>
    		<br>
    		<br>
    
    		<label>
      			<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    		</label>
    
    		<p> By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
     
 	 		<button type="submit" class="signupbtn">Register</button>
  
		</form>
		
		</div>	
	
</div>

</div>

</section>

</body>
</html>
