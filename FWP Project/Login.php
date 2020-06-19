<?php
		
		session_start();
		$username=$_POST['lgtxt1'];;
		$password=$_POST['lgtxt2'];
		$link=mysqli_connect("localhost","root","","Customers");
		$sql="SELECT * FROM Info WHERE userid='$username' AND password='$password';";
		if($rows=mysqli_query($link,$sql))
		{
				if(mysqli_num_rows($rows)>0)
				{
					$re=mysqli_fetch_array($rows);
					$_SESSION["name"]=$re['Name'];
					$_SESSION["usr"]=$username;
					$tab=$re['Name'];
					$lwname=strtolower($tab);
					$odtname=$lwname."orders";
					$odtname1=$lwname."ordersDetails";
					$sql3="CREATE TABLE $odtname (intro varchar(1000),brand	varchar(1000),MRP varchar(100),price varchar(100),discount varchar(100),rating	varchar(1000),imgPath	mediumtext,pid varchar(10),subC	varchar(20));";
					mysqli_query($link,$sql3);
					$sql2="CREATE TABLE $tab (intro varchar(1000),brand	varchar(1000),MRP varchar(100),price varchar(100),discount varchar(100),rating	varchar(1000),imgPath	mediumtext,pid varchar(10),subC	varchar(20));";
					mysqli_query($link,$sql2);
					$sql2="CREATE TABLE $odtname1 (orderNo bigint,orderDate varchar(100),TotalItems varchar(1000),TotalAmt bigint,modeOfPay varchar(100),payStatus varchar(100),deliveryAddress varchar(1000),expectedDelivery varchar(100));";
					mysqli_query($link,$sql2);
						header('Location:homepage.php');
				}
			else
				{
						echo "<span style=' color:red; font-weight:bold; font-size:3em;' >**Invalid Credentials.</span>";
						include 'login_page.html';
				}
		}
?>