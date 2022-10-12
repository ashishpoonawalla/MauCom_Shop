<?php
session_start();

		

		$mob = $_SESSION["mobile1"];
		
		
		$email4 =  $_POST["email4"];
		$password4 = $_POST["password4"];

		require_once "../includes/DBConnect.php";
		
		$query="SELECT * FROM tblcustomer WHERE username='$email4' AND password='$password4'";
		$result=mysqli_query($db, $query) ;
		$row=mysqli_fetch_assoc($result);
		
		if(isset($row["fname"]) && $row["fname"] != null)
		{
				
			$_SESSION["username_1D"] = $email4;
			$_SESSION["firstname3D"] =$row["fname"];
			$_SESSION["lastname3D"] = $row["lname"];
			
			$_SESSION["address1D"] = $row["address1"];
			$_SESSION["address2D"] = $row["address2"];
			$_SESSION["city3D"] = $row["ccity"];
			$_SESSION["postcode3D"] = $row["pinorzip"];
			$_SESSION["country3D"]= $row["ccountry"];
			$_SESSION["state3D"] = $row["cstate"];
			
		
			$_SESSION["mobile3D"] = $row["mobile1"];
			$_SESSION["telephone3D"] = $row["landline1"];
			$_SESSION["email3_1D"] = $row["email1"];
				

		}else {
			header("error.php");
		}


		echo $_SESSION["city3D"];

		header("location:checkout2.php?var1=".$_SESSION["mobile1"]);			
		
		
?>