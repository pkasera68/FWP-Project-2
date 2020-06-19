<?php 
		session_start();
		if (!isset($_SESSION['name'])) {
    header("Location: expiredS.php");
    exit;
		}
		$name=$_SESSION['name'];
		$usr=$_SESSION["usr"];
		$amt=$_SESSION["amt"];
?>
<html style="background-color: #EAEDED">
<head>
<style>
button.cart{
border-radius:12px; width:200px; height:50px; 
margin-left:150px; 
font-family:verdana,sans-serif;
font-size:18px;
background-color:#192537; color:tan; margin-bottom:50px;}
button:active{
				outline:none;
}
input[type=text]:focus{
				outline:none;
}
button:hover{
				cursor:pointer;
}
</style>
<title>
		Delivery</title>
		<link rel="shortcut icon" href="Logo.png" type="image/x-icon">
</head>
<?php
	$link=mysqli_connect("localhost","root","","customers");
	if($link===false)
	{
		echo "Could not connect to database student:".mysqli_connect_error();
	}
	$sql="SELECT * FROM Info where userid='$usr'";
	if($re=mysqli_query($link,$sql))
	{
		if(mysqli_num_rows($re)>0)
		{
			$row=mysqli_fetch_array($re);
			$adrr=$row['fulladdress'];
			$lname=$row['Lname'];
			$_SESSION['Lname']=$lname;
			$d=strtotime("+7 days");
			
			echo "</br></br></br><div style='width:1000px; height:300px; padding-left:50px;'>
					<span style=' font-family:Verdana,sans-serif; font-size:30px;'>Choose your delivery options</span>
					</br></br></br>
					<div style='width:800px; border-top:1px LightGray solid; border-bottom:1px LightGray solid;'>
					</br></br>
					<form method='post' action='changeAdrr.php'>
					<span style=' font-family:Verdana,sans-serif; font-size:18px;'>
					<input type='radio' checked>&nbsp&nbspDeliver To:$name $lname</br>&nbsp&nbsp$adrr</input></span>
					</br></br>
					<span style=' color:grey; font-family:Verdana,sans-serif; font-size:16px;'>(Expected delivery upto: ". date('d/m/Y',$d)
					." )</span>
					</br></br></br>
					<input type='text' name='newA' style='height:40px; padding-left:20px; border:1px solid white;  border-radius:5px; margin-left:50px; width:300px;' placeholder='Add New Address'></input>
					</br></br>
					<button type='submit' style=' margin-left:50px; width:300px; text-align:center;' name='chadr' class='cart' value='$usr'>Change Address</button>
					</form>
					</div>
					<form method='post' action='orderDetails.php'>
					</br></br>
					<button type='submit' style=' margin-left:50px; width:500px; text-align:center;' name='pay' class='cart' value='$adrr'>Proceed To Pay</button>
					</div>";
		}
	}
	else
	{
		echo mysqli_error();
	}
?>
</html>