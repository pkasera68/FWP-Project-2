<?php 
		
		session_start();
		if (!isset($_SESSION['name'])) {
    header("Location: expiredS.php");
    exit;
		}
		if (isset($_SESSION['orderId'])) 
		{
				unset($_SESSION['orderId']);
		}
		$name=$_SESSION['name'];
		$usr=$_SESSION['usr'];
		
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
  margin: 0;
}
img.top{
        max-width: 100%;
        max-height: 100%;
        display: block; /* remove extra space below image */
    }
a:hover{
			color:white;
			font-weight:bolder;
		}
a{
		text-decoration:none; 
			color:Tan;
}
a.advtq:hover{
			color:Blue;
			font-weight:bolder;
		}
a.advtq{
		font-family:Impact,Charcoal,sans-serif; font-size:70px;
		color:black;
		text-decoration:none; 
		font-size:35px; 
		font-weight:bolder;
}
a.advtq:hover img
{
			transform: scale(1);
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
<div style='background-color:#192537; height:259px; width:100%; top:0; left:0; right:0; bottom:0;'><img class="top" src='toplogo.jpg'/>
</br></br></br>
<div style='width:100%;  left:0; right:0; bottom:0; background-color:black; height:50px;'>
<table border='0' style='padding-top:10px;'>
<tr >
	<td style='background-color:black;  width:80px; text-align:center; font-family:verdana,sans-serif;'><a href='homepage.php' target='_self' >Home</a></td>
<td style='background-color:black; width:90px; text-align:center; font-family:verdana,sans-serif;'>
	<a href='categories.php' target='_blank' >Categories</a>
</td>
<td style='background-color:black; width:150px; text-align:center; font-family:verdana,sans-serif;'>
	<a href='Todaysdeals.php' target='_blank'>Today's deals</a>
</td>
<td style='background-color:black; width:100px; text-align:center; font-family:verdana,sans-serif;'>
	<a href='aboutus.php' target='_blank' >About Us</a>
</td>
<td style='background-color:black; width:90px; text-align:center; font-family:verdana,sans-serif;'>
	<a href='YourCart.php' target='_self' >Your cart</a>
</td>
<td style='background-color:black; width:80px; text-align:center; font-family:verdana,sans-serif;'>
	<a href='YourOrders.php' target='_self' >Orders</a>
</td>
<td style='background-color:black; width:90px; text-align:center; font-family:verdana,sans-serif;'>
	<a href='end_session.php' target='_self' >Log Out</a>
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
<span style='color:Tan; font-family:Brush Script MT,sans-serif; font-size:40px;'> <b>Dear customer,</b></span>
</br>
<span style='color:Tan; font-family:Brush Script MT,sans-serif; font-size:30px;'>In the categories section you can find various categories of Home and Kitchen Appliances,you can select any of them and you will find products with great deals of respective category.
 Most Important is Ratings of the products we have discovered ratings of all the products based on the feedback of different users,and analysis of our Experts.
 </br>In the Today's Deals section there is a list of all the best offers and Great deals <b>Enjoy!</b></span>
</br></br>
<span style='color:Tan; font-family:Brush Script MT,sans-serif; font-size:40px;'><b>Choose by Categories</b></span>
<div class='MagicScroll' style='background-color:black;'   data-options='mode: carousel; height: 275px; '>
<a href='myPandEl.php' target='_top'><img height='250px' width='240px' src='prsckrH.jpg'/> <span style='color:tan; font-weight:bolder; margin-top:21px; font-family:sans-serif,Arial; font-size:18px;'>Pressure Cookers and Electronics</span></a>
<a href='myKnvandsp.php'> <img height='400px' width='700px' src='knvsp1.jpg'/><span style='color:tan; font-weight:bolder; margin-top:20px; font-family:sans-serif,Arial; font-size:18px;'>Knives and Spoons.</span></a>
<a href='mydinnerSets.php'> <img height='600px' width='600px' src='dinner-set.jpg'/><span style='color:tan; font-weight:bolder; margin-top:21px; font-family:sans-serif,Arial; font-size:18px;'>Dinner Sets</span></a>
<a href='myCupsPltsGls.php'> <img height='500px' width='800px' src='glcuppl.jpg'/><span style='color:tan; font-weight:bolder; margin-top:20px; font-family:sans-serif,Arial; font-size:18px;'>Cups Plates and Glasses.</span></a>
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
<div style="background-color:white; width:275px;  border-radius:10px; height:300px; ">
<a href="#" class="advtq">
<img src="homeAdvrt6.png" />
</br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Non-Sticks </br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbspFlat<span style="font-size:45px;"> 40%</span> OFF</a>
</div>
	</br>
<div style="background-color:white; width:275px;  border-radius:10px; height:350px; ">
<a href="mydinnerSets2.php" class="advtq">
<img src="homeAdvrt7.jpg" />
</br>
&nbsp <span style="font-size:29px;"> Dinner Sets Starting &nbsp&nbsp&nbspjust at</span> <span style="font-size:35px;">&#8377; 995</span></a>
</div>
</td>
<td>
<div style='width:700px; height:600px; background-color:black; color:Tan;'>
<marquee behavior='scroll' scrolldelay='170' direction='up' style=' height:500px; margin-left:100px; color:Tan; color:Tan;'>
<a style='margin-top:30px; font-size:23px;' href='myPandEl.php' >Flat 10-55% OFF on Pressure Cookers.</a>
</br>
</br>
<a href='myCupsPltsGls.php' style='font-size:23px;'>Great bonanza offer on Steel glasses.</a>
</br>
</br>
<a  style='margin-bottom:30px; font-size:23px;' href='mydinnerSets.php' >Flat 45% OFF on BOROSIL Dinner Set.</a>
</br>
</br>
<a  style='margin-bottom:30px; font-size:23px;' href='' >Use Coupen Code <b>BRASS45</b> to get 45% OFF on Brass and Bronze till August 10.</br></a>
</br>
<span style='font-size:1em;'>( Terms and conditions applied. )<span>
</br>
</br>
<a  style='margin-bottom:30px; font-size:23px;' href='PcAndEl2.php' >Flat 30-60% OFF on LPG Gas burners.</a>
</br>
</br>
<a  style='margin-bottom:30px; font-size:23px;' href='myCupsPltsGls.php' >End of Season Sale on Sumeet Plates.</a>
</br>
</br>
<a  style='margin-bottom:30px; font-size:23px;' href='myPandEl2.php' >Use Coupen Code <b>AVAIL27</b> to get discount of 27% on Electronics till August 15.</br></a>
</br>
<span style='font-size:1em;'>( Terms and conditions applied. )<span>
</br>
</br>
</marquee>
</div>
</td>
<td>
<div style="background-color:white; width:275px; border-radius:10px; height:320px; ">
<a href="myPandEl.php" class="advtq">
<img src="homeAdvrt5.jpg" />
</br>
&nbsp <span style="font-size:45px;">10</span>&nbsp&nbspTo&nbsp&nbsp<span style="font-size:45px;">55%</span> OFF.</a>
</div>
	</br>
<div style="background-color:white; width:275px;  border-radius:10px; height:350px; ">

<a href="#" class="advtq">
<img src="homeAdvrt10.jpg" />
</br>
&nbsp <span style="font-size:35px;">Upto <span style="font-size:45px;">75% </span>OFF</span></br>
<span style="font-size:30px;">&nbsp&nbsp&nbsp&nbsp &nbsp Royal Copper </span></a>
</div>
</td>
</tr>
</table>
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
</html>";