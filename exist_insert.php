<?php
session_start();

include("connectionI.php");
if(isset($_POST['proceed']))

{
	$sql="INSERT INTO studchild(studm_id,package_name,total,date_of_join,start_time,end_time,end_date,start_date) VALUES ('$_SESSION[userid]','$_POST[pname]','$_POST[amount]','$_POST[date]','$_POST[stime]','$_POST[etime]','$_POST[edate]','$_POST[sdate]')";
	if(mysqli_query($con,$sql))
	{
		$amt=$_POST[amount]+250;
	$cookie_name = "apply_id";
	$cookie_value = mysqli_insert_id($con);
	setcookie($cookie_name, $cookie_value, time() + (86400), "/");
	
		header("location:paymentcard.php?amount=$amt&username=$_SESSION[user]&pname=$_POST[pname]");
		
	}
	else
	{
		header("location:existstud.php?a=2");
	}
}

?>