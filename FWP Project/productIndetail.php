<?php
		session_start();
		$pid=$_POST['pdt'];
		$tname=$_SESSION["prt"];
?>
<html style="background-color: #EAEDED">
<head>
<title>
		Product Details</title>
		<link rel="shortcut icon" href="Logo.png" type="image/x-icon">
<style>
	button.cart{
			border-radius:12px; width:550px; height:50px; 
			margin-left:30px; 
			font-family:verdana,sans-serif;
			font-size:18px;
			background-color:#192537; color:tan; margin-bottom:10px;
			}
button.cart:hover{
					cursor:pointer;
					letter-spacing:1.5px;
	}
	body{
			margin:0;
		}  
		button:active{
						outline:none;
		}
</style>
</head>
<body>
<div style=" height:230px; background-color:#192537;">
	<a href="homepage.php" ><img class="top" src="toplogo.jpg"/></a>
</div>
<?php 
	$link=mysqli_connect("localhost","root","","customers");
	if($link===false)
	{
		echo "Could not connect to database student:".mysqli_connect_error();
	}
	$sql="SELECT * FROM  $tname WHERE 	ProdID='$pid'";
	
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
				$off=$row['Off%'];
				$rating=$row['rating'];
				$img=$row['img_path'];
				$pid=$row['ProdID'];
				echo "<div style='background-color:white; border-radius:20px; padding-top:50px; width:1200px; border:1px solid LightGrey;  padding-bottom:30px; padding-left:50px; margin-top:50px;  margin-bottom:50px; margin-left:50px;'>
				<table style='border:none;'>
				<tr>
				<td>
				<img src='$img' style='height:500px; width:500px; border:1px solid LightGrey;'/>
				</td>
				<td style='width:40px;  border-right:2px dashed LightGrey;'>
				</td>
				<td style='padding-left:30px;'>
					<span style='color:#192537; font-family:Impact,charcoal,sans-serif; font-size:25px;'>$intro.</span>
					</br></br>
					<span style='color:#192537; font-family:Verdana,sans-serif; font-size:16px;'> by 
					<span style='color:DodgerBlue; font-family:Verdana,sans-serif; font-size:18px;'>$brand
					</span>
					</span>
					</br>
					<span style='color:#192537; font-family:Verdana,sans-serif; font-size:20px; font-weight;bold;'> Customer Review:
					<span style='color:Orange; font-family:Verdana,sans-serif; font-size:18px;'>$rating
					</span>
					</span>
					</br></br></br>
					<span style='color:#192537; font-family:Verdana,sans-serif; font-size:20px; font-weight;bold;'> Price:
					<span style='color:Brown; font-family:Verdana,sans-serif; font-size:23px;'> &#8377; $price
					</span>
					</span>
					</br></br>
					<span style='color:#192537; font-family:Verdana,sans-serif; font-size:16px; font-weight;bold;'>MRP: 
					<span style='text-decoration:line-through;'> &#8377; $mrp
					</span>
					</span>
					</br></br>
					<span style='color:#192537; font-family:Verdana,sans-serif; font-size:16px; font-weight;bold;'> Your Save:
					<span style='color:Green; font-family:Verdana,sans-serif; font-size:16px;'> &#8377; $disc
					</span>
					</span>
					</br></br>
					<span style='color:Green; font-family:Impact,charcoal,sans-serif; font-size:22px;'>$off% OFF.</span>
					</br></br></br></br>
					<form method='post' action='addTocart.php'>
					<button type='submit' name='g1' class='cart' value='$pid'>Add to cart</button>
					</form>
				</td>
				</tr>
				</table>
				</div>";
			}
			mysqli_free_result($re);
		}
	}
?>
</body>
</html>
		