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
     <?php 
error_reporting(0);
$error=$_REQUEST['a'];

if ($error == "error")
{
?>
<script> alert("THIS PACKAGE CANNOT BE APPLIED AS THERE ARE OTHER PACKAGES ENROLLED BY THE STUDENTS WHOSE TIMING OR DATE FALL WITHIN THE SELECTED PACAKGE'S DATE OR TIME.")</script>
<?php
}
 elseif($error=='error1')
	{
	?>
    <script>
	alert("SORRY:NUMBER OF  STUDENTS FOR THIS PACKAGE HAS REACHED IT MAXIMUM. PLEASE OPT FOR DIFFERENT PACKAGE.");
	</script>
    <?php
    }
    else
    {
	}
?>
	<!-- breadcrumb -->
    
    
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Package form</li>
		</ol>
	</nav>
	<!-- breadcrumb -->
	<!-- //banner -->

	<!-- register -->
	
	<div class="course-w3ls py-5" >
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-capitalize font-weight-light text-dark text-center mb-sm-5 mb-4">Packages -
				<span class="font-weight-bold">Offered</span>
			</h3>
            <br><p style="font-family:Georgia, 'Times New Roman', Times, serif; color:#000; font-size:18px">Varna Kerala Institute is well known for the various course packages offered to its students.These packages as decided based on the classroom size to accomodate students and staff availability.Each packages has got its own duration stating the time and date when a package will commence and end.Student have given opportunity to register for desired number of packages.Packge fees must be submitted to the Fees Counter of the instititute in the form of Demand Draft(DD) on the coomencement of class</p>
            <br><p style="font-family:Georgia, 'Times New Roman', Times, serif; color:#000;font-size:18px"><b>NOTE:There would be a seperate registration fees for each package.</b></p>
          
          <h3 class="title text-capitalize font-weight-light text-dark text-center mb-sm-5 mb-4"> Our Packages</h3>      
          <div class="row cource-list-agile-2 pt-4" style="margin-top:-50px;"  >  
         
           <?php
		   if(isset($_SESSION['user']))
		   {
			   $sql="SELECT * FROM package WHERE package_name NOT IN(select package_name from studchild where studm_id='$_SESSION[userid]' and bill_no!=0)";
		   }
		   else
		   {
			   $sql="select * from package";
		   }

	
	$result=mysqli_query($con,$sql);
	  
	  while($row=mysqli_fetch_array($result))
	  {
		  
		   $sql3 = "SELECT * FROM tmaster where id='$row[tutor]' ";
    $result3 = mysqli_query($con, $sql3) or die("Error in Selecting " . mysqli_error($connection));
$row3 =mysqli_fetch_array($result3);
		  ?>
         
			
				<div class="col-lg-4 agile-course-main" style="margin-top:50px;" >
					<div class="w3ls-cource-first" style="background-image:url(images/pack123.jpg)">
               
						<img src="images/1.png" alt="" class="img-fluid img-poiscour mx-auto d-block mt-2"></img>
						<div class="px-md-5 px-4  pb-md-5 pb-4">
							<h3 class="text-dark" style="font-family:'Times New Roman', Times, serif ; alignment-adjust:central"><b><center><?php echo $row['package_name']?></center></b></h3><br>
							<!--<p class="mt-3 mb-4 pr-lg-5">accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>-->
							<ul class="list-unstyled text-capitalize">
                            <li>
									<i class="fas fa-book"></i>&nbsp;<b>Course:</b><?php echo $row['course']?></li><br>
								<li>
									<i class="fas fa-calendar-alt mr-3"></i>&nbsp;<b>Date:</b><br><?php echo $row['start_date']."  to ".$row['end_date']?></li>
								<li class="my-3">
									<i class="fas fa-clock mr-3"></i>&nbsp;<b>Timing:</b><br><?php echo $row['start_time']."-".$row['end_time']?></li>
								<li>
									<i class="fas fa-users mr-3"></i>&nbsp;<b>Strength:</b><?php echo $row['strength']?></li><br>
                                <li>
									<i class="fas fa-credit-card mr-3"></i>&nbsp;<b>Fees:</b><?php echo $row['amount']." INR "?></li><br>
                                <li>
									<i class="fas  fa-user mr-3"></i>&nbsp;<b>Tutor:</b><?php echo $row3['first_name']." ". $row3['last_name'];?></li><br>
                                    
							</ul>
						</div>
                        <div class="buttons-w3ls">
                        <?php
						if(isset($_SESSION['type']))
						{
						?>
					<a class="btn button-cour-w3ls text-white" href="package_check.php?pid=<?php echo $row['id']?>&st=apply" role="button">APPLY NOW</a>
                    <?php
						}
						else
						{?>
							<a class="btn button-cour-w3ls text-white" href="login.php" role="button">LOGIN TO APPLY</a>
						<?php }?>
                    <br><br>
			
                </div>
              	</div>
                	
				</div>
              
            <?php }?>
			
			</div>
            
		</div>
	</div>
    
    
	<!-- //course-->
    
    </body></html>        
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
