<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
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
     <style>
			.box
			{
			border:2px solid #F00;
			margin:10px;	
			float:left;
			}
	
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align:center;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color:#F03;
  color: white;
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
			<li class="breadcrumb-item active" aria-current="page">Attendence form</li>
		</ol>
	</nav>
	<!-- breadcrumb -->
	<!-- //banner -->

	<!-- register -->
	
	<div class="course-w3ls py-5" >
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-capitalize font-weight-light text-dark text-center mb-sm-5 mb-4">Attendence 
				<span class="font-weight-bold"></span>
			</h3>
            <form  class="form-inline" action="" method="post">
            <?php
			
			echo "<table width='100%'><tr><th> <label>Packages</label></th>";
			
			 $sql2="SELECT DISTINCT `package_name` FROM `attendence` WHERE `student_name`='$_SESSION[userid]' ";
			// echo $sql2;
			
			 $result2 = mysqli_query($con, $sql2) or die("Error in Selecting " . mysqli_error($connection));
					echo "<th><select name='package_name' class='form-control'>";
    				echo "<option >------------------------ Select Course----------------</option>";
    					while($row2 =mysqli_fetch_array($result2))
   							{
								echo "<option value='$row2[package_name]'>$row2[package_name]</option>";
				 			}
	  				echo "</select></th>";
					echo "<th><input type='submit' name='submit' class='btn btn-primary'></th>";
	    
	  					echo "</form>";
	
			if(isset($_POST['submit']))
			{
			 ?>
            
            
          <table>
  <tr>
    <th>Package</th>
    <th>Date</th>
    <th>Status</th>
  </tr>        
           <?php
	


	$sql="SELECT * FROM attendence WHERE student_name='$_SESSION[userid]' and package_name='$_POST[package_name]' ORDER BY id DESC";
	$result=mysqli_query($con,$sql);
	  
	  while($row=mysqli_fetch_array($result))
	  {
		  ?>
          

  <tr>
    <td><?php echo $row['package_name']; ?></td>
    <td><?php echo $row['date']; ?></td>
    <td><?php echo $row['status']; ?></td>
  </tr>
 
          
          
            
<?php } 
			
	}?>
            
            
</table>

			
		</div>
	</div>
    
    
	<!-- //course-->
    
    </body></html>        
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
