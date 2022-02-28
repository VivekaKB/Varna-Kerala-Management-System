<!DOCTYPE html>
<html lang="zxx">
<?php
error_reporting(0);
$amount=$_REQUEST['amount'];
include("connectionI.php");
	if(isset($_POST['proceed']))
	{
	$account_no=$_POST['account_no'];
	$password=$_POST['password'];
	$match1="SELECT * FROM account WHERE account_no='$account_no' AND password='$password'";
	$qry1 = mysqli_query($con,$match1);
	$num_rows1 = mysqli_num_rows($qry1);
	if($num_rows1>0)
		{
		header("location:payment_confirm1.php?amount=$_POST[amount]&&account_no=$account_no");
		}
	else
		{
		$error="invalid";
		header("location:payment1.php?status=$error");
		}
	}
?>
<head>
	<title>VARNAKERALA MANAGEMENT SYSTEM | Home :: w3layouts</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Edulearn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<!-- Bootstrap-Core-Css -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Style-Css -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Font-Awesome-Icons-Css -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //Web-Fonts -->
    
    
    
    
    
   <script type="text/javascript" src="jquery_002.js"></script>
<script type="text/javascript" src="jquery.validate.min.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
jQuery.validator.addMethod("notEqual", function(value, element, param) {return this.optional(element) || value != param;}, "Please enter your name");

$.validator.addMethod("pwcheck",
function(value, element) {
   return /^[A-Za-z0-9\d=!\-@._*]+$/.test(value);
});
jQuery.validator.addMethod("phoneUS", function(phone_number, element) {
    phone_number = phone_number.replace(/\s+/g, "");
    return this.optional(element) || phone_number.length > 9 && phone_number.length < 11 &&
    phone_number.match(/^(\+?0-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/);
}, "Please specify a valid phone number");

$(document).ready(function() {jQuery.validator.addMethod("lettersonly", function(value, element) {
  return this.optional(element) || /^[a-z ]+$/i.test(value);
}, "Letters only please");

			$("#register_form").validate({
				submitHandler:function(form) 
				{
					SubmittingForm();
				},
				rules: 
				{
					First_Name: 
					{
						required: true,
						lettersonly: true			
					},// simple rule, converted to {required:true}
					Last_Name: 
					{
						required: true,
						lettersonly: true			
					},
					house: 
					{
						required: true
					},
					street:
					{
						required: true
					},
					city:
					{
						required: true,
						lettersonly: true			
					},
					state:
					{
						required: true,
						lettersonly: true			
					},
					designation:
					{
						required: true
					},
					status:
					{
						required: true
					},
					Phone: 
					{
						required: true,
						phoneUS:true		
					},
					email: 
					{
						required: true,
					    email: true	
					},
					username: 
					{
						required: true
					},
					password: 
					{
						required: true,
						rangelength: [6,20]
						
					},
					password2: 
					{
						required: true,
						equalTo:'#password1'
					},
					comment: 
					{
						required: true
					}
					},
					messages: 
					{
						comment: "Please enter a comment.",
						password2: "Password Doesn't Matched"
					}
			});	
		});	
</script>
<link type="text/css" href="jquery.datepick.css" rel="stylesheet">
<script type="text/javascript" src="jquery.datepick.js"></script>
<script type="text/javascript">
$(function() {
	$('#t').datepick();
});

function showDate(date) {
	alert('The date chosen is ' + date);
}
</script>
<script type="text/javascript">
$(function() {
	$('#tt').datepick();
});

function showDate(date) {
	alert('The date chosen is ' + date);
}
</script>

 




</head>

<body>
<?php include("header.php"); 

?>
	
	<!-- breadcrumb -->
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Account Signin Form</li>
		</ol>
	</nav>
	<!-- breadcrumb -->
	<!-- //banner -->


<?php 
error_reporting(0);
$error=$_REQUEST['status'];
if ($error == "invalid")
{
?>
<p id="try" style="font-size:18px; color:#F00; text-align:center;"><?php echo "Sorry, Invalid Datas : Try again"; echo "<br />";?></p>
<?php
}
if ($error == "error")
{
?>
<p id="try" style="font-size:18px; color:#F00; text-align:center;"><?php echo "Sorry, Error in Transaction"; echo "<br />";?></p>
<?php
}
if ($error == "balance")
{
?>
<p id="try" style="font-size:18px; color:#F00; text-align:center;"><?php echo "Sorry, Insufficient Balance"; echo "<br />";?></p>
<?php
}
?>	  	



	<!-- register -->
	<div class="login-w3ls22 22py-5" style="background-image:>
		<div class="container py-xl-5 py-lg-3">
			<h3 class="text-center" style="font-family:Georgia, 'Times New Roman', Times, serif"><b>Account SignIN</b></h3>
			<!-- content -->
			<div class="sub-main-w322 pt-md-4">
				<form method="post" id="register_form">
					
					 <div class="form-style-agile form-group py-lg-3">
						<label><b>
							Account Number</b>
							<i class="fas fa-paint-brush"></i>
						</label>
						<input class="form-control" type="text" name="account_no" id="password2" >
					</div>
                    
                    
                    <div class="form-style-agile form-group py-lg-3">
						<label><b>
							Password</b>
							<i class="fas fa-rupee-sign"></i>
						</label>
						<input class="form-control" type="password" name="password" id="password2"  >
                        <input type="hidden" name="amount" value="<?php echo $amount; ?>"  >
					</div>
                    
					<!-- //switch -->
					<input type="submit" value="Proceed to Payment" name="proceed" align="middle">
				</form>
			</div>
			<!-- //content -->
		</div>
	</div>
    