<!DOCTYPE html>
<html lang="zxx">
<?php
error_reporting(0);
$amount=$_REQUEST['amount'];
include("connectionI.php");
	if(isset($_POST['proceed']))
	{
	$account_no=$_POST['cardNumber'];
	$password=$_POST['password'];
	$match1="SELECT * FROM card WHERE cardname='$_POST[owner]' AND cardnumber='$account_no' AND cvv='$_POST[cvv]' AND emonth='$_POST[eMonth]' AND eyear='$_POST[eYear]'";
	$qry1 = mysqli_query($con,$match1);
	$num_rows1 = mysqli_num_rows($qry1);
	if($num_rows1>0)
		{
		header("location:payment_confirm.php?amount=250&&account_no=$account_no");
		}
	else
		{
		$error="invalid";
		header("location:paymentcard.php?amount=$amount&username=$_SESSION[user]&status=$error");
		}
	}
?>
<head>
	<title>VARNAKERALA MANAGEMENT SYSTEM | Home :: w3layouts</title>
	<!-- Meta tag Keywords -->
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">

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
					owner: 
					{
						required: true,
						lettersonly: true			
					},// simple rule, converted to {required:true}
					cvv: 
					{
						required: true	
					},
					cardNumber: 
					{
						required: true
					},
					eMonth:
					{
						required: true
					},
					eYear:
					{
						required: true		
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
			<li class="breadcrumb-item active" aria-current="page">Payment form</li>
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
<div class="row">
 <div class="creditCardForm">
            <div class="heading">
                <h1>Confirm Payment</h1>
            </div>
            <div class="payment">
                <form method="post" action="">
                    <div class="form-group owner">
                        <label for="owner">Card Holder Name</label>
                        <input type="text" class="form-control" name="owner">
                    </div>
                    <div class="form-group CVV">
                        <label for="cvv">CVV</label>
                        <input type="text" class="form-control" name="cvv">
                    </div>
                    <div class="form-group" id="card-number-field">
                        <label for="cardNumber">Card Number</label>
                        <input type="text" class="form-control" name="cardNumber">
                    </div>
                    <div class="form-group" id="expiration-date">
                        <label>Expiration Date</label>
                        <select name="eMonth">
                            <option value="01">January</option>
                            <option value="02">February </option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                        <select name="eYear">
                          
                            <option value="2022"> 2022</option>
                            <option value="2023"> 2023</option>
                            <option value="2024"> 2024</option>
							<option value="2025"> 2025</option>
							<option value="2026"> 2026</option>
                            
                        </select>
                    </div>
                    <div class="form-group" id="credit_cards">
                        <img src="assets/images/visa.jpg" id="visa">
                        <img src="assets/images/mastercard.jpg" id="mastercard">
                        <img src="assets/images/amex.jpg" id="amex">
                    </div>
                    <div class="form-group" id="pay-now">
                        <button type="submit" class="btn btn-default" id="confirm-purchase" name="proceed">Confirm</button>
                        <a href='payment.php?amount=<?php echo $_REQUEST[amount]; ?>' class='btn btn-danger'>By Account<a>
                    </div>
                </form>
            </div>
        </div>


</div>    