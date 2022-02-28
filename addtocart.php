<?php

include("connectionI.php");

	session_start();
	$sql="INSERT INTO saleschild(post_id, amount,user_id) VALUES ('$_REQUEST[post_id]','$_REQUEST[amount]','$_SESSION[user]')";
	
	if(mysqli_query($con,$sql))
	{
		mysqli_query($con,"UPDATE posting SET status='Sold Out' WHERE id='$_REQUEST[post_id]'");
	//$cookie_name = "apply_id";
	//$cookie_value = mysqli_insert_id($con);
	//setcookie($cookie_name, $cookie_value, time() + (86400), "/");
	
		header("location:salesgallery.php");
		
	}
	else
	{
		header("location:salesgallery.php?a=2");
	}


?>