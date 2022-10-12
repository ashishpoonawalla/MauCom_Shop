<?php
session_start();

		

		$mob = $_SESSION["mobile1"];
		
		
		
		
			$email3 = $_POST["email3"];
			$password3 = $_POST["password3"];
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
			
			// -------------- Password Encryption ------------------
			
			$key_value = "KEMAUCOM"; 
			//$encrypted_text = mcrypt_ecb(MCRYPT_DES, $key_value, $password3, MCRYPT_ENCRYPT); 
			//$password3_11 = $encrypted_text ;
			$password3_11 = $password3;
	
		$_SESSION["email3"] = $email3;
		$_SESSION["firstname3"] =$firstname3;
		$_SESSION["lastname3"] = $lastname3;
		
		$_SESSION["address1"] = $address1;
		$_SESSION["address2"] = $address2;
		$_SESSION["city3"] = $city3;
		$_SESSION["postcode3"] = $postcode3;
		$_SESSION["country3"]= $country3;
		$_SESSION["state3"] = $state3;
		
		$_SESSION["email31"] = $email3;
		$_SESSION["mobile3"] = $mobile3;
		$_SESSION["telephone3"] = $telephone3;
				
				
		 		require_once "../includes/DBConnect.php";
		
				//	$query="Update zz".$_SESSION["mobile"]."products SET productname='$productname1', price=$price1, categoryID='$category1', brand='$brand1', show_homepage='$show_homepage1', availableinstock='$availableinstock1', productcode='$productcode1', descriptions='$descriptions1' where productid=$productid1";
				//	$result=mysqli_query($db, $query) ;
		
		// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}

			// prepare and bind
			
			// 			$stmt = $conn->prepare("Update zz".$_SESSION["mobile"]."products SET productname=?, price=? where productid=$productid1");
			


			$stmt = $conn->prepare("INSERT INTO tblcustomer (username, password, fname, lname, address1, address2, ccity, pinorzip, cstate, ccountry, email1,mobile1,landline1) values( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ");
			$stmt->bind_param("sisssssssssss", $username22, $password22, $firstname22, $lastname22, $address22_1, $address22_2, $ccity22, $pinorzip22, $cstate22, $ccountry22, $email22, $mobile22, $landline22);

			$username22 = $_POST["email3"];
			$password22 = $_POST["password3"]; //$password3_11;
			$firstname22 = $_POST["firstname3"];
			$lastname22 = $_POST["lastname3"];
			$address22_1 = $_POST["address1"];
			$address22_2 = $_POST["address2"];
			$ccity22 = $_POST["city3"];
			$pinorzip22 = $_POST["postcode3"];
			
			$cstate22 = $_POST["state3"];
			$ccountry22 = $_POST["country3"];
			$email22 = $_POST["email3"];
			$mobile22 = $_POST["mobile3"];
			$telephone22 = $_POST["telephone3"];


			$stmt->execute();
			
			$stmt->close();
			$conn->close();

			//echo "OKKKKKKKKK";
				
			header("location:checkout2.php?var1=".$_SESSION["mobile1"]);			
							
?>