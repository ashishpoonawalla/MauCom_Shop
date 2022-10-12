<!DOCTYPE html>
<html ng-app="myApp" ng-app lang="en" lang="en">
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
</head>

<body>
<!-- Nav Bar -->
<?php

			 session_start();
			

?>





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


	
	<!--  		Product List --------------------------------- -->

		<?php include("brand_list.php"); ?>




<!-- Footer -->
	<div class="row clearfix">
		<div class="col-md-12 column">
        <hr />			&copy - MauCom Solutions Pvt Ltd  | <a href="http://www.maucom.co.in" > Website</a>  
		<div id="google_translate_element"></div><script>
                                             function googleTranslateElementInit() {
                                                 new google.translate.TranslateElement({
                                                     pageLanguage: 'en'
                                                 }, 'google_translate_element');
                                             }
</script><script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> 
		<br />
		</div>
	</div>


</div>
  
</body>
</html>
