<?php 
		session_start();
		if (!isset($_SESSION['name'])) {
    header("Location: expiredS.php");
    exit;
		}
		$name=$_SESSION['name'];
?>
<html style="background-color:white">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{
		margin:0;
}
img.top{
        max-width: 100%;
        max-height: 100%;
        display: block; /* remove extra space below image */
    }
.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 15px;
}

	button.cart{
border-radius:12px; width:200px; height:50px; 
margin-left:150px; 
font-family:verdana,sans-serif;
font-size:18px;
background-color:#192537; color:tan; margin-bottom:50px;}
button:active{
				outline:none;
}
button:hover{
				cursor:pointer;
}
</style>
<title>
		Payments</title>
		<link rel="shortcut icon" href="Logo.png" type="image/x-icon">
<body>
<div style=" height:230px; width:cover; background-color:#192537; margin-bottom:80px;">
<a href="homepage.php" ><img class="top" src="toplogo.jpg"/></a>
</div>
<form onsubmit="return validate_info();" name="main" action="redierect.php">
<div style="margin:auto; width:700px; border-radius:10px; height:700px; background-color:#EAEDED; border:1.5px solid LightGrey; padding-left:60px; padding-top:56px; ">
<span style="font-family:'Sequel Sans book Oblique Display',sans-serif; font-size:18px; font-weight:bolder; ">PAY with a Debit/Credit Card</span>
</br></br></br></br>
<div style="font-family:'Sequel Sans book Oblique Display',sans-serif; border-radius:3px; background-color:lightcyan; padding-left:11px; padding-top:7px; font-size:15px;  height:30px; width:650px; border:1px solid LightBlue; color:Grey;">Your card number is kept 100% secure and only used for this transaction.</div>
</br></br>
<div class="icon-container" style=" font-family:'Sequel Sans book Oblique Display',sans-serif; font-weight:bold; height:50px; font-size:17px;">Cards Accepted :
			</br>
			<i class="fa fa-cc-visa" style="color:navy; font-size:45px; margin-left:200px;"></i>
              <i class="fa fa-cc-amex" style="color:blue; font-size:45px; margin-left:20px;"></i>
              <i class="fa fa-cc-paypal" style="color:black; font-size:45px; margin-left:20px;"></i>
              <i class="fa fa-cc-discover" style="color:orange; font-size:45px; margin-left:20px;"></i>
</div>
</br></br>
<div  style=" font-family:'Sequel Sans book Oblique Display',sans-serif; font-weight:bold; font-size:17px; height:90px;">Card Number* :
<input type="text" name="crdno" placeholder="VISA/Paypal/American Express/Discover" style=" padding-left:10px; margin-left:50px; font-size:17px; height:40px; border:1px solid white;  border-radius:2px; width:400px;" required></input>
</br>
<span style="color:red; font-size:14px; "  id="sp1"></span>
</div>
</br>
<div  style=" font-family:'Sequel Sans book Oblique Display',sans-serif; font-weight:bold; font-size:17px; height:90px;">Expiration Date* :
<input type="text" name="expiry" placeholder="MM/YY" style=" padding-left:10px; margin-left:40px; height:40px; border:1px solid white; font-size:17px; border-radius:2px; width:200px;" required></input>
</div>
</br>
<div  style="  font-family:'Sequel Sans book Oblique Display',sans-serif; font-weight:bold; font-size:17px; height:90px;">CVV*  :

<input type="text" name="cvv" placeholder="Eg:422" style=" padding-left:10px; margin-left:130px; height:40px; border:1px solid white; font-size:17px; border-radius:2px; width:200px;" required></input>
</br><span style="font-size:12px;">(see on the back side of your card.)</span>
</br>
<span style="color:red; font-size:14px; "  id="sp2"></span>
</div>
</br></br>
<button type='submit' style='width:200px; text-align:center; background-color:green; font-size:16px; border-radius:6px; font-weight:bold; color:white;' name='pay' class='cart' >Proceed to Pay</button>
</div>
</form>
<script type="text/javascript" language="javascript">
function validate_info()
{
		var crdno=document.main.crdno.value;
		var cvv=document.main.cvv.value;
		if(isNaN(crdno))
		{
			document.getElementById('sp1').innerHTML="**Only numbers are allowed.";
				return false;
		}
		if(crdno.length!=10)
		{
			document.getElementById('sp1').innerHTML="**Invalid Card Number.";
				return false;
		}
		if(cvv.length!=3 && cvv.length!=4)
		{
			document.getElementById('sp2').innerHTML="**Wrong CVV.";
				return false;
		}
}
</script>
</body>
</html>