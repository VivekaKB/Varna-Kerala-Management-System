<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

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
     <style>
			.box
			{
			border:2px solid #F00;
			margin:10px;	
			float:left;
			}
			
			</style>

</head>

<body>
	<!-- header -->
	<?php include("header.php");
	include("connectionI.php");
	 ?>
	<!-- breadcrumb -->
    
    
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Sales Gallery form</li>
		</ol>
	</nav>
	<!-- breadcrumb -->
	<!-- //banner -->

	<!-- register -->
		<!-- course-->
	<div class="course-w3ls py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-capitalize font-weight-light text-dark text-center mb-sm-5 mb-4">Sales  -
				<span class="font-weight-bold">Gallery</span>
			</h3>
              <?php
		   


	$sql="select * from posting WHERE status='Available'";
	$result=mysqli_query($con,$sql);
	  
	  while($row=mysqli_fetch_array($result))
	  {
		  ?>
            <center>
			<div class="row cource-list-agile pt-4">
				<div class="col-lg-7 agile-course-main">
					<div class="w3ls-cource-first" style="background-image:url(images/295830892804e4c.jpg)">
						<!--<br><br><br><img src="images/shopping_cart_72x58.png" alt="" class="img-fluid img-poiscour mx-auto d-block mt-2"></img>-->
						<div class="px-md-5 px-4  pb-md-5 pb-4"><br>
							<h3 class="text-dark" style="text-align:center; font-family:Georgia, 'Times New Roman', Times, serif"><br><br><?php echo $row['item_name'];?></h3>
							<p class="mt-3 mb-4 pr-lg-5" style="font-family:'Times New Roman', Times, serif; font-style:italic ; font-size:20px" ><b><?php echo $row['description']?></b></p>
							<ul class="list-unstyled text-capitalize">
								<li>
                                    <li>
									<i class="fas fa-image mr-3"></i><b>Category : <?php echo $row['product_category']?></b></li>
                                    <li class="my-3">
									<i class="fas fa-calendar-alt mr-3"></i><b>DATE :<?php echo $row['date']?></b></li>
								
         
                                    <li>
									<i class="fas fa-credit-card mr-3"></i><b>AMOUNT : <?php echo $row['rate']?></b></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-5 agile-course-main-2 mt-4">
					<img src="../ADMIN/posting/uploads/<?php echo $row['image']?>" alt="" class="img-fluid">
				</div>
				<div class="buttons-w3ls">
					<a class="btn button-cour-w3ls text-white" role="button"><?php echo $row['status']?></a>
			<?php
						if(isset($_SESSION['type']))
						{
						?>
					<a class="btn bg-dark text-white" href="addtocart.php?post_id=<?php echo $row['id'];?>&amount=<?php echo $row['rate'];?>" role="button" >ADD TO CART</a>
                    <?php
						}
						else
						{?>
							<a class="btn bg-dark text-white" href="login.php" role="button">PLEASE LOGIN</a>
						<?php }?>
				</div>
			</div>
            </center>
            <?php
	  }
			?>
           <!--
			<div class="row cource-list-agile cource-list-agile-2">
				<div class="col-lg-5 agile-course-main-3 mt-4">
					<img src="images/am4.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-lg-7 agile-course-main text-right">
					<div class="w3ls-cource-first">
						<img src="images/2.png" alt="" class="img-fluid img-poiscour mx-auto d-block mt-2"></img>
						<div class="px-md-5 px-4  pb-md-5 pb-4">
							<h3 class="text-dark">Introduction To Engineering Design</h3>
							<p class="mt-3 mb-4 pl-lg-4">accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
							<ul class="list-unstyled text-capitalize">
								<li>june - aug 2018
									<i class="fas fa-calendar-alt ml-3"></i>
								</li>
								<li class="my-3">3 - 6 hours
									<i class="fas fa-clock ml-3"></i>
								</li>
								<li>60 seats
									<i class="fas fa-users ml-3"></i>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="buttons-w3ls-2">
					<a class="btn button-cour-w3ls text-white" href="course_details.html" role="button">Learn More</a>
					<a class="btn bg-dark text-white" href="form.html" role="button">Apply Now</a>
				</div>
			</div>
			<div class="row cource-list-agile pt-4">
				<div class="col-lg-7 agile-course-main">
					<div class="w3ls-cource-first">
						<img src="images/1.png" alt="" class="img-fluid img-poiscour mx-auto d-block mt-2"></img>
						<div class="px-md-5 px-4  pb-md-5 pb-4">
							<h3 class="text-dark">Organize Of Program Languages</h3>
							<p class="mt-3 mb-4 pr-lg-5">accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
							<ul class="list-unstyled text-capitalize">
								<li>
									<i class="fas fa-calendar-alt mr-3"></i>may - aug 2018</li>
								<li class="my-3">
									<i class="fas fa-clock mr-3"></i>4 - 6 hours</li>
								<li>
									<i class="fas fa-users mr-3"></i>70 seats</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-5 agile-course-main-2 mt-4">
					<img src="images/n2.jpg" alt="" class="img-fluid">
				</div>
				<div class="buttons-w3ls">
					<a class="btn button-cour-w3ls text-white" href="course_details.html" role="button">Learn More</a>
					<a class="btn bg-dark text-white" href="form.html" role="button">Apply Now</a>
				</div>
			</div>
			<div class="row cource-list-agile cource-list-agile-2">
				<div class="col-lg-5 agile-course-main-3 mt-4">
					<img src="images/am2.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-lg-7 agile-course-main text-right">
					<div class="w3ls-cource-first">
						<img src="images/2.png" alt="" class="img-fluid img-poiscour mx-auto d-block mt-2"></img>
						<div class="px-md-5 px-4  pb-md-5 pb-4">
							<h3 class="text-dark">Programming Software Engineer</h3>
							<p class="mt-3 mb-4 pl-lg-4">accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
							<ul class="list-unstyled text-capitalize">
								<li>june - aug 2018
									<i class="fas fa-calendar-alt ml-3"></i>
								</li>
								<li class="my-3">3 - 6 hours
									<i class="fas fa-clock ml-3"></i>
								</li>
								<li>60 seats
									<i class="fas fa-users ml-3"></i>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="buttons-w3ls-2">
					<a class="btn button-cour-w3ls text-white" href="course_details.html" role="button">Learn More</a>
					<a class="btn bg-dark text-white" href="form.html" role="button">Apply Now</a>
				</div>
			</div>
			<div class="row cource-list-agile pt-4">
				<div class="col-lg-7 agile-course-main">
					<div class="w3ls-cource-first">
						<img src="images/1.png" alt="" class="img-fluid img-poiscour mx-auto d-block mt-2"></img>
						<div class="px-md-5 px-4  pb-md-5 pb-4">
							<h3 class="text-dark">Object-Oriented Programming Java</h3>
							<p class="mt-3 mb-4 pr-lg-5">accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
							<ul class="list-unstyled text-capitalize">
								<li>
									<i class="fas fa-calendar-alt mr-3"></i>may - aug 2018</li>
								<li class="my-3">
									<i class="fas fa-clock mr-3"></i>4 - 6 hours</li>
								<li>
									<i class="fas fa-users mr-3"></i>70 seats</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-5 agile-course-main-2 mt-4">
					<img src="images/n1.jpg" alt="" class="img-fluid">
				</div>
				<div class="buttons-w3ls">
					<a class="btn button-cour-w3ls text-white" href="course_details.html" role="button">Learn More</a>
					<a class="btn bg-dark text-white" href="form.html" role="button">Apply Now</a>
				</div>
			</div>
			<div class="row cource-list-agile cource-list-agile-2">
				<div class="col-lg-5 agile-course-main-3 mt-4">
					<img src="images/am1.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-lg-7 agile-course-main text-right">
					<div class="w3ls-cource-first">
						<img src="images/2.png" alt="" class="img-fluid img-poiscour mx-auto d-block mt-2"></img>
						<div class="px-md-5 px-4  pb-md-5 pb-4">
							<h3 class="text-dark">Algorithms Software Programming</h3>
							<p class="mt-3 mb-4 pl-lg-4">accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
							<ul class="list-unstyled text-capitalize">
								<li>june - aug 2018
									<i class="fas fa-calendar-alt ml-3"></i>
								</li>
								<li class="my-3">3 - 6 hours
									<i class="fas fa-clock ml-3"></i>
								</li>
								<li>60 seats
									<i class="fas fa-users ml-3"></i>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="buttons-w3ls-2">
					<a class="btn button-cour-w3ls text-white" href="course_details.html" role="button">Learn More</a>
					<a class="btn bg-dark text-white" href="form.html" role="button">Apply Now</a>
				</div>
			</div> -->
		</div>
	</div>
	<!-- //course-->

	