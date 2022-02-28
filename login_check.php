<?php 
error_reporting(0);
if(isset($_POST['login']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$type=$_POST['type'];
	include("connectionI.php");
	
	//Employee Panel Login Check
	
		$query="SELECT * FROM login WHERE username='$username' and password='$password' and type='$type'";
		$result = mysqli_query($con,$query);
		$count = mysqli_num_rows($result);
		$row=mysqli_fetch_array($result);
		if($count>=1)
		{
	
		//echo $query;
	
	            $userid=$row['userid'];
				
				
				if($type=='admin')
				{
				session_start();
				$_SESSION['type']= "admin";	
				
				header("location:../ADMIN/dashboard/dashboard.php");				
				}
				
				
				if($type=='staff')
				{
				$query1="SELECT * FROM staff WHERE id='$userid'";
		        $result1 = mysqli_query($con,$query1);
				$row1=mysqli_fetch_array($result1);	
				session_start();
				$_SESSION['type']= "staff";
				$_SESSION['userid']= $row1['id'];
				$_SESSION['first_name']= $row1['first_name'];
				$_SESSION['last_name']= $row1['last_name'];
				$_SESSION['phone_number']= $row1['phone_number'];
				$_SESSION['email']= $row1['email'];
			
				header("location:../STAFF/dashboard/dashboard.php");	
				}
				
				
				if($type=='student')
				{
				$query2="SELECT * FROM studmaster WHERE id='$userid' ";
		        $result2 = mysqli_query($con,$query2);
				$row2=mysqli_fetch_array($result2);	
				
			
					if($row2['status']=="Active")
					{
						session_start();
						$_SESSION['type']= "student";
						$_SESSION['userid']= $row2['id'];
						$_SESSION['first_name']= $row2['first_name'];
						$_SESSION['last_name']= $row2['last_name'];
						$_SESSION['phone_number']= $row2['phone_number'];
						$_SESSION['email']= $row2['email'];
						$_SESSION['user']= $row2['username'];
					header("location:../USER/package.php");	
					}
					else{
						$error="status";
						header("location:login.php?status=$error");
					}	
					
				}
				if($type=='customer')
				{
					$query3="SELECT * FROM customer WHERE id='$userid'";
		        $result3 = mysqli_query($con,$query3);
				$row3=mysqli_fetch_array($result3);	
				session_start();
				$_SESSION['type']= "customer";
				$_SESSION['userid']= $row3['id'];
				$_SESSION['first_name']= $row3['first_name'];
				$_SESSION['last_name']= $row3['last_name'];
				$_SESSION['phone_number']= $row3['phone_number'];
				$_SESSION['email']= $row3['email'];
				$_SESSION['user']= $row3['username'];
			
				header("location:../USER/salesgallery.php");
					
				}
			
		
     	}
		else
     	{
			$error="invalid";
			header("location:login.php?status=$error");
	 	}
	
	 
}

	?>
    