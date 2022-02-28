<?php 
error_reporting(0);
if(isset($_POST['login']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];

	include("connectionI.php");
	
	//Employee Panel Login Check
	
		$query="SELECT * FROM login WHERE username='$username' ";
		$result = mysqli_query($con,$query);
		$count = mysqli_num_rows($result);
		$row=mysqli_fetch_array($result);
		if($count>=1)
		{
			$up= "UPDATE login SET password='$password' WHERE username='$username'";
	if (mysqli_query($con,$up))
     {  
	   $error="sucess";
	  header("location:login.php?status=$sucess");
	}
	else
	{
	  $error="invalid";
	  header("location:passwordreset.php?status=$error");
	}
	
     	}
		else
     	{
			$error="invalid";
			header("location:passwordreset.php?status=$error");
	 	}
	
	 
}

	?>
    