<?php 
		session_start();
		if (!isset($_SESSION['name'])) {
    header("Location: expiredS.php");
    exit;
		}
?>
<html>
<head>
<title>
		Today's deals</title>
		<link rel="shortcut icon" href="Logo.png" type="image/x-icon">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--Social media icon library-->
<style>	
body{
			margin:0;
		}
.fa {
	
  padding: 10px;
  font-size: 30px;
  width: 20px;
  text-align: center;
  text-decoration: none;
  border-radius: 50%;
}
img.top{
        max-width: 100%;
        max-height: 100%;
        display: block; /* remove extra space below image */
    }
.fa:hover {
    opacity: 0.7;
}
a:hover{
			font-weight:bolder;
			color:white;
		}
a{
		color:Tan;
		font-size:23px;
		text-decoration:none;
}
</style>
</head>
<body style="background-color:#192537;">
<a href="homepage.php"><img  class="top" src="toplogo.jpg" /></a>
<hr style="border-color:Tan;">
<span style="color:Tan; font-family:Impact,Charcoal,sans-serif; font-size:70px;">Best Deals for you.</span>
<div style="width:cover; margin-top:10px; height:400px; background-color:black; color:Tan;">
<marquee behavior="scroll" scrolldelay="170" direction="up" style="margin-left:400px; color:Tan; color:Tan;">
<a style="margin-top:30px;" href="myPandEl.php" >Flat 10-55% OFF on Pressure Cookers.</a>
</br>
</br>
<a href="myCupsPltsGls.php" >Great bonanza offer on Steel glasses.</a>
</br>
</br>
<a  style="margin-bottom:30px;" href="mydinnerSets.php" >Flat 45% OFF on BOROSIL Dinner Set.</a>
</br>
</br>
<a  style="margin-bottom:30px;" href="" >Use Coupen Code <b>BRASS45</b> to get 45% OFF on Brass and Bronze till August 10.</br></a>
</br>
<span style="font-size:1em;">( Terms and conditions applied. )<span>
</br>
</br>
<a  style="margin-bottom:30px;" href="PcAndEl2.php" >Flat 30-60% OFF on LPG Gas burners.</a>
</br>
</br>
<a  style="margin-bottom:30px;" href="myCupsPltsGls.php" >End of Season Sale on Sumeet Plates.</a>
</br>
</br>
<a  style="margin-bottom:30px;" href="myPandEl2.php" >Use Coupen Code <b>AVAIL27</b> to get discount of 27% on Electronics till August 15.</br></a>
</br>
<span style="font-size:1em;">( Terms and conditions applied. )<span>
</br>
</br>
</marquee>
</div>
</br></br></br></br>
<div style='background-color:#2F4F4F; height:330px;'>
<table>
<tr>
	<td >
			<img src='Logo2.png' style='margin-left:100px; border-radius:20px;' height='70px' width='350px'/>
			</br>
			<span style='color:tan; margin-left:150px; font-family:Brush Script MT,sans-serif; font-size:27px;'> You Eat We Serve..</span>
			</br></br></br></br>
			<span style='color:white;  margin-left:50; '>Copyright <span style='font-size:22px;'>&copy </span> 2020 All rights reserved</span>
			<span style='color:Tan; font-weight:bold;'>WORLD_OF_UTENSILS.COM</span>
	</td>
	
	<td >
		<span style='color:tan;  margin-left:250px; font-family:Arial,sans-serif; font-weight:bolder; font-size:30px;'>Contact us</span>
		<table style='margin-top:20px;' >
			<tr>
				<td>
					<span style='color:tan;  margin-left:250px; font-family:Arial,sans-serif;  font-size:16px;'><b>PHONE:</b></span>
				</td>
			</tr>
			<tr>
				<td>
					<span style='color:tan; font-family:Arial,sans-serif;  margin-left:250px; font-size:16px;'>+919893074443</span></br>
					<span style='color:tan; font-family:Arial,sans-serif;  margin-left:250px; font-size:16px;'>+919009752257</span>
				</td>
			</tr>
			<tr>
				<td>
					</br>
					</br>
					
					<span style='color:tan;  margin-left:250px; font-family:Arial,sans-serif;  font-size:16px;'><b>EMAIL US:</b></span>
				</td>
			</tr>
			<tr>
				<td>
					<span style='color:tan; font-family:Arial,sans-serif;  margin-left:250px; font-size:16px;'>pkasera68@gmail.com</span></br>
				</td>
			</tr>
			<tr>
				<td>
				</br>
		<span style='color:tan;  margin-left:250px; font-family:Arial,sans-serif; font-weight:bold; font-size:16px;'>Get in touch:</span></br>			
		<a href='https://www.facebook.com/'  style='margin-left:240px;'class='fa fa-facebook'></a>
		<a href='https://twitter.com/login' style='margin-left:20px;' class='fa fa-twitter'></a>
		<a href='' style='margin-left:20px;' class='fa fa-google'></a>
		<a href='' style='margin-left:20px;' class='fa fa-whatsapp'></a>
				</td>
			</tr>
		</table>
	</td>
</tr>	
</div>
</body>
</html>