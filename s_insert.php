<?php

include("connectionI.php");
if(isset($_POST['register']))
{
	$sql="SELECT * FROM studmaster WHERE username='$_POST[Username]'";
//echo $sql;
$data=mysqli_query($con,$sql);
$username=mysqli_num_rows($data);


$sql1="SELECT * FROM studmaster WHERE phone_number='$_POST[Phone]'";
//echo $sql;
$data1=mysqli_query($con,$sq1l);
$phone_number=mysqli_num_rows($data1);

$sql3="SELECT * FROM studmaster WHERE email='$_POST[Email]'";
//echo $sql;
$data2=mysqli_query($con,$sql3);
$email=mysqli_num_rows($data2);

if($username==1)
{
	header("location:register.php?a=error");
	
}
elseif($phone_number==1)
{
	header("location:register.php?a=error1");
}
elseif($email==1)
{
	header("location:register.php?a=error2");
}
else
{
	$query="SELECT * FROM studmaster ORDER BY id DESC LIMIT 1";
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
		 $uid="STUD-".$userid;
	//echo $_POST['Username'];
	//$userid=explode('-',$_POST['Username']);
	//$userid=$userid[1];
	//echo $userid;
	
	$d=$_POST['Date_Of_Birth'];
	$dob=date("Y-m-d",strtotime($d));
	$target_path = "uploads/";

$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 

if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['uploadedfile']['name']). 
    " has been uploaded";
} else{
    echo "There was an error uploading the file, please try again!";
}

	$sql="INSERT INTO studmaster(first_name,last_name,date_of_birth,gender,house,street,city,state,phone_number,email,username,password,id_proof) VALUES ('$_POST[First_Name]','$_POST[Last_Name]','$dob','$_POST[Gender]','$_POST[House]','$_POST[Street]','$_POST[City]','$_POST[State]','$_POST[Phone]','$_POST[Email]','$_POST[Username]','$_POST[Password]','$target_path')";
	if($result=mysqli_query($con,$sql))
	{
		//mysqli_query($con,"INSERT INTO studchild(studm_id,package_name,total,date_of_join) VALUES('$userid','$_POST[pname]','$_POST[amount]','$_POST[dateofjoin]')");
		mysqli_query($con,"INSERT INTO login(userid,username,password,type) VALUES('$userid','$_POST[Username]','$_POST[Password]','student')");
		
		header("location:login.php?a=1");
		
	}
	else
	{
		header("location:register.php?a=2");
	}
}}

?>