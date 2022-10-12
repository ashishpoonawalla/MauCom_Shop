<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>MauCom Shop</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="../less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="../less/responsive.less" type="text/css" /-->
	<!--script src="../js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="../js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="../img/Shopping-Bag-icon.png">
  
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/scripts.js"></script>

	<script type="text/javascript" src="../js/jquery.magnifier.js"></script>



	


</head>

<body>





<?php

session_start();

		$session1 = session_id().time();


		//$mob = $_GET["var1"];
		
		// = $mob;
		
		$mob =		$_SESSION["mobile1"];


		require_once "../includes/DBConnect.php";
		
		$query="SELECT * FROM user1 WHERE mobileno='".$mob."' ";
		$result=mysqli_query($db, $query);
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
			  //$_SESSION["mobile1"] = $row["mobileno"];
		

		require_once "../includes/DBConnect.php";
		


		// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}


			
			$username = $_SESSION["username_1D"];
			$fname = $_SESSION["firstname3"];
			$lname = $_SESSION["lastname3"];
		
			$address1 = $_SESSION["address1"];
			$address2 = $_SESSION["address2"];
			$ccity = $_SESSION["city3"];

			$pinorzip = $_SESSION["postcode3"];
			$cstate = $_SESSION["state3"];
			$ccountry = $_SESSION["country3"];
			
			$email1 = $_SESSION["email3_1"];
			$mobile1 = $_SESSION["mobile3"];
			$landline1 = $_SESSION["telephone3"];
			



			$fname_delivery = $_SESSION["firstname3D"];
			$lname_delivery = $_SESSION["lastname3D"];
			$address1_delivery = $_SESSION["address1D"];

			$address2_delivery = $_SESSION["address2D"];
			$ccity_delivery = $_SESSION["city3D"];
			$pinorzip_delivery = $_SESSION["postcode3D"];

			$cstate_delivery = $_SESSION["state3D"];
			$ccountry_delivery = $_SESSION["country3D"];
			$mobile1_delivery = $_SESSION["mobile3D"];

			$landline1_delivery = $_SESSION["telephone3D"];
			$comments_buyer = $_SESSION["comments3"];
			$status1 = "Order Pending";

			$total1 = $_SESSION["cart_sum"];
			$dateoforder =  date("d-m-Y");
			$session_id1 = $session1;

			$deliveryoption = "Cash On Delivery";
			
			//echo "- $username, $fname, $lname, $address1, $address2, $ccity, $pinorzip, $cstate, $ccountry, $email1, $mobile1, $landline1, $fname_delivery, $lname_delivery, $address1_delivery, $address2_delivery, $ccity_delivery, $pinorzip_delivery, $cstate_delivery, $ccountry_delivery, $mobile1_delivery, $landline1_delivery, $comments_buyer, $status1, $total1, $dateoforder, $session_id1, $deliveryoption -";
			
			
			$stmt = $conn->prepare("INSERT INTO zz".$_SESSION["mobile1"]."order ( username,  cname,  companyname,  address1,  address2,  ccity,  pinorzip,  cstate,  ccountry,  email1,  mobile1,  landline1,  cname_delivery,  companyname_delivery,  address1_delivery,  address2_copy1,    ccity_delivery,  pinorzip_delivery,  cstate_delivery,  ccountry_delivery,  mobile1_delivery,  landline1_delivery,  anyremarkbysaler,  status1,  total,   dateoforder,  sessionID,    deliveryoption) values( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ");
			$stmt->bind_param("ssssssssssssssssssssssssdsss",                    $username, $fname, $lname,       $address1, $address2, $ccity, $pinorzip, $cstate, $ccountry, $email1, $mobile1, $landline1, $fname_delivery, $lname_delivery,       $address1_delivery, $address2_delivery, $ccity_delivery, $pinorzip_delivery, $cstate_delivery, $ccountry_delivery, $mobile1_delivery, $landline1_delivery, $comments_buyer,  $status1, $total1, $dateoforder, $session_id1, $deliveryoption );
			$stmt->execute();
			
			$stmt->close();
			$conn->close();



			// ----------------- GET order ID ------------------------------------
			require_once "../includes/DBConnect.php";
		

		
			$query="SELECT * FROM zz".$_SESSION["mobile1"]."order WHERE sessionId='".$session_id1."' ";
			$result=mysqli_query($db, $query) ;
			$row1=mysqli_fetch_assoc($result);
		
			$order_id =  $row1["orderid"];
			$_SESSION["orderid"] = $order_id;
				
			//echo "<br/>". $row["orderid"];

			

			// -------------------- Save order items -------------------

			  $cart_detail = $_SESSION["cart_detail"];
			 //$cart_detail = $_SESSION["cart_detail"];
              
             
              $cnt = count($cart_detail );
              $tot = 0;
			  
			  $tccc = 0;
			  $ttitle=0;
              
              if ($cnt > 0)
              {
					//echo "1,";
					for ($row = 0; $row < $cnt; $row++) 
					{
						//echo "<br>2, $cnt ";
									$listprodid = $cart_detail[$row][0];
								
									if ($listprodid > 0 )
									{
										//echo "<br>3, INSERT INTO zz".$_SESSION["mobile1"]."order_detail (orderid, productid, quantity1, price1) VALUES(".$order_id.",".$cart_detail[$row][0].",".$cart_detail[$row][1].",".$cart_detail[$row][2].") ";
										
										require_once "../includes/DBConnect.php";		
								
										//$query="INSERT INTO zz".$_SESSION["mobile1"]."order_detail (orderid, productid, quantity1, price1, amount1) VALUES(".$order_id.",".$cart_detail[$row][0].",".$cart_detail[$row][1].",".$cart_detail[$row][2].",".$cart_detail[$row][3].") ";
										$query="INSERT INTO zz".$_SESSION["mobile1"]."order_detail (orderid, productid, quantity1, price1) VALUES(".$order_id.",".$cart_detail[$row][0].",".$cart_detail[$row][1].",".$cart_detail[$row][2].") ";
		
										$result=mysqli_query($db, $query) ;
									
		

									}
                    
					}
                    
				}
			  
				$mob =		$_SESSION["mobile1"];
				//$_SESSION["cart_detail"]

