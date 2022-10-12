<?php
session_start();

		

		$mob = $_SESSION["mobile1"];
		
		
		
		
			$firstname3 = $_POST["firstname3"];
			$lastname3 = $_POST["lastname3"];
			$mobile3 = $_POST["mobile3"];
			$telephone3 = $_POST["telephone3"];
			$address3_1 = $_POST["address1"];
			$address3_2 = $_POST["address2"];
			$city3 = $_POST["city3"];
			$postcode3 = $_POST["postcode3"];
			$country3 = $_POST["country3"];
			$state3 = $_POST["state3"];
			$email3_1 = $_POST["email3_1"];
			
		
	
	
		$_SESSION["firstname3"] =$firstname3;
		$_SESSION["lastname3"] = $lastname3;
		
		$_SESSION["address1"] = $address3_1;
		$_SESSION["address2"] = $address3_2;
		$_SESSION["city3"] = $city3;
		$_SESSION["postcode3"] = $postcode3;
		$_SESSION["country3"]= $country3;
		$_SESSION["state3"] = $state3;
		
	
		$_SESSION["mobile3"] = $mobile3;
		$_SESSION["telephone3"] = $telephone3;
    $_SESSION["email3_1"] = $email3_1;
			
				
			
				
			header("location:checkout2.php?var1=".$_SESSION["mobile1"]);			
							
?>