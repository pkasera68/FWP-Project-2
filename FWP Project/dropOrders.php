<?php 
		session_start();
		$name=$_SESSION['name'];
		$tname=$name."orders";
		$tname1=$name."ordersDetails";
		$link=mysqli_connect("localhost","root","","Customers");
		$sql="TRUNCATE $tname;";
		$sql1="TRUNCATE $tname1;";
		if(mysqli_query($link,$sql) && mysqli_query($link,$sql1))
		{
				header("Location:YourOrders.php");
		}
?>