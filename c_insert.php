<?php

include("connectionI.php");
if(isset($_POST['Register']))
{
	$sql="SELECT * FROM customer WHERE username='$_POST[Username]'";
//echo $sql;
$data=mysqli_query($con,$sql);
$username=mysqli_num_rows($data);


$sql1="SELECT * FROM customer WHERE phone_number='$$_POST[Phone]'";
//echo $sql;
$data1=mysqli_query($con,$sql1);
$phone_number=mysqli_num_rows($data1);

$sql3="SELECT * FROM customer WHERE email='$_POST[Email]'";
//echo $sql;
$data2=mysqli_query($con,$sql3);
$email=mysqli_num_rows($data2);

if($username==1)
{
	header("location:cust_register.php?a=error");
	
}
elseif($phone_number==1)
{
	header("location:cust_register.php?a=error1");
}
elseif($email==1)
{
	header("location:cust_register.php?a=error2");
}
else
{
	$query="SELECT * FROM customer ORDER BY id DESC LIMIT 1";
		$result = mysqli_query($con,$query);
		$row=mysqli_fetch_array($result);
		$userid=$row['id'];
		if($userid==0)
		 {
		$userid=1;
		 }
		 else
		 {
			  $userid=$userid+1;
		 }
	$sql="INSERT INTO customer(first_name,last_name,date_of_birth,gender,house,street,city,state,phone_number,email,username,password) VALUES ('$_POST[first_name]','$_POST[last_name]','$_POST[date_of_birth]','$_POST[Gender]','$_POST[House]','$_POST[Street]','$_POST[City]','$_POST[State]','$_POST[Phone]','$_POST[Email]','$_POST[Username]','$_POST[Password]')";
	//echo $sql;
	if(mysqli_query($con,$sql))
	{
		//$sid=mysqli_insert_id($con);
		mysqli_query($con,"INSERT INTO login(userid,username,password,type) VALUES('$userid','$_POST[Username]','$_POST[Password]','customer')");
		
		header("location:login.php?a=1");
		
	}
	else
	{
		header("location:cust_register.php?a=2");
	}
}
}

?>