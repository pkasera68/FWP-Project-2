<?php
		session_start();
		if (!isset($_SESSION['name'])) {
    header("Location: expiredS.php");
    exit;
		}
		$_SESSION["prt"]='PandEl';
?>
<html style="background-color: #EAEDED">
<head>
<title>
		Pressure Cookers</title>
		<link rel="shortcut icon" href="Logo.png" type="image/x-icon">
<style>
button.intro:hover
		{
			font-weight:bolder;
			color:#BDB76B;
			cursor:pointer;
		}
button.intro{
		font-family:'Times New Roman',serif;
		color:#192537;
		margin: 0;
		width:700px;
		text-align:left;
		background-color:white;
		border:none;
		outline:none;
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
button.cart:hover{
					transform:scale(1.1);
					letter-spacing:1.5px;
	}
	body{
			margin:0;
		}
	hr { 
            position: relative; 
            top: 20px; 
            border: none; 
            height: 3px; 
            background: black;  
			width:400px;
			
        } 
		button:active{
						outline:none;
		}
		.pagination a.active {
  background-color: dodgerblue;
  color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
</style>
</head>
<body>
<div style=" height:230px; background-color:#192537;">
<a href="homepage.php" ><img class="top" src="toplogo.jpg"/></a>
</div>
</br></br></br></br><span style='color:black; font-family:Impact,Charcoal,sans-serif; font-weight:bold; font-size:45px; '>Pressure Cookers </span>
<hr align="left"/>
<?php 
	$link=mysqli_connect("localhost","root","","customers");
	if($link===false)
	{
		echo "Could not connect to database student:".mysqli_connect_error();
	}
	$sql="SELECT * FROM PandEl WHERE subC='prsC'";
	
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
				$_SESSION['PID']=$pid;
				echo "</br><div style='background-color:white;   height: 350px; margin-left:50px; border-top:1px LightGray solid; border-bottom:1px LightGray solid; width:1100px; ' >
<div style='float:left;'><img src='$img' style='border-radius:30px;' width='250px' height='300px'/></div>
	<div style=' margin-top:70px;'>
	<form method='post' action='productIndetail.php'>
	<button class='intro' value='$pid' name='pdt'>$intro</button>
	</form>
	<span><b>by $brand</b></span>
	</br>
	<span><b>M.R.P:<span style='text-decoration:line-through;'> $mrp Rs</span></span>
	</br>
	<span><b>Price:<span style='color:brown; font-size:23px;'> $price Rs</span></span>
	</br>
	<span><b>Your Save: <span style='color:brown;'>$disc Rs ( $off% OFF)</span></span>
	</br>
	<span>&nbsp &nbsp &nbsp &nbspInclusive of all Taxes.</span>
	</br>
	<span><b>Rating:<span style='color:yellow; background-color:black; font-size:20px;'>&nbsp $rating&nbsp</span></span>
	</br>
	<span style='color:green; font-size:20px; font-family:Arial,serif;'>&nbsp &nbsp &nbsp &nbsp In Stock.</br></span>
	<form method='post' action='addTocart.php'>
	<button type='submit' name='g1' class='cart' value='$pid'>Add to cart</button>
	</form>
	</div></div>";
			}
			
			mysqli_free_result($re);
		}
		else
		{
			echo "No rows to display.";
		}
	}
	else
	{
		echo "ERROR:Could not execute $sql :".mysqli_error($link);
	}
	echo "</br></br><div class='pagination' style='margin-left:500px;'>
  <a href='myPandEl.php'>&laquo;</a>
  <a class='active' href='myPandEl.php'>1</a>
  <a  href='myPandEl2.php'>2</a>
  <a href='myPandEl2.php'>&raquo;</a>
</div>";
?>

</body>
</html>