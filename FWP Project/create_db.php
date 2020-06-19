<?php
	
	$link=mysqli_connect("localhost","root","");
	if($link==false)
	{
			echo "Can not connect ".mysqli_connect_error();
	}
	$sql="create database Customers";
	if(mysqli_query($link,$sql))
	{
			echo "database has been created.";
	}
	else
	{
		echo "can not execute ".$sql." ".mysqli_error($link);
	}
?>
			