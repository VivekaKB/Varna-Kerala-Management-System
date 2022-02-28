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
					phone: 
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
			<li class="breadcrumb-item active" aria-current="page">Personal details</li>
		</ol>
	</nav>
	<!-- breadcrumb -->
	<!-- //banner -->

<?php
include("connectionI.php");
session_start();
$a=$_SESSION['user'];
$b=$_SESSION['userid'];
$u=explode("-",$a);
$uid=$u[1];

if(isset($_POST['update']))
{
	if($_SESSION['type']=="student")
	{
	$up= "UPDATE studmaster SET first_name='$_POST[first_name]', last_name='$_POST[last_name]', date_of_birth='$_POST[date_of_birth]', gender='$_POST[gender]', house='$_POST[house]', street='$_POST[street]', city='$_POST[city]', state='$_POST[state]', phone_number='$_POST[phone]', email='$_POST[email]', password='$_POST[password]'  WHERE id='$b'";
    
	 
	}
	elseif($_SESSION['type']=="customer")
	{
	$up= "UPDATE customer SET first_name='$_POST[first_name]', last_name='$_POST[last_name]', date_of_birth='$_POST[date_of_birth]', gender='$_POST[gender]', house='$_POST[house]', street='$_POST[street]', city='$_POST[city]', state='$_POST[state]', phone_number='$_POST[phone]', email='$_POST[email]', password='$_POST[password]'  WHERE id='$b'";
	
	}
	else
	{
	}
	
	if (mysqli_query($con,$up))
	
     {  
	  mysqli_query($con,"UPDATE login SET password='$_POST[password]' WHERE userid='$_SESSION[userid]'");
	   ?>
       <h4 id="try" style="font-size:18px; color:#F00; text-align:center;"><?php echo "Updated succesfully"; echo "<br />";?></h4>
       <?php
	}
	else
	{
	  ?>
       <h4 id="try" style="font-size:18px; color:#F00; text-align:center;"><?php echo "Unsuccessfull updation"; echo "<br />";?></h4>
       <?php
	}
	
	
	
	
}

if($_SESSION['type']=="student")
{

$query="SELECT * FROM studmaster WHERE id='$b'";
}
elseif($_SESSION['type']=="customer")
{
	$query="SELECT * FROM customer WHERE id='$b'";
}
else
{
}
	$result = mysqli_query($con,$query);
	$num_rows = mysqli_num_rows($result);
	$row = mysqli_fetch_array($result);
	?>

<!-- register -->
	<div class="login-w3ls22 22py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="text-center" style="font-family:Georgia, 'Times New Roman', Times, serif">Personal Profile</h3>
			<!-- content -->
			<div class="sub-main-w322 pt-md-4">
				<form action="" method="post" id="register_form">
					<div class="form-style-agile form-group">
						<label>
							Username
							<i class="fas fa-envelope"></i>
						</label>
						<input placeholder="Enter Your Username" class="form-control" name="username" type="text" value="<?php echo $row['username'];?>" readonly>
					</div>
					<div class="form-style-agile form-group">
						<label>
							First Name
							<i class="fas fa-user"></i>
						</label>
						<input placeholder="Your First Name" class="form-control" name="first_name" type="text" value="<?php echo $row['first_name'];?>" required>
					</div>
					<div class="form-style-agile form-group">
						<label>
							Last Name
							<i class="fas fa-user"></i>
						</label>
						<input placeholder="Your Last Name" class="form-control" name="last_name" type="text" value="<?php echo $row['last_name'];?>" required>
					</div>
					<div class="form-style-agile form-group">
						<label>
							Date Of Birth
							<i class="fas fa-calendar"></i>
						</label>
						<input placeholder="Your Date of Birth" class="form-control" name="date_of_birth" type="date" value="<?php echo $row['date_of_birth'];?>" required>
					</div>
					<div class="form-style-agile form-group py-lg-3">
						<label>
							Gender
							<i class="fas fa-child"></i>
						</label>
                        <?php if($row['gender']=="Male") 
						{?>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Male</label>
                        
						<input   name="gender" type="radio" Value="Male" checked> 
                        <?php }
						else
						{?>
                        <input   name="gender" type="radio" Value="Male" > 
                        <?php
						}

                        ?>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Female</label>
                         <?php if($row['gender']=="Female") 
						{?>
						
                        
						<input   name="gender" type="radio" Value="Female" checked> 
                        <?php }
						else
						{?>
                        <input   name="gender" type="radio" Value="Female" > 
                        <?php
						}

                        ?>
                       
					</div>
					<div class="form-style-agile form-group">
						<label>
							House
							<i class="fas fa-building"></i>
						</label>
						<input placeholder="Enter House Name" class="form-control" name="house" type="text" value="<?php echo $row['house'];?>" required>
					</div>
					<div class="form-style-agile form-group">
						<label>
							Street
							<i class="fas fa-street-view"></i>
						</label>
						<input placeholder="Enter Street Name" class="form-control" name="street" type="text" value="<?php echo $row['street'];?>" required>
					</div>
					<div class="form-style-agile form-group">
						<label>
							City
							<i class="fas fa fa-road"></i>
						</label>
						<input placeholder="Enter Your City" class="form-control" name="city" type="text" value="<?php echo $row['city'];?>" required>
					</div>
					<div class="form-style-agile form-group">
						<label>
							State
							<i class="fas fa-map"></i>
						</label>
						<input placeholder="Enter Your State" class="form-control" name="state" type="text" value="<?php echo $row['state'];?>" required>
					</div>
					<div class="form-style-agile form-group">
						<label>
							Phone
							<i class="fas fa-phone"></i>
						</label>
						<input placeholder="Enter Your Phone Number" class="form-control" name="phone" type="text" value="<?php echo $row['phone_number'];?>" required>
					</div>
					<div class="form-style-agile form-group">
						<label>
							Email
							<i class="fas fa-envelope"></i>
						</label>
						<input placeholder="Email" class="form-control" name="email" type="email" value="<?php echo $row['email'];?>" required>
					</div>
                    <div class="form-style-agile form-group">
						<label>
							Password
							<i class="fas fa-unlock-alt"></i>
						</label>
						<input placeholder="Password" class="form-control" name="password" id="password1" type="password" value="<?php echo $row['password'];?>" required>
					</div>
                    <div class="form-style-agile form-group">
						<label>
							Confirm Password
							<i class="fas fa-unlock-alt"></i>
						</label>
						<input placeholder="Confirm Password" class="form-control" name="password2" id="password2" type="password">
					</div>
                    
					<!-- //switch -->
					<input type="submit" value="Update " name="update">
				</form>
			</div>
			<!-- //content -->
		</div>
	</div>
    
 