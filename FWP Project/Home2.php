<?php 
		session_start();
		$name=$_SESSION['name'];
		$usr=$_SESSION['usr']
?>
<html style='background-color:black;'>
<head>		
<title>
		Home Page</title>
		<link rel='shortcut icon' href='Logo.png' type='image/x-icon'>
<link type='text/css' rel='stylesheet' href='magicscroll.css'/><!--magic scroll library-->
<script type='text/javascript' src='magicscroll.js'></script>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'><!--Social media icon library-->
<style>
html, body {
  height: 100%;
  margin: 0;
}
a:hover{
			color:white;
			font-weight:bolder;
		}
a{
		text-decoration:none; 
			color:Tan;
}
.fa {
	
  padding: 10px;
  font-size: 30px;
  width: 20px;
  text-align: center;
  text-decoration: none;
  border-radius: 50%;
}
.fa:hover {
    opacity: 0.7;
}
a:hover img {
        transform: scale(1.3);
		}
a:hover{
			font-weight:bolder;
			color:white;
		}
a{
		color:Tan;
		
		text-decoration:none;
}
.Nocss:hover{
				transform:scale(1);
		}
</style>
</head>
<body>
<div style='background-color:#192537; height:222px; width:100%; top:0; left:0; right:0; bottom:0;'><img  src='toplogo.jpg'/>
<div style='width:100%; top:20; left:0; right:0; bottom:0; background-color:black; height:50px;'>
<table border='0' style='padding-top:10px;'>
<tr >
	<td style='background-color:black;  width:100px; text-align:center; font-family:verdana,sans-serif;'><a href='homepage.php' target='_self' >Home</a></td>
<td style='background-color:black; width:100px; text-align:center; font-family:verdana,sans-serif;'>
	<a href='categories.html' target='_blank' >Categories</a>
</td>
<td style='background-color:black; width:200px; text-align:center; font-family:verdana,sans-serif;'>
	<a href='Todaysdeals.html' target='_blank'>Today's deals</a>
</td>
<td style='background-color:black; width:100px; text-align:center; font-family:verdana,sans-serif;'>
	<a href='aboutus.html' target='_blank' >About Us</a>
</td>
<td style='background-color:black; width:100px; text-align:center; font-family:verdana,sans-serif;'>
	<a href='' target='_blank' >Your cart</a>
</td>
<td style='background-color:black; width:500px;'></td>
<td style='background-color:black; color:tan; width:200px; text-align:center; font-family:verdana,sans-serif;'>Hello <?php  echo "$usr"; ?>
</td>
</tr>
</table>
</div>
<!--<ul style='list-style-type:disc;'>

<li><marquee style='color:Tan; font-size:25px; font-family:'Georgia',Monospace; font-weight:bold;' scrolldelay='5' scrollamount='6' direction='left' behaviour='scroll'>Welcome dear customer!</marquee></li>
</br>
<li><marquee style='color:Tan; font-family:'lucida console',Monospace;' scrolldelay='5' scrollamount='4' direction='left' behaviour='scroll'>We have all what you are looking for.</marquee></li>
<li><marquee style='color:Tan; font-family:'lucida console',Monospace;' scrolldelay='5' scrollamount='4' direction='left' behaviour='scroll'>Go to <b>Today's deals</b> section for best offers. </marquee></li>
<li><marquee style='color:Tan; font-family:'lucida console',Monospace;' scrolldelay='5' scrollamount='4' direction='left' behaviour='scroll'>Go to <b>About us</b> section for more details.</marquee></li>
</ul>-->
<span style='color:Tan; font-family:Impact,Charcoal,sans-serif; font-size:70px; '>Welcome </span>
<span style='color:Tan; font-family:Impact,Charcoal,sans-serif; font-size:40px;'><?php  echo "$name"; ?> !</span>
</br>
</br>
<span style='color:Tan; font-family:Brush Script MT,sans-serif; font-size:40px;'> dear customer.</span>
</br>
</br></br></br>
<span style='color:Tan; font-family:Brush Script MT,sans-serif; font-size:40px;'>Choose by Categories</span>
<div class='MagicScroll' style='background-color:black;'   data-options='width: 1340; height:300; items:4; step: 2; arrows-color:Tan; '>
<a href='myPandEl.php' target='_top'><img height='250px' width='240px' src='prsckrH.jpg'/> <span style='color:tan; font-weight:bolder; margin-top:21px; font-family:sans-serif,Arial; font-size:18px;'>Pressure Cookers and Electronics</span></a>
<a href=''> <img height='400px' width='700px' src='knvsp1.jpg'/><span style='color:tan; font-weight:bolder; margin-top:20px; font-family:sans-serif,Arial; font-size:18px;'>Knives and Spoons.</span></a>
<a href=''> <img height='600px' width='600px' src='dinner-set.jpg'/><span style='color:tan; font-weight:bolder; margin-top:21px; font-family:sans-serif,Arial; font-size:18px;'>Dinner Sets</span></a>
<a href=''> <img height='500px' width='800px' src='glcuppl.jpg'/><span style='color:tan; font-weight:bolder; margin-top:20px; font-family:sans-serif,Arial; font-size:18px;'>Cups Plates and Glasses.</span></a>
<a href=''> <img height='600px' width='600px' src='nonstcksH1.jpg'/><span style='color:tan; font-weight:bolder; margin-top:21px; font-family:sans-serif,Arial; font-size:18px;'>Non-Stick Cookawares.</span></a>
<a href=''> <img height='600px' width='600px' src='brsbrnz1.jpg'/><span style='color:tan; font-weight:bolder; margin-top:21px; font-family:sans-serif,Arial; font-size:18px;'>Royal Brass and Bronze.</span></a>
<a href=''> <img height='600px' width='800px' src='pot1.jpg'/><span style='color:tan; font-weight:bolder; margin-top:21px; font-family:sans-serif,Arial; font-size:18px;'>Steel Pots.</span></a>

