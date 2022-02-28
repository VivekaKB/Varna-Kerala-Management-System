<!DOCTYPE html>
<html lang="zxx">
<?php
error_reporting(0);
session_start();
$amount=$_REQUEST['amount'];
include("connectionI.php");
?>
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
    
    
    
    
    
   <script type="text/javascript" src="jquery_002.js"></script>
<script type="text/javascript" src="jquery.validate.min.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
jQuery.validator.addMethod("notEqual", function(value, element, param) {return this.optional(element) || value != param;}, "Please enter your name");

$.validator.addMethod("pwcheck",
function(value, element) {
   return /^[A-Za-z0-9\d=!\-@._*]+$/.test(value);
});
jQuery.validator.addMethod("phoneUS", function(phone_number, element) {
    phone_number = phone_number.replace(/\s+/g, "");
    return this.optional(element) || phone_number.length > 9 && phone_number.length < 11 &&
    phone_number.match(/^(\+?0-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/);
}, "Please specify a valid phone number");

$(document).ready(function() {jQuery.validator.addMethod("lettersonly", function(value, element) {
  return this.optional(element) || /^[a-z ]+$/i.test(value);
}, "Letters only please");

			$("#register_form").validate({
				submitHandler:function(form) 
				{
					SubmittingForm();
				},
				rules: 
				{
					First_Name: 
					{
						required: true,
						lettersonly: true			
					},// simple rule, converted to {required:true}
					Last_Name: 
					{
						required: true,
						lettersonly: true			
					},
					house: 
					{
						required: true
					},
					street:
					{
						required: true
					},
					city:
					{
						required: true,
						lettersonly: true			
					},
					state:
					{
						required: true,
						lettersonly: true			
					},
					designation:
					{
						required: true
					},
					status:
					{
						required: true
					},
					Phone: 
					{
						required: true,
						phoneUS:true		
					},
					email: 
					{
						required: true,
					    email: true	
					},
					username: 
					{
						required: true
					},
					password: 
					{
						required: true,
						rangelength: [6,20]
						
					},
					password2: 
					{
						required: true,
						equalTo:'#password1'
					},
					comment: 
					{
						required: true
					}
					},
					messages: 
					{
						comment: "Please enter a comment.",
						password2: "Password Doesn't Matched"
					}
			});	
		});	
</script>
<link type="text/css" href="jquery.datepick.css" rel="stylesheet">
<script type="text/javascript" src="jquery.datepick.js"></script>
<script type="text/javascript">
$(function() {
	$('#t').datepick();
});

function showDate(date) {
	alert('The date chosen is ' + date);
}
</script>
<script type="text/javascript">
$(function() {
	$('#tt').datepick();
});

function showDate(date) {
	alert('The date chosen is ' + date);
}
</script>

 




</head>

<body>
<?php include("header.php"); 

?>
	
	<!-- breadcrumb -->
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Bill</li>
		</ol>
	</nav>
	<!-- breadcrumb -->
	<!-- //banner -->




	<!-- register -->
	  
<style>

label
{
text-transform:capitalize;	
}

</style>
<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <!--<script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>-->
</head>




 <link rel="stylesheet" href="../style.css" />
   <script>
function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
	}
	
	
	
	function getCity(strURL) {	

		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('citydiv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}
				
	}
</script>
     <link rel="stylesheet" href="jquery-ui.min.css" type="text/css" /> 
   <script type="text/javascript" src="jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="jquery-ui.min.js"></script>	
<script type="text/javascript">
$(function() {
	
	//autocomplete
	$(".auto").autocomplete({
		
		source: "search22.php",
		minLength:0
		
	});				


});

</script>
<script>
function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
	}
	
	
	
	function getCity(strURL,value) {		
		
		
		
		//alert(strURL);
	
		
		var req = getXMLHTTP();
		var val=value;
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('citydiv'+val).innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}
				
	}
</script>
<style>
#table td
{
	width:150px;
}
.printtable
{
font-family:DIN Medium,Arial, Helvetica, sans-serif;
font-size:14px;	
}
</style>




<body ng-controller='mainController'>

<!--<style>
div
{
text-transform:capitalize;
margin-bottom:5px;	
}

</style>-->

<style>
.bo td
{
border:1px solid #ccc;	
}

.bo th
{
border:1px solid #fff;	
}
</style>
 <script type="text/javascript">     
        function PrintDiv() {    
           var divToPrint = document.getElementById('divToPrint');
           var popupWin = window.open('', '_blank', 'width=300,height=300');
           popupWin.document.open();
           popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
            popupWin.document.close();
                }
     </script>

<br>
<br>
	<input type="submit" value="Print" onClick="PrintDiv();" class="btn btn-primary"/>  <a href="index.php" class="btn btn-danger float-right">&lt;&lt;BACK</a>




<style type="text/css">



</style>
<div id="divToPrint" class='printable'>
<?php


$g=0;



$i = 1;
$result = mysqli_query($con,"select * from saleschild where bill_no='$_REQUEST[bill_no]'");

$row=mysqli_fetch_array($result);
$customer_id=$row['user_id'];
$c_id=explode("-", $customer_id);

