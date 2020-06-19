<?php 
		session_start();
		if (!isset($_SESSION['name'])) {
    header("Location: expiredS.php");
    exit;
		}
		$name=$_SESSION['name'];
?>
<html style="background-color: #EAEDED">
<head>
<style>
a.intro:hover{
			font-weight:bolder;
			color:#BDB76B;
			cursor:pointer;
		}
a.intro{
		
		font-size:20px;
		text-decoration:none;
		font-weight:bolder;
}
img.top{
        max-width: 100%;
        max-height: 100%;
        display: block; /* remove extra space below image */
    }
p.cl1{
	font-size:22px;
	color:blue;
	font-weight:bolder;
}
div{
		
	}
	.pagination a {
  color: black;
  
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
}
.pagination a.active {
  background-color: dodgerblue;
  color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
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
	body,html{
			margin:0;
		}
	
</style>
<title>
		<?php  echo "$name";?> 's Orders</title>
		<link rel="shortcut icon" href="Logo.png" type="image/x-icon">
</head>
<body>
<div style=" height:230px; width:cover; background-color:#192537;">
<a href="homepage.php" ><img class="top" src="toplogo.jpg"/></a>
</div>
</br></br></br></br><span style='color:black; font-family:Impact,Charcoal,sans-serif; margin-bottom:500px; font-weight:bold; font-size:45px; '> Your Orders History</span>
</br></br></br>
<?php 
	$link=mysqli_connect("localhost","root","","customers");
	if($link===false)
	{
		echo "Could not connect to database student:".mysqli_connect_error();
	}
	$odtname=$name."orders";
	$odtname1=$name."ordersDetails";
	$sql1="SELECT * FROM $odtname1;";
	if($re1=mysqli_query($link,$sql1))
	{
		if(mysqli_num_rows($re1)>0)
		{
			while($row1=mysqli_fetch_array($re1))
			{
				$orderNo=$row1['orderNo'];
				$orderDate=$row1['orderDate'];
				$TotalItems=$row1['TotalItems'];
				$TotalAmt=$row1['TotalAmt'];
				$modeOfPay=$row1['modeOfPay'];
				$payStatus=$row1['payStatus'];
				$deliveryAddress=$row1['deliveryAddress'];
				$expectedDelivery=$row1['expectedDelivery'];
				echo "<div style='height:300px; width:800px; padding-left:50px; padding-top:50px; margin-left:100px; margin-top:50px; background-color:#F8F8F8; border:2px #C8C8C8 solid; border-radius:10px;'>

						<span style='font-family:Copperplate,sans-serif; font-size:19px; font-weight:bold;'>Order Number:
						<span style='font-family:Copperplate,sans-serif; font-size:17px; color:green;'>&nbsp#$orderNo</span></span>
						</span><span style='font-family:Copperplate,sans-serif; font-size:19px; margin-left:210px; font-weight:bold;'>Order Date:
						<span style='font-family:Copperplate,sans-serif; font-size:17px; '>&nbsp&nbsp&nbsp&nbsp$orderDate</span></span> 						
						</br></br>
						<span style='font-family:Copperplate,sans-serif; font-size:19px; font-weight:bold;'>&nbsp&nbsp&nbsp&nbsp$TotalItems Items.</span></span>
						</br></br>
						<span style='font-family:Copperplate,sans-serif; font-size:19px; font-weight:bold;'>Deliver to:
						<span style='font-family:Copperplate,sans-serif; font-size:16px; '>&nbsp&nbsp$deliveryAddress.</span></span>
						</br></br>
						<span style='font-family:Copperplate,sans-serif; font-size:19px; font-weight:bold;'>Expected Delivery:
						<span style='font-family:Copperplate,sans-serif; font-size:16px; '>&nbsp&nbsp$expectedDelivery.</span></span>
						</br></br>
						<span style='font-family:Copperplate,sans-serif; font-size:19px; font-weight:bold; '>Payment Status:
						<span style='font-family:Copperplate,sans-serif; font-size:16px; '>&nbsp$payStatus.</span></span>
						<span style='font-family:Copperplate,sans-serif; font-size:19px; font-weight:bold;  margin-left:240px;'>Mode of Payment:
						<span style='font-family:Copperplate,sans-serif; font-size:16px; '>&nbsp$modeOfPay.</span></span>
						</br></br>
						<hr style='width:80%; text-align:left; margin-left:0; border-width:1px; border-style:dashed; color:#C8C8C8;';>
						</br>
						<span style='font-family:Copperplate,sans-serif; font-size:25px; font-weight:bold;'>Order Total:
						<span style='font-family:Copperplate,sans-serif; font-size:23px; color:brown;'>&nbsp&#8377;$TotalAmt</span>
				</div>";
			}
			mysqli_free_result($re1);
			echo"</br></br></br></br><span style='color:black; font-family:Impact,Charcoal,sans-serif; margin-bottom:500px; font-weight:bold; font-size:45px; '> Your recent Orders:</span>
</br></br></br>";
	$sql="SELECT * FROM $odtname";
	if($re=mysqli_query($link,$sql))
	{
		if(mysqli_num_rows($re)>0)
		{
			while($row=mysqli_fetch_array($re))
			{
				$intro=$row['intro'];
				$brand=$row['brand'];
				$mrp=$row['MRP'];
				$price=$row['price'];
				$disc=$row['discount'];
				$rating=$row['rating'];
				$img=$row['imgPath'];
				$pid=$row['pid'];
				$prarr=array($price);
				echo "</br><div style='background-color:white;   height: 350px; margin-left:50px; border-top:1px LightGray solid; border-bottom:1px LightGray solid; width:900px; ' >
<div style='float:left;'><img src='$img' style='border-radius:30px;' width='250px' height='300px'/></div>
	<div style=' margin-top:70px;'>
	<a  class='intro'>$intro</a>
	</br>
	<span><b>by $brand</b></span>
	</br>
	<span><b>M.R.P:<span style='text-decoration:line-through;'> $mrp Rs</span></span>
	</br>
	<span><b>Price:<span style='color:brown; font-size:23px;'> $price Rs</span></span>
	</br>
	<span><b>Your Save: <span style='color:brown;'>$disc Rs</span></span>
	</br>
	<span>&nbsp &nbsp &nbsp &nbspInclusive of all Taxes.</span>
	</br>
	<span><b>Rating:<span style='color:yellow; background-color:black; font-size:20px;'>&nbsp $rating&nbsp</span></span>
	</br>
	<span style='color:green; font-size:20px; font-family:Arial,serif;'>&nbsp &nbsp &nbsp &nbsp In Stock.</br></span>
	</div></div>	
	
	 ";	}
			mysqli_free_result($re);
		}
	}
}
		else
		{
			echo "<img  style=' float:left; ' src='emptygif2.gif'/><div style='margin:100 100 100 100; float:left; font-family:verdana,sans-serif;'>
			<span style='font-size:50px;'>Empty!</span></br><span style='font-size:20px;'>seems like you have'nt Ordered anything Yet. </span></br><form action='homepage.php'>
</br></br>
<button type='submit' style='width:200px; text-align:center; background-color:white; border:2px #192537 solid; color:#192537;' name='pay' class='cart' >Start Shopping</button>
</form></div>";
		}
	}
	else
	{
		echo "ERROR:Could not execute $sql :".mysqli_error($link);
	}			
?>
<form action="dropOrders.php">
<button type='submit' style='  margin-left:300px; margin-top:100px; width:590px; text-align:center;' name='buy' class='cart' value='$adrr'>Clear order history</button>
</form>
</body>
</html>