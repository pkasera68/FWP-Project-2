<?php 
		session_start();
		if (!isset($_SESSION['name'])) {
    header("Location: expiredS.php");
    exit;
		}
		$name=$_SESSION['name'];
		$amt=$_SESSION['amt'];
		$items=$_SESSION['items'];
		$adrr=$_POST['pay'];
?>
<html style="background-color:#EAEDED">
<head>
<style>
body{
		margin:0;
}
img.top{
        max-width: 100%;
        max-height: 100%;
        display: block; /* remove extra space below image */
    }
	button.cart{
border-radius:12px; width:200px; height:50px; 
margin-left:150px; 
font-family:verdana,sans-serif;
font-size:18px;
background-color:#192537; color:tan; margin-bottom:50px;}
button:active{
				outline:none;
}
button:hover{
				cursor:pointer;
}
</style>
<title>
		Order Details</title>
		<link rel="shortcut icon" href="Logo.png" type="image/x-icon">
<body>
<div style=" height:230px; width:cover; background-color:#192537;">
<a href="homepage.php" ><img class="top" src="toplogo.jpg"/></a>
</div>
<?php	
	$d=strtotime("+7 days");
		echo "</br><div style=' background-color:white; border-radius:15px; margin-top:100px; margin-bottom:100px; margin-left:100px;  width:800px;'>
		<div style='background-color:white; border-radius:15px; height:500px;border-top:1px LightGray solid; border-bottom:1px LightGray solid; width:cover; ' >
<div style='padding-left:60px; width:cover; border-radius:15px; background-color:#192537; color:Tan; font-family:verdana,sans-serif; padding-top:30px; font-size:20px; height:50px; border-bottom:1px LightGray solid;'>ORDER DETAILS</div>
<div style='margin-left:50px; border-radius:15px; height:cover; border-bottom:2px LightGray dotted;  width:500px;'>
</br>
<span style=' font-family:Verdana,sans-serif; color:Grey; font-size:14px;'>&nbsp&nbspDeliver To:</br>&nbsp&nbsp$adrr
</span>
</br></br>
<span style=' font-family:Verdana,sans-serif; color:Grey; font-size:14px;'>&nbsp&nbspEstimated Delivery UpTo: </br>&nbsp&nbsp&nbsp". date('d/m/Y',$d)."
</span>
</br></br>
<span style='font-family:Arial,sans-serif; border-radius:15px; font-weight:bold; font-size:20px;'>&nbsp&nbsp$items items</span>
</br></br></br>
<span style=' font-family:Verdana,sans-serif; border-radius:15px; font-weight:bold; font-size:20px;'>&nbsp&nbspTotal Payble:</span><span style='margin-left:200px; font-weight:bold; family:verdana,sans-serif; color:brown; font-size:22px;'>&#8377;$amt</span>
</br>
<span style=' font-family:Verdana,sans-serif; color:Grey; font-size:13px;'>&nbsp&nbsp(Delivery Charges Included)
</span>
</div>
<form method='post' action='modeOfpay.php'>
</br>
&nbsp&nbsp<span style=' font-family:Verdana,sans-serif; border-radius:15px; font-weight:bold; font-size:20px; margin-left:50px;'>Select Mode of Payment:</span>
</br>
</br>
&nbsp&nbsp&nbsp&nbsp<input type='radio' name='modeOfpay' value='cod' style='margin-left:50px;' checked><span style=' font-family:Verdana,sans-serif; border-radius:15px;'>Cash on delivery.</span></input>
</br>
</br>
&nbsp&nbsp&nbsp&nbsp<input type='radio' name='modeOfpay' value='online' style='margin-left:50px;'><span style=' font-family:Verdana,sans-serif; border-radius:15px;'>Debit/Credit Card.</span></input>
</br>
</br>
<button type='submit' style=' margin-left:50px; width:590px; text-align:center;' name='buy' class='cart' value='$adrr'>Confirm Order</button>
</form>
</div>
</div>";
?>