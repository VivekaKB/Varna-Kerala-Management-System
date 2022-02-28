<?php
session_start();

	include("connectionI.php");
if(isset($_REQUEST['st']))
{
	if($_REQUEST['st']=="apply")
	{
	
	 $sql3 = "SELECT * FROM package where id='$_REQUEST[pid]' ";
    $result3 = mysqli_query($con, $sql3) or die("Error in Selecting " . mysqli_error($connection));
$row3 =mysqli_fetch_array($result3);

//$tutor_id=$_POST['tutor'];
$start_date=$row3['start_date'];
$end_date=$row3['end_date'];
$start_time=$row3['start_time'];
$end_time=$row3['end_time'];
$strength=$row3['strength'];
$package_name=$row3['package_name'];

//echo $start_date."<br>";
//echo $end_date."<br>";
//echo $start_time."<br>";
//echo $end_time."<br>";

$sql="SELECT * FROM studchild WHERE studm_id='$_SESSION[userid]' AND bill_no!=0 AND ((start_date BETWEEN '$start_date' AND '$end_date') OR (end_date BETWEEN '$start_date' AND '$end_date')) AND ((start_time BETWEEN '$start_time' AND '$end_time') OR (end_time BETWEEN '$start_time' AND '$end_time'))";
//echo $sql;

$data=mysqli_query($con,$sql);
$count=mysqli_num_rows($data);

$sql1="SELECT COUNT(*) FROM studchild where package_name='$package_name'";
$data1=mysqli_query($con,$sql1);
$count1=mysqli_num_rows($data1);

$sql2="SELECT strength FROM package";
$data2=mysqli_query($con,$sql2);
$count2=mysqli_num_rows($data2);

if($count1==$count2)
 {
	 
    header("location:package.php?a=error1");
 }

else
{

echo $count;
		if($count==0)
		{
			
			header("location:existstud.php?id=$_SESSION[userid]&pname=$row3[package_name]&amount=$row3[amount]&stime=$start_time&etime=$end_time&sdate=$start_date&edate=$end_date");
		}
		else
		{
			header("location:package.php?a=error");
			
		}
	}}
}
?>