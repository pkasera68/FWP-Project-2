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
				border:none;
}
button:hover{
				cursor:pointer;
}
	body,html{
			margin:0;
		}
	hr { 
            top: 20px; 
            border: none; 
            height: 3px; 
            background: black;  
			width:260px;
        } 
</style>
<title>
		<?php  echo "$name";?> 's Cart</title>
		<link rel="shortcut icon" href="Logo.png" type="image/x-icon">
</head>
<body>
<div style=" height:230px; width:cover; background-color:#192537;">
<a href="homepage.php" ><img class="top" src="toplogo.jpg"/></a>
</div>
</br></br></br></br><img src="cart_o.jpg" style="float:left;" ><span style='color:black; font-family:Impact,Charcoal,sans-serif; margin-bottom:500px; font-weight:bold; font-size:45px; '><?php  echo "$name";?>'s Cart </span>
<hr align="left"/>
</br></br></br>
<?php 
	$TotalPr=0;
	$link=mysqli_connect("localhost","root","","customers");
	if($link===false)
	{
		echo "Could not connect to database student:".mysqli_connect_error();
	}
	$sql="SELECT * FROM $name";
	if($re=mysqli_query($link,$sql))
	{
		if(mysqli_num_rows($re)>0)
		{
			$c=0;
			while($row=mysqli_fetch_array($re))
			{
				$c++;
				$intro=$row['intro'];
				$brand=$row['brand'];
				$mrp=$row['MRP'];
				$price=$row['price'];
				$disc=$row['discount'];
				$rating=$row['rating'];
				$img=$row['imgPath'];
				$pid=$row['pid'];
				$prarr=array($price);
				$TotalPr=$TotalPr+$price;
				echo "</br><div style='background-color:white;   height: 350px; margin-left:50px; border-top:1px LightGray solid; border-bottom:1px LightGray solid; width:1100px; ' >
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
	<form method='post' action='Deletecart.php'>
	<button type='submit' style=' margin-left:500px;' name='dc' class='cart' value='$pid'>Delete from cart</button>
	</form>
	</div></div>	
	
	 ";	}		$_GLOBAL['dis']=0;
		
				if($TotalPr<999)
				{
					$_GLOBAL['dis']=50;
				}
				$op=$TotalPr+$_GLOBAL['dis'];
				$dis=$_GLOBAL['dis'];
				$_SESSION['amt']=$op;
				$_SESSION['items']=$c;
				echo "</br><div style='background-color:white; margin-top:100px; margin-bottom:100px; height: 350px; margin-left:50px; border-top:1px LightGray solid; border-bottom:1px LightGray solid; width:600px; ' >
<div style='padding-left:60px; color:Gray; font-family:verdana,sans-serif; padding-top:30px; font-size:20px; height:50px; border-bottom:1px LightGray solid;'>PRICE DETAILS</div>
<div style='margin-left:50px; height:100px; border-bottom:2px LightGray dotted;  width:500px;'>
</br>
<span style='font-family:Arial,sans-serif;  font-size:18px;'>Price( $c items)</span><span style='margin-left:290px; width:60px; font-size:18px;'>&#8377;$TotalPr</span>
</br></br></br>";
echo "<span style='font-family:Arial,sans-serif;  font-size:18px;'>Delivery</span><span style='margin-left:360px;-family:verdana,sans-serif; font-size:18px;'>&#8377;$dis</span>
</div>
</br>
<span style='margin-left:50px; font-family:Verdana,sans-serif;  font-size:20px;'>Total Price:</span><span style='margin-left:300px; family:verdana,sans-serif; color:brown; font-size:22px;'>&#8377;$op</span>
<form method='post' action='delivery.php'>
</br></br>
<button type='submit' style=' margin-left:50px; width:490px; text-align:center;' name='buy' class='cart' value='$op'>Buy Now</button>
</form>
</div>";
			mysqli_free_result($re);
		}
		else
		{
			echo "<img style='width:1347px;' src='EmptyCart.png'/></br><form action='homepage.php'>
</br></br>
<button type='submit' style='width:200px; margin-left:1000px; text-align:center; background-color:white; border:2px #192537 solid; color:#192537;' name='pay' class='cart' >Start Shopping</button>
</form>";
		}
	}
	else
	{
		echo "ERROR:Could not execute $sql :".mysqli_error($link);
	}	
		
?>

</body>
</html>