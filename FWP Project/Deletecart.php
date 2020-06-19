<?php 
		session_start();
		$name=$_SESSION['name'];
		$pid="";
		$pid=$_POST['dc'];
		$link=mysqli_connect("localhost","root","","Customers");
		$sql="Delete from $name where pid='$pid' ;";
		if(mysqli_query($link,$sql))
		{
			/*echo "<html>
							<head>
							<title>
							Success!</title>
							<link rel='shortcut icon' href='Logo.png' type='image/x-icon'>
								<style>
								body,html{
										margin:0;
								}
								hr {  
            top: 20px; 
            border: none; 
            height: 3px; 
            background: black;  
			width:400px;*/
			header("Location:YourCart.php");
			
        } 
					else
					{
						echo mysqli_error($link);
					}
		mysqli_close($link);
?>