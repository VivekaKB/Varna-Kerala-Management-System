<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
if(isset($_REQUEST['a']))
{
	if($_REQUEST['a']=='error')
	{
	?>
    <script>
	alert("SORRY :USERNAME ALREADY EXIST");
	</script>
    <?php
}
elseif($_REQUEST['a']=='error1')
	{
	?>
    <script>
	alert("SORRY :PHONE NUMBER ALREADY EXIST.");
	</script>
    <?php
}
elseif($_REQUEST['a']=='error2')
	{
	?>
    <script>
	alert("SORRY :EMAIL-ID ALREADY EXIST.");
	</script>
    <?php
}
else
{}
}
?>

<!DOCTYPE html>
<html lang="zxx">

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
    return this.optional(element) || phone_number.length == 10  && 
    phone_number.match(/^(\+?0-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/);
}, "Please specify a valid phone number  ...");

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
					first_name: 
					{
						required: true,
						lettersonly: true			
					},// simple rule, converted to {required:true}
					last_name: 
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
					phone_number: 
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
	{
	$('#t').datepick({
		
	dateFormat:"dd-mm-yyyy",
	minDate:new Date('1964-01-01'),
	maxDate: new Date('2014-12-31')
		
	})
	//$('#t').datepick();
}});

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
	<!-- header -->
	<?php include("header.php"); ?>
	<!-- breadcrumb -->
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Customer Register Form</li>
		</ol>
	</nav>
	<!-- breadcrumb -->
	<!-- //banner -->

	<!-- register -->
	<div class="login-w3ls py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">Register
				<span class="font-weight-bold">now</span>
			</h3>
			<!-- content -->
			<div class="sub-main-w3 pt-md-4">
				<form action="c_insert.php" method="post" id="register_form" >
                   <?php
				include("connectionI.php");
				$query="SELECT * FROM customer ORDER BY id DESC LIMIT 1";
		$result = mysqli_query($con,$query);
		$row=mysqli_fetch_array($result);
		$userid=$row['id'];
		if($userid==0)
		 {
		$userid=1;
		 }
		 else
		 {
			  $userid=$userid+1;
		 }
		 $uid="CUSTOMER-".$userid;
		 
		?>
        <div class="form-style-agile form-group">
						<label>
							User ID
							<i class="fas fa-user"></i>
						</label>
						<input placeholder="Enter Your Username" class="form-control"  type="text" value="<?php echo $uid;?>" readonly>
					</div>
           
					<div class="form-style-agile form-group">
						<label>
							First Name
							<i class="fas fa-user"></i>
						</label>
						<input placeholder="Your Fist Name" class="form-control" name="first_name" type="text" 
					</div>
					<div class="form-style-agile form-group">
						<label>
							Last Name
							<i class="fas fa-user"></i>
						</label>
						<input placeholder="Your Last Name" class="form-control" name="last_name" type="text" >
					</div>
					<div class="form-style-agile form-group">
						<label>
							Date Of Birth
							<i class="fas fa-calendar"></i>
						</label>
						<input placeholder="Your Date of Birth" class="form-control" name="date_of_birth" type="date" id='t' >
					</div>
					<div class="form-style-agile form-group py-lg-3">
						<label>
							Gender
							<i class="fas fa-child"></i>
						</label>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Male</label>
						<input   name="Gender" type="radio" Value="Male" checked> 
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Female</label>
						<input  name="Gender" type="radio" Value="Female">
						
					</div>
					<div class="form-style-agile form-group">
						<label>
							House
							<i class="fas fa-building"></i>
						</label>
						<input placeholder="Enter House Name" class="form-control" name="House" type="text" >
					</div>
					<div class="form-style-agile form-group">
						<label>
							Street
							<i class="fas fa-street-view"></i>
						</label>
						<input placeholder="Enter Street Name" class="form-control" name="Street" type="text" >
					</div>
					<div class="form-style-agile form-group">
						<label>
							City
							<i class="fas fa fa-road"></i>
						</label>
						<input placeholder="Enter Your City" class="form-control" name="City" type="text" >
					</div>
					<div class="form-style-agile form-group">
						<label>
							State
							<i class="fas fa-map"></i>
						</label>
						<input placeholder="Enter Your State" class="form-control" name="State" type="text" >
					</div>
					<div class="form-style-agile form-group">
						<label>
							Phone
							<i class="fas fa-phone"></i>
						</label>
						<input placeholder="Enter Your Phone Number" class="form-control" name="Phone" type="text">
					</div>
					<div class="form-style-agile form-group">
						<label>
							Email
							<i class="fas fa-envelope"></i>
						</label>
						<input placeholder="Email" class="form-control" name="Email" type="email" >
					</div>
                         <div class="form-style-agile form-group">
						<label>
							Username
							<i class="fas fa-user"></i>
						</label>
						<input placeholder="Enter Your Username" class="form-control" name="Username" type="text">
					</div>
					
					<div class="form-style-agile form-group">
						<label>
							Password
							<i class="fas fa-unlock-alt"></i>
						</label>
						<input placeholder="Password" class="form-control" name="Password" id="password1" type="password" >
					</div>
					<div class="form-style-agile form-group">
						<label>
							Confirm Password
							<i class="fas fa-unlock-alt"></i>
						</label>
						<input placeholder="Confirm Password" class="form-control" name="password2" id="password2" type="password">
					</div>
					<!-- switch -->
                    <div class="form-style-agile form-group py-lg-3">
						<label>
							<b>Terms and Condition</b><br>
                   
		
						</label>
                        <ol type="1" style="font-family:'Times New Roman', Times, serif; font-size:14px ; color:#CF0">
                        <li>All fields are mandatory </li>
                        <li>Once registered, the customer would be directed to login page.Customer must login with his/her username and password in order to purchase the item</li>
                        <li> Once payment is done, amount will not be refunded.</li>
                        <li> Ordered items would be delivered to the specified address with atmost 7 working days.Make sure the contact number entered is a currently avaialable number</li>
                        <li> Customers are welcome to purchase more art items in future by logging into the site by registered username and password.</li>
                        </ol>
					</div>
                    
			<!--		<ul class="list-unstyled list-login">
						<li class="switch-agileits float-left">
							<label class="switch  text-capitalize">
								<input type="checkbox">
								<span class="slider-switch slider-switch-2 round"></span>
								I Accept to the Terms & Conditions
							</label>
						</li>
					</ul>-->
					<!-- //switch -->
					<input type="submit" value="Register" name="Register">
				</form>
			</div>
			<!-- //content -->
		</div>
	</div>
	<!-- //register -->

	<!-- brands -->
<!--	<div class="brands-w3ls py-md-5 py-4">
		<div class="container py-xl-3">
			<ul class="list-unstyled">
				<li>
					<i class="fab fa-supple"></i>
				</li>
				<li>
					<i class="fab fa-angrycreative"></i>
				</li>
				<li>
					<i class="fab fa-aviato"></i>
				</li>
				<li>
					<i class="fab fa-aws"></i>
				</li>
				<li>
					<i class="fab fa-cpanel"></i>
				</li>
				<li>
					<i class="fab fa-hooli"></i>
				</li>
				<li>
					<i class="fab fa-node"></i>
				</li>
			</ul>
		</div>
	</div>-->
	<!-- //brands -->

	<?php include("footer.php");?>

	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->
	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling -->

	<!-- move-top -->
	<script src="js/move-top.js"></script>
	<!-- easing -->
	<script src="js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="js/edulearn.js"></script>

	<!-- //Js files -->


</body>

</html>