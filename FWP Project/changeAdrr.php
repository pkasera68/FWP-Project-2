<?php 
		session_start();
		$name=$_SESSION['name'];
			$newA=$_POST['newA'];
			$usr=$_POST['chadr'];
		$link=mysqli_connect("localhost","root","","Customers");
		$sql="UPDATE Info SET fulladdress='$newA' WHERE userid='$usr'";
		if(mysqli_query($link,$sql))
		{
			header('Location:delivery.php');
		}
		else
		{
			echo mysqli_error($link);
		}
?>