$bill_date=$row['bill_date'];
$obill_date=$bill_date;
 $dateTime = new DateTime($row['bill_date']);
$bill_date=date_format($dateTime,'d-m-Y');
$query1="UPDATE saleschild set date='$bill_date' where bill_no='$_REQUEST[bill_no]' ";

if($_SESSION['type']=="customer")
{
$result34 = mysqli_query($con,"select * from customer where id='$_SESSION[userid]'");
}
elseif($_SESSION['type']=="student")
{
$result34 = mysqli_query($con,"select * from studmaster where id='$_SESSION[userid]'");
}
else
{
 $result34 = mysqli_query($con,"select * from staff where id='$_SESSION[userid]'");
}
$row34=mysqli_fetch_array($result34);

?>

<center>
<table class='printtable'><tr></td>
<table style='width:900px'><tr><td colspan=2>
<img src='images/BILLNEW.PNG' width='900px'>
</td></tr>






<tr><td colspan=2>














<table>
<tr>
<td width='350px'  >
<div style='font-size:16px;width:300px;padding:4px;margin-bottom:5px;'>
TO
</div>
</td>
<td>
<!--<span style='font-size:26px;'><b>TAX INVOICE</b></span>
-->


</td>

</tr>
</table>
</td></tr>












<tr style='font-size:16px;'><td>



<table style='text-transform: uppercase;'>
<tr><th width='150' align='left'  colspan=2><?php echo $row34['first_name']." ". $row34['last_name']; ?> </td></tr>
<tr><th align='left' colspan=2><?php echo $row34['house']." , ".$row34['street']."</br>".$row34['city']." , ".$row34['state'] ; ?></td></tr>

<tr><td align='left'>Phone :</td><td ><?php echo $row34['phone_number']?></td></tr>
</table>










</td><td align='right'>

<table cellpadding='4' cellspacing='10'>
<tr><th  width='160px' align='left'>Invoice No : </th><td width='160px' ><?php echo "INVCUST-".$_REQUEST['bill_no'];?>  </td></tr>
<tr><th  align='left'>Date  : </th><td ><?php echo $bill_date;?> </td></tr>


</table>


</td></tr>










</table>

<br><br>

<table  border="1" class='printtable' style="border-collapse:collapse;font-size:14px;font-family:DIN Medium,Arial, Helvetica, sans-serif;" width="900px" height="700px" align="center" cellpadding="10"  style="padding:10px;">





 


<tr style='background:#ccc;' ><th style='font-weight:bold;text-align:center;' height='40px'> NO </th><th style='font-weight:bold;text-align:center;'>DESCRIPTION </th><th style='font-weight:bold;text-align:center;'> QTY </th><th style='font-weight:bold;text-align:center;'> UNIT PRICE </th><th style='font-weight:bold;text-align:center;'> AMOUNT </th></tr>

<?php
$result = mysqli_query($con,"select * from saleschild where bill_no='$_REQUEST[bill_no]'");

while($row=mysqli_fetch_array($result))
{
	
	echo "<tr valign='top' height='40px'>
	<td style='text-align:center;'>$i</td>
	<td width='450'> ";?>
    <?php
	  $sql="select * from posting where id='$row[post_id]'";
	$result9=mysqli_query($con,$sql);
	$row1=mysqli_fetch_array($result9);
	echo $row1['item_name'] ;
	?>
   
	
	<?php echo "</td>
	
	<td style='text-align:center;'>1</td>
	
	<td style='text-align:right;'>".$row['amount']."</td>
	<td style='text-align:right;'>".$row['amount']."</td>
	</tr>";
	$i++;
	
}
$sql2="select SUM(amount) AS total from saleschild where bill_no='$_REQUEST[bill_no]'";
	  $result2=mysqli_query($con,$sql2);
	  $row2=mysqli_fetch_array($result2);
?>


<tr valign='top'>
	<td style='text-align:center;' colspan='6'></td>
	</tr>

<tr  height='50px'>
<th style='background:#ccc;font-size:16px;' align='left' >
TOTAL AMOUNT</th><th colspan="4"  style='text-align:right;font-size:16px;'> INR <?php echo $row2['total'] ?></th>

















</tr>


</table>

<br>
<table style='width:900px'><tr><td>
<h5 style="font-family:Georgia, 'Times New Roman', Times, serif"<b>**Terms and Conditions:</b></h5>
<ul style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:16px">
 <li>In case of return the customer must send a return request mail to official email id of VarnaKerala Institute with the Invoice number.</li>
 <li>We will arrange for a quality check to examine the complaint of the product being faulty/defective. Upon successful validation of the complaint we will process your request for return with regard to the faulty/defective item(s). The return will be accepted for only those items which are found to be faulty/defective.The amount would be credited back to the customers account.</li>
 <li>Items that you return should not be used, washed, altered/tampered or soiled. All original packing, labels, tags, leaflets etc should be intact. The courier will not accept your item in absence of these.</li>
 </ul>
</td></tr>


</table>



</td></tr>
</table> 



  </center>	
     
    

<?php

mysqli_close($con);

?>

</div>
