<?php
		session_start();
		if (!isset($_SESSION['name'])) {
    header("Location: expiredS.php");
    exit;
		}
		$orderId=rand(1000000,5000000);
		if(!isset($_SESSION['orderId']))
		{
			$_SESSION['orderId']=$orderId;
		}
		$name=$_SESSION['name'];
		$Lname=$_SESSION['Lname'];
		$amt=$_SESSION['amt'];
		$items=$_SESSION['items'];
		$addr=$_SESSION['addr'];
		$modeOfpay=$_SESSION['paymode'];
		$orderId=$_SESSION['orderId'];
		$d=strtotime("+7 days");
		$dTostore=date('d/m/Y',strtotime("+7 days"));
		$td=date('d/m/Y',strtotime("today"));
		$payStatus="";
		$fullModeOfpay="";
		if($modeOfpay=='cod')
		{
			$fullModeOfpay="Cash on Delivery";
			$payStatus="Pending";
		}
		else
		{
			$fullModeOfpay="Debit/Credit Card";
			$payStatus="Paid";
		}
		//copying user's cart products into his orders
		$lwname=strtolower($name);
		$odtname=$lwname."orders";
		$odtname1=$lwname."ordersDetails";
	$link=mysqli_connect("localhost","root","","customers");
	if($link===false)
	{
		echo "Could not connect to database student:".mysqli_connect_error();
	}
	$sql1="INSERT INTO $odtname SELECT * FROM $name";
	$sql2="INSERT INTO $odtname1(orderNo,orderDate,TotalItems,TotalAmt,modeOfPay,payStatus,deliveryAddress,expectedDelivery) values('$orderId','$td','$items','$amt','$fullModeOfpay','$payStatus','$addr','$dTostore');";
	mysqli_query($link,$sql1);
	mysqli_query($link,$sql2);
?>
<html style="background-color:white">
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
		Order Successful</title>
		<link rel="shortcut icon" href="Logo.png" type="image/x-icon">
<body>
<div style=" height:200px; width:cover; background-color:#192537;">
<a href="homepage.php" ><img class="top" src="toplogo.jpg"/></a>
</div>
<div style="margin-left:480px; margin-top:40px;">
<img style="margin-left:70px;"src="rightTick1.jpg"/>
</br></br></br>
</br>
<span style="font-family: Perpetua,sans-serif; font-size:28px; ">
Thank you for your purchase!
</span>
</div>
</br>
</br></br>
<span style="font-family:verdana,sans-serif; font-size:20px; ">
Your order number is:<?php echo  "<span style='color:DodgerBlue;'>#".$orderId."</span>"; ?>
</span>
<div style='width:600px; height:400px; padding-top:20px;'>
<span style="font-family:verdana,sans-serif; font-size:20px; ">
Order Summary:
</span>
</br></br>
<span style="font-family:Copperplate,sans-serif; font-size:16px; ">
Total Items:<?php echo  "<span>".$items."</span>"; ?>
</span>
</br></br>
<span style="font-family:Copperplate,sans-serif; font-size:16px; ">
<?php if($modeOfpay=='cod'){echo  "<span>Total Payable:&nbsp &#8377;".$amt."</span>";}else{ echo  "<span>Total Paid:&nbsp &#8377;".$amt."</span>";}?>
</span>
</br></br>
<span style="font-family:Copperplate,sans-serif; font-size:16px; ">
<?php if($modeOfpay=='cod'){echo  "<span>Mode Of Payment:&nbsp <span style='color:DodgerBlue'> Cash on delivery.</span></span>";}else{ echo  "<span>Mode Of Payment:&nbsp<span style='color:DodgerBlue'>  Debit/Credit Card.</span></span>";}?>
</span>
</br></br>
<span style="font-family:Copperplate,sans-serif; font-size:16px; ">
<?php if($modeOfpay=='cod'){echo  "<span>Payment Status:&nbsp <span style='color:brown'>Pending.</span></span>";}else{ echo  "<span>Payment Status:&nbsp <span style='color:green'>Done.</span></span>";}?>
</span>
</br></br>
<span style="font-family:Copperplate,sans-serif; font-size:16px; ">
<?php echo  "<span>Deliver to:&nbsp $name&nbsp$Lname</span>";?>
</span>
</br></br>
<span style="font-family:Copperplate,sans-serif; font-size:16px; ">
<?php echo  "<span>Delivery Address:&nbsp $addr </span>";?>
</span>
</br></br>
<span style="font-family:Copperplate,sans-serif; font-size:16px; ">
<?php echo  "<span>Expected Delivery Upto:&nbsp".date('d/m/Y',$d)."</span>";?>
</span>
</br>
<form action='homepage.php'>
</br></br>
<button type='submit' style=' margin-left:800px; width:200px; text-align:center; background-color:white; border:2px #192537 solid; color:#192537;' name='pay' class='cart' value='$adrr'>Continue Shopping</button>
</form>
</div>
</body>
</html>