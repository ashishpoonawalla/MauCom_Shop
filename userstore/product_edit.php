<?php

session_start();



?>
<!DOCTYPE html>
<html ng-app="myApp" ng-app="" lang="en" lang="en">
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

                <style type="text/css">
                  ul>li, a{cursor: pointer;}
                </style>

                <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
                <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

                <!-- Fav and touch icons -->
                <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
                  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
                      <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
                        <link rel="shortcut icon" href="img/favicon.png">

                          <script type="text/javascript" src="../js/jquery.min.js"></script>
                          <script type="text/javascript" src="../js/bootstrap.min.js"></script>
                          <script type="text/javascript" src="../js/scripts.js"></script>



<script type="text/javascript" src="scripts/jquery.min.js"></script>
<script type="text/javascript" src="scripts/jquery.wallform.js"></script>

<script type="text/javascript" >
 $(document).ready(function() { 
		


            $('#photoimg').die('click').live('change', function()			
			{ 
			           $("#preview").html('');
			    
				
				$("#imageform").ajaxForm({target: '#preview', 
				     beforeSubmit:function(){ 
					
					console.log('v');
						$("#imageloadstatus").show();
						 $("#imageloadbutton").hide();
						}, 
					success:function(){ 
					console.log('z');
					 $("#imageloadstatus").hide();
					 $("#imageloadbutton").show();
					}, 
					error:function(){ 
							console.log('d');
					 $("#imageloadstatus").hide();
					$("#imageloadbutton").show();
					} }).submit();
					
		
			});





			$('#photoimg2').die('click').live('change', function()			
			{ 
			           $("#preview2").html('');
			    
				
				$("#imageform2").ajaxForm({target: '#preview2', 
				     beforeSubmit:function(){ 
					
					console.log('v');
						$("#imageloadstatus2").show();
						 $("#imageloadbutton2").hide();
						}, 
					success:function(){ 
					console.log('z');
					 $("#imageloadstatus2").hide();
					 $("#imageloadbutton2").show();
					}, 
					error:function(){ 
							console.log('d');
					 $("#imageloadstatus2").hide();
					$("#imageloadbutton2").show();
					} }).submit();
					
			});


			$('#photoimg3').die('click').live('change', function()			
			{ 
			           $("#preview3").html('');
			    
				
				$("#imageform3").ajaxForm({target: '#preview3', 
				     beforeSubmit:function(){ 
					
					console.log('v');
						$("#imageloadstatus3").show();
						 $("#imageloadbutton3").hide();
						}, 
					success:function(){ 
					console.log('z');
					 $("#imageloadstatus3").hide();
					 $("#imageloadbutton3").show();
					}, 
					error:function(){ 
							console.log('d');
					 $("#imageloadstatus3").hide();
					$("#imageloadbutton3").show();
					} }).submit();
					
		
			});




        }); 
</script>



                        </head>

  <body>
    <!-- Nav Bar -->
   





<!-- ------------------------------------------ Navigation start ------------------- -->

