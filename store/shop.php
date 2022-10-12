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
</head>

<body>






<?php

	session_start();


		

		$mob = $_GET["var1"];
		
		
		require_once "../includes/DBConnect.php";
		
		$query="SELECT * FROM user1 WHERE mobileno='".$mob."' ";
		$result=mysqli_query($db, $query) ;
		$row=mysqli_fetch_assoc($result);
		
		if(!isset($row["shopname"]) || $row["shopname"]==null){
			
			//			redirect("error.php?loginError=true");
			
			redirect("error.php");
			
		}
		
		
		
		
		//$_SESSION["cust_username"] = null;
				if ( (!isset($_SESSION["cust_username"])) || ($_SESSION["cust_username"] == "") )
		
				$_SESSION["cust_username"] = "";

				

			  $_SESSION["user1"]=$row["username"];
			  $_SESSION["shopname1"] = $row["shopname"];
			  $_SESSION["image1"]=$row["profileimage"];
			  $_SESSION["city1"]=$row["city"];
			  $_SESSION["mobile1"] = $row["mobileno"];
	
			if ( (!isset($_SESSION["sessionVisit"])) || ($_SESSION["sessionVisit"] == "") )
			{
					$_SESSION["sessionVisit"] = session_id();

					$sesscnt =  $row["visitors"];

						if ($sesscnt < 0 )
						{
							$sesscnt = 0 ;
						
						}
					
					
						$sesscnt++;

					 	require_once "../includes/DBConnect.php";
		
	
					  
						$query1="UPDATE user1 SET visitors =".$sesscnt." WHERE mobileno='".$_SESSION["mobile1"]."' ";
		
						$result1=mysqli_query($db, $query1) ;
						
						//echo $result1;

			}
	
			include("cart_session.php"); 
					
			 

?>





<!-- Nav Bar 1 -->
			<nav class="navbar navbar-inverse navbar-default " role="navigation">
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
								$result=mysqli_query($db, $query) ;
		
								$cnt=0;
		
								while($row=mysqli_fetch_array($result))
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
								$result=mysqli_query($db, $query) ;
		
								$cnt=0;
		
								while($row=mysqli_fetch_array($result))
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
							<a href="shopping_cart.php?var1=<?php echo $_SESSION["mobile1"];  ?>"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Cart</a>
						</li>
						

     					<li>
							<a href="checkout.php?var1=<?php echo $_SESSION["mobile1"];  ?>"><span class="glyphicon glyphicon-share" aria-hidden="true"></span> Check out</a>
						</li>
						


     					<li>
							<a href="contact.php?var1=<?php echo $_SESSION["mobile1"];  ?>"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> Contact</a>
						</li>                  

						
						
						
					<?php
							if ($_SESSION["cust_username"] == "" || $_SESSION["cust_username"] == null )
							{
							
					?>
						<li>
						    <a id="modal-139111" href="#modal-container-139111" role="button" class="btn" data-toggle="modal">
			
								<span class="glyphicon glyphicon-user" aria-hidden="true"></span> Login
							
							</a>
							
							<div class="modal fade" id="modal-container-139111" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
											<h4 class="modal-title" id="myModalLabel">
												Customer Login
											</h4>
										</div>
										<div class="modal-body">
											
											 <form role="form" method="POST" action="#">
													<div class="form-group">
														 <label for="Email4">Email</label><input type="email"  class="form-control" name="customeremail" required/>
													</div>
													<div class="form-group">
														 <label for="Password4">Password</label><input type="password" class="form-control" name="customerpassword" required/>
													</div>
													
													<div class="checkbox">
														 <label><input type="checkbox" />Remember me</label>
													</div> <button type="submit" class="btn btn-primary">Login</button>
						
												</form>
										</div>
										
									</div>
											
								</div>
							
							
							
						</li>                  

					<?php
							}
							else
							{
							
					?>
						
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Account<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								
								<li>
									<a href="#">My Order</a>
								</li>
								
								<li>
									<a href="#">Account</a>
								</li>
								
								<li class="divider">
								</li>
								<li>
									<a href="#">Logout</a>
								</li>
							</ul>
						</li>
						
					<?php
							}
						
							
					?>
						
                        <li>
							<a href="#"> </a>
						</li>
					</ul>
				</div>
				
			</nav>






<div class="container">


<!-- Top Headning Store Name, Search, Cart -->


	<div class="row clearfix">
		

		<div class="col-md-7 column">
			<?php echo "<h2>".$_SESSION["shopname1"]."</h2>";  ?>
		</div>



		<div class="col-md-2 column">
			
			 <form role="form" method="POST" action="search.php">
				<div class="form-group">
					<input type="hidden"  class="form-control" name="mobile12" value="<?php echo $mob;  ?>" />
										
					 <input type="text"  class="form-control" name="searchproduct" placeholder="Search"/>
				</div>
				
			</form>
			
		</div>

		<div class="col-md-3 column" >
		
		
			     
			     <ul class="nav nav-pills">
						<li class="active">
								<a href="shopping_cart.php?var1=<?php echo $_SESSION["mobile1"];  ?>" >
									<span class="badge pull-right">
										<?php echo $_SESSION["cart_items"];  ?> item</span>   <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> - Rs <?php echo $_SESSION["cart_sum"];  ?> 
								</a>
						</li>
				 </ul>

		</div>

	</div>

   



<!-- Main Banner -->

	<div class="row clearfix">

        <div class="col-md-12 column" >
	
			<?php include("shop_banner.php"); ?>

		</div>

	</div>





	
<!-- Product Showcase -->
   <br/>
   
      <?php include("shop_products.php"); ?>
  

  <!-- Footer -->
	 <?php include("footer.php"); ?>




</div>


</body>
</html>
