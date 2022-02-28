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
			<li class="breadcrumb-item active" aria-current="page">Bank Register Form</li>
		</ol>
	</nav>
	<!-- breadcrumb -->
	<!-- //banner -->

<?php
include("connectionI.php");
if(isset($_POST['update']))
{
	
	$up= "UPDATE account SET password='$_POST[password]' WHERE userid='$_SESSION[user]'";
	if (mysqli_query($con,$up))
     {  
	   ?>
       <h4 id="try" style="font-size:18px; color:#F00; text-align:center;"><?php echo "Password Changed"; echo "<br />";?></h4>
       <?php
	}
	else
	{
	  ?>
       <h4 id="try" style="font-size:18px; color:#F00; text-align:center;"><?php echo "Unsuccessfull"; echo "<br />";?></h4>
       <?php
	}
}

if($_SESSION['type']=="student")
{

$query="SELECT * FROM studentmater WHERE id='$_SESSION[user]'";
}
elseif($)
{
	$query="SELECT * FROM account WHERE userid='$_SESSION[user]'";
}
	$result = mysqli_query($con,$query);
	$num_rows = mysqli_num_rows($result);
	$row = mysqli_fetch_array($result);
	if($num_rows>0)
	{
?>

<!-- register -->
	<div class="login-w3ls22 22py-5" style="background-image:url(images/bg7.jpg)">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="text-center">Edit DEtails</h3>
			<!-- content -->
			<div class="sub-main-w322 pt-md-4">
				<form action="" method="post" id="register_form">
					<div class="form-style-agile form-group py-lg-3">
						<label><b>
							User ID</b>
							<i class="fas fa-user"></i>
						</label>
						<input placeholder="Enter your Registartion ID" class="form-control" name="userid" value="<?php echo $_SESSION['user']; ?>" type="text" readonly >
					</div>
					 <div class="form-style-agile form-group py-lg-3">
						<label><b>
							Account Number</b>
							<i class="fas fa-lock"></i>
						</label>
						<input class="form-control" type="text" name="account_no" id="password2" value="<?php echo $row['account_no'];?>" readonly  >
					</div>
                    
                    
                    <div class="form-style-agile form-group py-lg-3">
						<label><b>
							Password</b>
							<i class="fas fa-lock"></i>
						</label>
						<input class="form-control" type="password" name="password" id="password2"  value="<?php echo $row['password'];?>"  >
					</div>
                    
					<!-- //switch -->
					<input type="submit" value="Update Account" name="update">
				</form>
			</div>
			<!-- //content -->
		</div>
	</div>
    
    
    <?php
	}
	