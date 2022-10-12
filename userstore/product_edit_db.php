      <!--  		Product Delete Body --------------------------------- -->

		<?php
		
          session_start();
             
			$mob = $_SESSION["mobile"];
		    $productid1 = $_POST["productid1"];
			$productname1 = $_POST["productname1"];
			$price1 = $_POST["price1"];
			$category1 = $_POST["category1"];
			$brand1 = $_POST["brand1"];
			$show_homepage1 = $_POST["show_homepage1"];
			$availableinstock1 = $_POST["availableinstock1"];
			$productcode1 = $_POST["productcode1"];
			$descriptions1 = $_POST["descriptions1"];
			


     

		  	require_once "../includes/DBConnect.php";
		
				//	$query="Update zz".$_SESSION["mobile"]."products SET productname='$productname1', price=$price1, categoryID='$category1', brand='$brand1', show_homepage='$show_homepage1', availableinstock='$availableinstock1', productcode='$productcode1', descriptions='$descriptions1' where productid=$productid1";
				//	$result=mysqli_query($db, $query) ;
		



		// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}

			// prepare and bind
			
			// 			$stmt = $conn->prepare("Update zz".$_SESSION["mobile"]."products SET productname=?, price=? where productid=$productid1");
			


			$stmt = $conn->prepare("Update zz".$_SESSION["mobile"]."products SET productname=?, price=?, categoryID=?, brand=?, show_homepage=?, availableinstock=?, productcode=?, descriptions=? where productid=$productid1");
			$stmt->bind_param("sissssss", $productname22, $price22, $category22, $brand22, $show_homepage22, $availableinstock22, $productcode22, $descriptions22);

			$productname22 =trim( $productname1);
			$price22 = $price1;
			$category22 = trim($category1);
			$brand22=trim($brand1);
			$show_homepage22=$show_homepage1;
			$availableinstock22=$availableinstock1;
			$productcode22=trim($productcode1);
			$descriptions22=trim($descriptions1);



			$stmt->execute();
			
			$stmt->close();
			$conn->close();
			
			
			/*     ---------------------- Original Statement -----------------------------

			$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
			$stmt->bind_param("sss", $firstname, $lastname, $email);
			
			// set parameters and execute
			$firstname = "John";
			$lastname = "Doe";
			$email = "john@example.com";
			$stmt->execute();


			echo "New records created successfully";

			$stmt->close();
			$conn->close();

			*/


			
				
				header("location:product_edit.php?vv=".$productid1);			
							
		?>

                        


