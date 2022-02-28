<?php
error_reporting(0);
session_start();
include("connectionI.php");
$sql1="select * from saleschild WHERE user_id='$_SESSION[user]' and status='cart'";
$result1=mysqli_query($con,$sql1);
$count=mysqli_num_rows($result1);
?>
<header>
		<!-- top header -->
		<div class="top-head-w3ls py-2 bg-dark">
			<div class="container">
				<div class="row">
					<h1 class="text-capitalize text-white col-7">
						<i class="fas fa-book text-dark bg-white p-2 rounded-circle mr-3"></i>WELCOME TO VARNAKERALA</h1>
					<!-- social icons -->
					<div class="social-icons text-right col-5">
						<ul class="list-unstyled">
							<li>
								<a href="#" class="fab fa-facebook-f icon-border facebook rounded-circle"> </a>
							</li>
							<li class="mx-2">
								<a href="#" class="fab fa-twitter icon-border twitter rounded-circle"> </a>
							</li>
							<li>
								<a href="#" class="fab fa-google-plus-g icon-border googleplus rounded-circle"> </a>
							</li>
							<li class="ml-2">
								<a href="#" class="fas fa-rss icon-border rss rounded-circle"> </a>
							</li>
						</ul>
					</div>
					<!-- //social icons -->
				</div>
			</div>
		</div>
		<!-- //top header -->
		<!-- middle header -->
		<div class="middle-w3ls-nav py-2 ">
			<div class="container">
				<div class="row">
					<a class=" font-weight-bold col-lg-12 text-lg-left text-center" href="index.php" style="font-size:42px; color:#fff; font-family:Arial, Helvetica, sans-serif">
                    VARNAKERALA INSTITUTE OF KERALA MURAL</a>
					<div class="col-lg-8 right-info-agiles mt-lg-0 mt-sm-3 mt-1">
						<div class="row">
							<div class="col-sm-4 nav-middle">
								<i class="far fa-envelope-open text-center mr-md-4 mr-sm-2 mr-4"></i> 
								<div class="agile-addresmk">
									<p>
										<span class="font-weight-bold text-dark">Mail Us</span>
										varnakerala@gmail.com									</p>
								</div>
							</div>
							<div class="col-sm-4 col-6 nav-middle mt-sm-0 mt-2">
								<i class="fas fa-phone-volume text-center mr-md-4 mr-sm-2 mr-4"></i>
								<div class="agile-addresmk">
									<p>
										<span class="font-weight-bold text-dark">Call Us</span>
										+918111786543
									</p>
								</div>
							</div>
                            <?php
							
/*
if($_SESSION['userid']=="")
{
header("location:login.php");
}
*/
							?>
							
							<div class="col-sm-4 col-6 top-login-butt text-right mt-sm-2">
								<a href="cart.php" class="button-head-mow3 text-white">Cart &nbsp;<i class="fas fa-bell">&nbsp;(<?php echo $count; ?>)</i></a>
							</div>
                            
                            
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- //middle header -->
	</header>
	<!-- //header -->

	<!-- banner -->
	<div class="banner-agile-2">
		<!-- navigation -->
		<div class="navigation-w3ls">
			<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-nav">
				<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				 aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
                <style>
                .navbar-nav a
				{
				font-size:20px; !important
				color:red;	
				font-family:Arial, Helvetica, sans-serif;
				}
				.navbar-nav li
				{
					
				border-right:1px thin #930;	
				line-height:15px;
				padding:10px;
				}
				
				</style>
				<div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
					<ul class="navbar-nav justify-content-center">
						<li class="nav-item active">
							<a class="nav-link text-white" href="index.php">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" href="about.php">About Us</a>
						</li>
                        <?php if($_SESSION['type']!="customer") 
						{?>
                        <li class="nav-item">
							<a class="nav-link text-white" href="package.php">Packages</a>
						</li>
                        <?php
						}
						if(isset($_SESSION['type']))
						{
						if($_SESSION['type']=="student") 
						{?>
                        <li class="nav-item">
							<a class="nav-link text-white" href="attendence.php">Attendence</a>
						</li>
                         <?php
						}
						}
						?>                     
                      
                         <li class="nav-item">
							<a class="nav-link text-white" href="salesgallery.php">Sales Gallery</a>
						</li>
                         <li class="nav-item">
							<a class="nav-link text-white" href="contact.php">Contact Us</a>
						</li>
                        <?php 
						if(isset($_SESSION['type']))
						{
							?>
                            
                            <li class="nav-item">
							<a class="nav-link text-white" href="c_account.php">Account</a>
						</li>
                         <li class="nav-item">
							<a class="nav-link text-white" href="profile.php">Profile</a>
						</li>
                            
                            
                        <li class="nav-item">
							<a class="nav-link text-white" href="logout.php?status=logout">Logout</a>
						</li>
                        <?php
						}
						else
						{
						?>
                         <li class="nav-item">
							<a class="nav-link text-white" href="login.php">Login</a>
						</li>
                       <?php } ?>
                        
						<!--<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Courses
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="language.html">Language</a>
								<a class="dropdown-item" href="communication.html">Communication</a>
								<a class="dropdown-item" href="business.html">Business</a>
								<a class="dropdown-item" href="software.html">Software</a>
								<a class="dropdown-item" href="social_media.html">Social Media</a>
								<a class="dropdown-item" href="photography.html">Photography</a>
								<a class="dropdown-item" href="course_details.html">Course Details</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="form.html">Apply Now</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Pages
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="about.html">Instructors</a>
								<a class="dropdown-item" href="index.php">What We Do</a>
								<a class="dropdown-item" href="login.html">Login</a>
								<a class="dropdown-item" href="register.html">Register</a>
								<a class="dropdown-item" href="404.html">404 Page</a>
								<a class="dropdown-item" href="coming_soon.html">Coming Soon</a>
								<a class="dropdown-item" href="form.html">Admission Form</a>
								<a class="dropdown-item" href="faq.html">Faq</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" href="blog.html">Blog</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" href="gallery.html">Gallery</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" href="contact.html">Contact Us</a>
						</li>-->
					</ul>
				</div>
			</nav>
		</div>
		<!-- //navigation -->
	</div>