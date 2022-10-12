      <!--  		Product Delete Body --------------------------------- -->

		<?php
		
          session_start();
             
			$mob = $_SESSION["mobile"];
		    
			$productname1 =" ";
			$price1 = 0;
			$category1 = " ";
			$brand1 = " ";
			$show_homepage1 = "YES";
			$availableinstock1 = "YES";
			$productcode1 = " ";
			$descriptions1 = " ";
			$image1 = "img/product1.png";
			$image2 = " ";
			$image3 = " ";

			
		
     

		  	require_once "../includes/DBConnect.php";
		
				//	$query="Update zz".$_SESSION["mobile"]."products SET productname='$productname1', price=$price1, categoryID='$category1', brand='$brand1', show_homepage='$show_homepage1', availableinstock='$availableinstock1', productcode='$productcode1', descriptions='$descriptions1' where productid=$productid1";
				//	$result=mysqli_query($db, $query) ;
		



		// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}

			// prepare and bind
			
			// 			$stmt = $conn->prepare("Update zz".$_SESSION["mobile"]."products SET productname=?, price=? where productid=$productid1");
			


			$stmt = $conn->prepare("INSERT INTO zz".$_SESSION["mobile"]."products (productname, price, categoryID, brand, show_homepage, availableinstock, productcode, descriptions, image1, image2, image3) values( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ");
			$stmt->bind_param("sisssssssss", $productname22, $price22, $category22, $brand22, $show_homepage22, $availableinstock22, $productcode22, $descriptions22, $image22_1, $image22_2, $image22_3);

			$productname22 = $productname1;
			$price22 = $price1;
			$category22 = $category1;
			$brand22=$brand1;
			$show_homepage22=$show_homepage1;
			$availableinstock22=$availableinstock1;
			$productcode22=$productcode1;
			$descriptions22=$descriptions1;
			$image22_1 = $image1;
			$image22_2 = $image2;
			$image22_3 = $image3;


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

				require_once "../includes/DBConnect.php";
		
			

					$query="SELECT max(productid) as max FROM zz".$_SESSION["mobile"]."products";
					$result=mysqli_query($db, $query) ;
		
					$row = mysqli_fetch_array( $result );
					
					$largestNumber = $row['max'];

					echo $largestNumber;
				
				header("location:product_edit.php?vv=".$largestNumber);			
							
		?>

                        


