<?php 
		session_start();
		$name=$_SESSION['name'];
		$prT=$_SESSION['prt'];
		$pid="";
		if(isset($_POST['g1']))
		{
			$pid=$_POST['g1'];
		}
		$link=mysqli_connect("localhost","root","","Customers");
		$sql="SELECT * FROM $prT WHERE ProdID='$pid';";
		if($rows=mysqli_query($link,$sql))
		{
				if(mysqli_num_rows($rows)>0)
				{
					$re=mysqli_fetch_array($rows);
				$intro=$re['intro'];
				$brand=$re['brand'];
				$mrp=$re['MRP'];
				$price=$re['price'];
				$disc=$re['discount'];
				$off=$re['Off%'];
				$rating=$re['rating'];
				$img=$re['img_path'];
				$subC=$re['subC'];
					$sql1="insert into $name(intro,brand,MRP,price,discount,rating,imgPath,pid,subC) values('$intro','$brand','$mrp','$price','$disc','$rating','$img','$pid','$subC');";
					if(mysqli_query($link,$sql1))
					{
							header("Location:YourCart.php");
						
					}
					else
					{
						echo mysqli_error($link);
					}
				}
				
				
		}
		mysqli_close($link);
?>