<nav class="navbar navbar-inverse navbar-default " role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="#"><img src="../img/Shopping-Bag-icon.png" style="width: 30px" /></a>
					 <a class="navbar-brand" href="#">MauCom Shop</a>
					 
					 <!--
					 <a class="navbar-brand" href="#"><?php		 echo "[".$_SESSION["shopname"]."]"; ?></a>

					 -->
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					
					<ul class="nav navbar-nav navbar-right">
                        
                        <li class="active">
							
							<a href="ShopAdmin.php">
							<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
							Home
							</a>
						</li>
						
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">
							 <span class="glyphicon glyphicon-book" aria-hidden="true"></span>
							 Order<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="order.php">My Order</a>
								</li>
								
								<li>
									<a href="sales.php">Sales</a>
								</li>
								<li>
									<a href="#">Customer</a>
								</li>
							</ul>
						</li>

						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">
							 <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
							 Product<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="product.php">Product</a>
								</li>
								<li>
									<a href="category.php">Category</a>
								</li>
								<li>
									<a href="brand.php">Brand</a>
								</li>
								
							</ul>
						</li>



						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<span class="glyphicon glyphicon-leaf" aria-hidden="true"></span>
							 Design<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Banner</a>
								</li>
								<li>
									<a href="#">Display</a>
								</li>
							
								
							</ul>
						</li>

					<!--
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Stock<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">Purchase</a>
								</li>
								<li>
									<a href="#">Current</a>
								</li>
								<li>
									<a href="#">Sales</a>
								</li>
								
							</ul>
						</li>
					-->

						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">
							 <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
							 Setting<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="ShopProfile.php">Profile</a>
								</li>
								<li>
									<a href="#">Contact us</a>
								</li>
							<!--
								<li>
									<a href="#">About us</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Blog</a>
								</li>
								<li>
									<a href="#">Follow</a>
								</li>
							-->	
								
							</ul>
						</li>
                       
					    <li>
							<a href="mail.php">
							<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
							Mail</a>
						</li>

						<li>
							<a href="../index.php">
							<span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span>
							Logout</a>
						</li>

						<li>
						<a id="modal-1391111" href="#modal-container-1391111" role="button" class="btn" data-toggle="modal">
							<span class="glyphicon glyphicon-font" aria-hidden="true"></span>
								Lang
							</a>
			
							<div class="modal fade" id="modal-container-1391111" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
											<h4 class="modal-title" id="myModalLabel">
												Modal title
											</h4>
										</div>
										<div class="modal-body">
											Language <br/> <br/>
											<div id="google_translate_element"></div><script>
																	 function googleTranslateElementInit() {
																		 new google.translate.TranslateElement({
																			 pageLanguage: 'en'
																		 }, 'google_translate_element');
																	 }
											</script><script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> 

										</div>
										<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
										</div>
									</div>
					
								</div>
				
							</div>
						</li>

                        <li>
							<a href="#"> </a>
						</li>
					</ul>
				</div>
				
			</nav>








    <div class="container">

							<ul class="breadcrumb">
								<li>
									<a href="shopadmin.php?var1=<?php echo $_SESSION["mobile"]; ?>">Home</a> <span class="divider"></span>
								</li>
								<li>
									<a href="product.php?var1=<?php echo $_SESSION["mobile"]; ?>">Product </a> <span class="divider"></span>
								</li>
				
								<li class="active">
									Edit
								</li>
							</ul>

      <!--  		Product Body --------------------------------- -->

	  <?php
		
             
             
          $mob = $_SESSION["mobile"];
          $pro = $_GET["vv"];
          
         // echo "    $mob  =   $pro   <br/>";



		  	require_once "../includes/DBConnect.php";
		
					$query="SELECT * FROM zz".$_SESSION["mobile"]."products where productID='".$pro."'";
					$result=mysqli_query($db, $query) ;
		
					$cnt=0;
					$rcnt=0;
		
					if($row=mysqli_fetch_array($result))
					{
						$_SESSION["pid"] = $row["productid"];
						?>



						  <div class="row clearfix">

								<div class="col-md-6 column">

										<div class="caption">
				

<!-- Left side  Price etc ---------------------  -->

								
						
				
					<form data-toggle="validator" role="form" method="post" action="product_edit_db.php">
				
			
							  <div class="row clearfix">

								<div class="col-md-12 column">
										<input type="hidden"  class="form-control" name="productid1" value="<?php echo $row["productid"]; ?>" />


										<div class="form-group">
										
											<label for="Product Name">Product Name *</label>
											<input type="text"  class="form-control" name="productname1" value="<?php echo $row["productName"]; ?>" required/>

										</div>

										<div class="form-group">
										
											<label for="Price">Price *</label>
											<input type="text"  class="form-control" name="price1" value="<?php echo $row["price"]; ?>"required/>

										</div>
									
									   
									   <!-- Category --------------------------------- -->

									   <div class="form-group">
											<label for="categoryID">Category</label>
											 <select class="form-control" id="select" name="category1" >
											
												
												 <?php
													{
														require_once "../includes/DBConnect.php";
		
														$query1="SELECT * FROM zz".$_SESSION["mobile"]."category";
														$result1=mysqli_query($db, $query1) ;
		
														$cnt=0;
		
															while($row1=mysqli_fetch_array($result1))
															{
															    if ( $row1["categoryID"] !=  $row["categoryID"])
																 	echo "<li><option>".$row1["categoryID"]."</option></li>";
																else
																	echo "<li><option selected='selected'>".$row1["categoryID"]."</option></li>";
																
			
															}
														}
													?>
									   
												
											</select>
										</div>
									   
									   
									   
									   
									  <!-- Brand --------------------------------- -->

									   <div class="form-group">
											<label for="brand">Category</label>
											 <select class="form-control" id="select" name="brand1" >
												
												
												 <?php
													{
														require_once "../includes/DBConnect.php";
		
														$query1="SELECT * FROM zz".$_SESSION["mobile"]."brand";
														$result1=mysqli_query($db, $query1) ;
		
														$cnt=0;
		
															while($row1=mysqli_fetch_array($result1))
															{

																if ( $row1["brandid"] !=  $row["brand"])
																 	echo "<li><option>".$row1["brandid"]."</option></li>";
																else
																	echo "<li><option selected='selected'>".$row1["brandid"]."</option></li>";
																
															}
														}
													?>
									   
												
											</select>
										</div>
									   
									  
									    <!-- Show at home page --------------------------------- -->

									   <div class="form-group">
											<label for="show_homepage">Show At Home Page</label>
											 <select class="form-control" id="select" name="show_homepage1" >
												
												
												<?php

												if ( $row["show_homepage"] ==  "YES")
												{			 	
													?>
													<option selected='selected'>YES</option>
													<option>NO</option>
													<?php
												}
												else
												{
													?>	
													<option>YES</option>
													<option selected='selected'>NO</option>
													<?php
												 }
												?>
											</select>
										</div>
									   
									    <!-- awailabe in stock --------------------------------- -->

									   <div class="form-group">
											<label for="availableinstock">Available In Stock</label>
											 <select class="form-control" id="select" name="availableinstock1" >
												
												<?php

												if ( $row["availableinstock"] ==  "YES")
												{			 	
													?>
													<option selected='selected'>YES</option>
													<option>NO</option>
													<?php
												}
												else
												{
													?>	
													<option>YES</option>
													<option selected='selected'>NO</option>
													<?php
												 }
												?>
												 		
											</select>
										</div>
									   
									  
									   
									    <div class="form-group">
										
											<label for="Product Code">Product Code </label>
											<input type="text"  class="form-control" name="productcode1" value="<?php echo $row["productcode"]; ?>"required/>

										</div>
									
										





								</div>
        
							</div>


							<!-- Description ---------------------  -->


							<div class="row clearfix">

								<div class="col-md-12">
								
									<label for="Product Code">Description </label>
									
									<textarea rows="5" class="form-control" name="descriptions1"  ><?php echo $row["descriptions"]; ?></textarea>


								</div>



							</div>
							<br/>
							<p class="text-left">
								<button type="submit" class="btn btn-primary">Update Product</button>
							</p>
					</form>


											
										</div>
									</div>							
<!--  ---------------------  -->

<!-- Right side  Image etc ---------------------  -->

		<div class="col-md-6 column">
			
			
			

	

			<!-- Small Image ---------------------  -->

			<div class="row clearfix">

				<div class="col-md-12">
					
						<div class="thumbnail" id='preview' >


							<img src="<?php echo "../".$row["image1"]; ?>" style="height:120px"/>
							

						</div>
						
						<form id="imageform" method="post" enctype="multipart/form-data" action='product_edit_Upload.php?vimg=<?php echo $row["productid"]."_1"; ?>'>
							
							<div id='imageloadstatus' style='display:none'><img src="../img/loader.gif" alt="Uploading...."/></div>
							<div id='imageloadbutton'>
							<input type="file" name="photoimg" id="photoimg" />
							</div>
							</form>
					
					<br/>
				</div>

			</div>
			
			<div class="row clearfix">

				<div class="col-md-12">
					
						<div class="thumbnail" id='preview2'  >
					
								<img src="<?php echo "../".$row["image2"]; ?>" style="height:120px"/>

						</div>
						
						<form id="imageform2" method="post" enctype="multipart/form-data" action='product_edit_Upload2.php?vimg=<?php echo $row["productid"]."_2"; ?>'>
							
							<div id='imageloadstatus2' style='display:none'><img src="../img/loader.gif" alt="Uploading...."/></div>
							<div id='imageloadbutton2'>
							<input type="file" name="photoimg2" id="photoimg2" />
							</div>
							</form>
					

					<br/>
				</div>
			</div>

			<div class="row clearfix">
			
				<div class="col-md-12">
					
						<div class="thumbnail"  id='preview3' >
					
								<img src="<?php echo "../".$row["image3"]; ?>"  style="height:120px"/>

						</div>
						
						<form id="imageform3" method="post" enctype="multipart/form-data" action='product_edit_Upload3.php?vimg=<?php echo $row["productid"]."_3"; ?>'>
							
							<div id='imageloadstatus3' style='display:none'><img src="../img/loader.gif" alt="Uploading...."/></div>
							<div id='imageloadbutton3'>
							<input type="file" name="photoimg3" id="photoimg3" />
							</div>
						</form>
						
					
				</div>

			</div>



			

<!--  ---------------------  -->


	</div>

						
        
</div>



						

				 <?php

						
					}
							
							
				?>

                        










      <!-- Footer -->
      <div class="row clearfix">
        <div class="col-md-12 column">
          <hr />			&copy - MauCom Solutions Pvt Ltd  | <a href="http://www.maucom.co.in" > Website</a><br/><br/>
          
        </div>
      </div>


    </div>

  </body>
</html>