</div>
</br> </br>
</br> </br>
</br> 
<span style='color:Tan; font-family:Impact,Charcoal,sans-serif; font-size:70px; margin-left:400px;'>Best Deals for you.</span>
<hr color='tan'  width='600px' align='center'>
<table>
<tr>
<td>
<img src='advrt1.jpg'   height='300px' width='400px'/>
	</br>
<img src='advrt4.jpg'   height='300px' width='400px'/>

</td>
<td>
<div style='width:900px; height:600px; background-color:black; color:Tan;'>
<marquee behavior='scroll' scrolldelay='170' direction='up' style=' height:500px; margin-left:100px; color:Tan; color:Tan;'>
<a style='margin-top:30px; font-size:23px;' href='myPandEl.php' >Flat 10-55% OFF on Pressure Cookers.</a>
</br>
</br>
<a href='' style='font-size:23px;'>Great bonanza offer on Steel glasses.</a>
</br>
</br>
<a  style='margin-bottom:30px; font-size:23px;' href='' >Flat 20% OFF on KitchenKing Dinner Set.</a>
</br>
</br>
<a  style='margin-bottom:30px; font-size:23px;' href='' >Use Coupen Code <b>BRASS45</b> to get 45% OFF on Brass and Bronze till April 10.</br></a>
</br>
<span style='font-size:1em;'>( Terms and conditions applied. )<span>
</br>
</br>
<a  style='margin-bottom:30px; font-size:23px;' href='PcAndEl2.html' >Flat 30-60% OFF on LPG Gas burners.</a>
</br>
</br>
<a  style='margin-bottom:30px; font-size:23px;' href='' >End of Season Sale on Dhara Plates.</a>
</br>
</br>
<a  style='margin-bottom:30px; font-size:23px;' href='' >Use Coupen Code <b>AVAIL27</b> to get discount of 27% on Electronics till August 15.</br></a>
</br>
<span style='font-size:1em;'>( Terms and conditions applied. )<span>
</br>
</br>
</marquee>
</div>
</td>

</tr>
</table>
</br></br></br></br>
<div style='background-color:#2F4F4F; height:300px;'>
<table>
<tr>
	<td >
			<img src='Logo2.png' style='margin-left:100px; border-radius:20px;' height='70px' width='350px'/>
			</br>
			<span style='color:tan; margin-left:150px; font-family:'Brush Script MT',sans-serif; font-size:27px;'> You Eat We Serve..</span>
			</br></br></br></br>
			<span style='color:white;  margin-left:50; '>Copyright <span style='font-size:22px;'>&copy </span> 2020 All rights reserved</span>
			<span style='color:Tan; font-weight:bold;'>WORLD_OF_UTENSILS.COM</span>
	</td>
	<td style='padding-left:120px; padding-top:160px;'>
	<span style='color:tan;   font-family:Arial,sans-serif; font-weight:bolder; font-size:30px;'>Connect Socialy:</span></br></br>
		<a href='https://www.facebook.com/'  style='margin-left:20px;'class='fa fa-facebook'></a>
		<a href='https://twitter.com/login' style='margin-left:20px;' class='fa fa-twitter'></a>
		<a href='' style='margin-left:20px;' class='fa fa-google'></a>
		<a href='' style='margin-left:20px;' class='fa fa-whatsapp'></a>
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
		</table>
	</td>
</tr>	
</div>
</body>
</html>";