<?php

include("connectionI.php");
if(isset($_POST['create']))
{
	$sql="INSERT INTO account(userid,account_no,password) VALUES ('$_POST[userid]','$_POST[account_no]','$_POST[password]')";
	if(mysqli_query($con,$sql))
	{
		mysqli_query($con,"INSERT INTO payment(userid,user_account,transfer_account,payment_type,amount,remark) VALUES ('$_POST[userid]','$_POST[account_no]','nill','credit','500000','success')");
		header("location:index.php");
		
	}
	else
	{
		header("location:c_account.php?a=2");
	}
}

?>