?>









<!-- Nav Bar 1 -->
			<nav class="navbar navbar-default " role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
					  
						<a class="navbar-brand" href="shop.php?var1=<?php echo $_SESSION["mobile1"];  ?>">
					 
							<img src="../img/Shopping-Bag-icon.png" style="width: 30px" />
					 
						</a>
						
					

				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					
					<ul class="nav navbar-nav navbar-right">
                        
                        <li class="active">
							<a href="shop.php?var1=<?php echo $_SESSION["mobile1"];  ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a>
						</li>
						


				<!-- Category List -->
						<li class="dropdown">
							 
							 
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">
							 <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
							 Category<strong class="caret"></strong></a>
							
							
							<ul class="dropdown-menu">
								
								
								
				<!-- Category List DB -->

							<?php
								require_once "../includes/DBConnect.php";
		
								$query="SELECT * FROM zz".$mob."category";
								$result=mysql_query($query) or die(mysql_error());
		
								$cnt=0;
		
								while($row=mysql_fetch_array($result))
								{

									?>
										<li>
											<a href="category.php?var1=<?php echo $_SESSION["mobile1"]; ?>&var2=<?php echo $row["categoryID"]; ?>" ><?php echo $row["categoryID"]; ?></a>
										</li>

									<?php
			
								}
							
							?>


							</ul>
						</li>


					<!-- Brand List -->
						<li class="dropdown">
							 
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">
							 <span class="glyphicon glyphicon-tag" aria-hidden="true"></span>
							 Brand<strong class="caret"></strong></a>
							
							
							<ul class="dropdown-menu">
								
			

							<?php
								require_once "../includes/DBConnect.php";
		
								$query="SELECT * FROM zz".$mob."brand";
								$result=mysql_query($query) or die(mysql_error());
		
								$cnt=0;
		
								while($row=mysql_fetch_array($result))
								{

									?>
										<li>
											<a href="brand.php?var1=<?php echo $_SESSION["mobile1"]; ?>&var2=<?php echo $row["brandid"]; ?>" ><?php echo $row["brandid"]; ?></a>
										</li>

									<?php
			
								}
							
							?>


							</ul>
						</li>





						

						<!--
					    <li>
							<a href="shop.php"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> Wish List</a>
						</li>
						-->

					    <li>
							<a href="shopping_cart.php?var1=<?php echo $_SESSION["mobile1"];  ?>"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Shopping Cart</a>
						</li>
						

     					<li>
							<a href="checkout.php?var1=<?php echo $_SESSION["mobile1"];  ?>"><span class="glyphicon glyphicon-share" aria-hidden="true"></span> Check out</a>
						</li>
						


						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Account<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Register</a>
								</li>
								<li>
									<a href="#">Login</a>
								</li>
								
								<li class="divider">
								</li>
								<li>
									<a href="#">My Order</a>
								</li>
							</ul>
						</li>



     					<li>
							<a href="contact.php?var1=<?php echo $_SESSION["mobile1"];  ?>"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> Contact us</a>
						</li>                  

						
                        <li>
							<a href="#"> </a>
						</li>
					</ul>
				</div>
				
			</nav>








<div class="container">






<!-- Top Headning Store Name, Search, Cart -->


	<div class="row clearfix">
		

		<div class="col-md-6 column">
			<?php echo "<h2>".$_SESSION["shopname1"]."</h2>";  ?>
		</div>



		<div class="col-md-3 column">
			
			
		<!--
			<div class="col-md-7 column">
				<?php echo "<h3>".$pro."</h3>";  ?>
			</div>
		-->

		</div>




		<div class="col-md-3 column" >
			
					 <ul class="nav nav-pills">
						<li class="active">
								<a href="shopping_cart.php?var1=<?php echo $_SESSION["mobile1"];  ?>" >
									<span class="badge pull-right">
										<?php echo $_SESSION["cart_items"];  ?> item</span>   Cart - Rs <?php echo $_SESSION["cart_sum"];  ?> 
								</a>
						</li>
						
					 </ul>
			
		</div>

	</div>


<!-- Site Map -->

 <div class="row clearfix">
		<div class="col-md-12 column">
			
			<ul class="breadcrumb">
				<li>
					<a href="../store/shop.php?var1=<?php echo $mob; ?>">Home</a> <span class="divider"></span>
				</li>
				
				<li>
					<a href="../store/shopping_cart.php?var1=<?php echo $mob; ?>">Shopping Cart</a> <span class="divider"></span>
				</li>
				<li class="active">
					Checkout
				</li>
			</ul>


		</div>
	</div>


	<h3>Checkout</h3>
	
	<p>Your order placed succesfully...</p>
	
	<br/>
	<br/>
	<p><span class="label label-success">Order No. <?php echo $_SESSION["orderid"]; ?></span>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>
	<br/>

	<?php $_SESSION["cart_detail"]=""; ?>





<!-- Footer -->
	 <?php include("footer.php"); ?>


</div>
</body>
</html>
