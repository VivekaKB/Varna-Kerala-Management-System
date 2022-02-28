<!DOCTYPE html>
<html lang="zxx">
<?php
include("connectionI.php");
session_start();
if(isset($_POST['confirm']))
{
	$amount_to_pay=$_POST['amount'];
	//echo "amount=".$amount_to_pay;
	$account_no=$_POST['account_no'];
	//echo "account_no=".$account_no;
	$result=mysqli_query($con,"SELECT SUM(amount) AS sum1 FROM payment where payment_type='credit' AND user_account='$account_no'") or die("error");
$row=mysqli_fetch_array($result);
$credit_sum=$row['sum1'];
//echo echo "credit_sum=".$credit_sum;
$result1=mysqli_query($con,"SELECT SUM(amount) AS sum2 FROM payment where payment_type='debit' AND user_account='$account_no'") or die("error");
$row1=mysqli_fetch_array($result1);
$withdraw_sum=$row1['sum2'];
//echo echo "withdraw_sum=".$withdraw_sum;
$balance_amount=$credit_sum-$withdraw_sum;
if($amount_to_pay<$balance_amount)
{
 	$query = "INSERT INTO payment(userid,user_account,transfer_account,payment_type,amount,remark)VALUES('$_SESSION[user]','$account_no','ADMIN ACCOUNT','debit','$amount_to_pay','success')";	
 	if(mysqli_query($con,$query))
	{
		
		$r5=mysqli_query($con,"SELECT MAX(bill_no+1) AS bill_no FROM studchild");
	$row5=mysqli_fetch_array($r5);
	$bno=$row5['bill_no'];
	 mysqli_query($con,"UPDATE studchild SET bill_no='$bno' WHERE id='$_COOKIE[apply_id]'");
	 
	 $status="applied";
     header("location:bill1.php?bill_no=$bno");
	}
	else
	{
	$status="error";
	header("location:payment.php?status=$status");
	}
}
else
{
	$status="balance";
	header("location:payment.php?status=$status");
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
<?php include("header.php"); ?>
	
	<!-- breadcrumb -->
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Payment Confirm</li>
		</ol>
	</nav>
	<!-- breadcrumb -->
	<!-- //banner -->
<?php
error_reporting(0);
$amount=$_REQUEST['amount'];
$account_no=$_REQUEST['account_no'];
?>
	<!-- register -->
	<div class="login-w3ls22 22py-5" style="background-image:url(images/bg7.jpg)">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="text-center">Payment Confirm</h3>
			<!-- content -->
			<div class="sub-main-w322 pt-md-4">
				<form method="post" id="register_form">
					
					 <div class="form-style-agile form-group py-lg-3">
						<label><b>
							Account Number</b>
							<i class="fas fa-paint-brush"></i>
						</label>
						<input class="form-control" type="text" name="account_no" id="password2" value="<?php echo $account_no; ?>" readonly >
					</div>
                    
                    
                    <div class="form-style-agile form-group py-lg-3">
						<label><b>
							Amount</b>
							<i class="fas fa-rupee-sign"></i>
						</label>
						<input class="form-control" type="text" name="amount" id="password2" value="<?php echo $amount; ?>" readonly  >
					</div>
                    
					<!-- //switch -->
					<input type="submit" value="Confirm Payment" name="confirm">
				</form>
			</div>
			<!-- //content -->
		</div>
	</div>
    