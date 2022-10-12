<?php
session_start();

		

		$mob = $_SESSION["mobile1"];
		
		
		$email4 =  $_POST["email4"];
		$password4 = $_POST["password4"];

		// require_once "../includes/DBConnect.php";
		
		// $query="SELECT * FROM user1 WHERE mobileno='".$mob."' ";
		// $result=mysqli_query($db, $query) ;
		// $row=mysqli_fetch_assoc($result);
		
		// if(!isset($row["shopname"]) || $row["shopname"]==null)
		// {
			
		
			
		// 	redirect("error.php");
			
		// }
		
			
				
		// 	  $_SESSION["user1"]=$row["username"];
		// 	  $_SESSION["shopname1"] = $row["shopname"];
		// 	  $_SESSION["image1"]=$row["profileimage"];
		// 	  $_SESSION["city1"]=$row["city"];
		// 	  $_SESSION["mobile1"] = $row["mobileno"];
		










		
			$email3 = $_POST["email3"];
			$password3 = $_POST["password3"];
			$firstname3 = $_POST["firstname3"];
			$lastname3 = $_POST["lastname3"];
			$mobile3 = $_POST["mobile3"];
			$telephone3 = $_POST["telephone3"];
			$address1 = $_POST["address1"];
			$address2 = $_POST["address2"];
			$city3 = $_POST["city3"];
			$postcode3 = $_POST["postcode3"];
			$country3 = $_POST["country3"];
			$state3 = $_POST["state3"];
			
		
		
		echo $_POST["email3"];
		echo $_POST["password3"];
		echo  $_POST["firstname3"];
		echo  $_POST["lastname3"];
		echo  $_POST["mobile3"];
		echo  $_POST["telephone3"];
		echo $_POST["address1"];
		echo  $_POST["address2"];
		echo  $_POST["city3"];
		echo  $_POST["postcode3"];
		echo  $_POST["country3"];
		echo  $_POST["state3"];
		
				
		require_once "../includes/DBConnect.php";
		
		$query="SELECT * FROM user1 WHERE mobileno='".$mob."' ";
		$result=mysqli_query($db, $query) ;
		$row=mysqli_fetch_assoc($result);
		
		if(!isset($row["shopname"]) || $row["shopname"]==null)
		{
			
			//			redirect("error.php?loginError=true");
			
			redirect("error.php");
			
		}
		
			
				
			  $_SESSION["user1"]=$row["username"];
			  $_SESSION["shopname1"] = $row["shopname"];
			  $_SESSION["image1"]=$row["profileimage"];
			  $_SESSION["city1"]=$row["city"];
			  $_SESSION["mobile1"] = $row["mobileno"];
		
?>