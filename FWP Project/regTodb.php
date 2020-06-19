<?php	
		
		$name=$_POST['regtxt1'];
		$lname=$_POST['regtxt2'];
		$mno=$_POST['regtxt3'];
		$gender=$_POST['rgrd1'];
		$email=$_POST['regtxt4'];
		$userid=$_POST['regtxt5'];
		$pss=$_POST['regtxt6'];
		$cpss=$_POST['regtxt7'];
		$fadd=$_POST['regtxt8'];
		$link=mysqli_connect("localhost","root","","Customers");
		$sql="insert into Info(Name,Lname,mobileno,gender,email,userid,password,Cpassword,fulladdress) values('$name','$lname','$mno','$gender','$email','$userid','$pss','$cpss','$fadd');";
		if(mysqli_query($link,$sql))
		{
				echo '<p style="font-size:40px; font-family:Arial,sans-serif; color:red; font-weight:bolder;">Registration Successfull!<p>';
				include 'login_page.html';
				
		}
?>