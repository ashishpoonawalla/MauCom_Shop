<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>MauCom Shop</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

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
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>

<body>

<div class="container">

<!-- Nav Bar -->

	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-inverse navbar-default navbar-fixed-top" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="#">MauCom Shop</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					
					<ul class="nav navbar-nav navbar-right">
                        
                        <li class="active">
							<a href="Post.php">News Post</a>
						</li>
						
                        <li>
							<a href="Profile.php">Profile</a>
						</li>
						
                        <li>
							<a href="MyWall.php">My Wall</a>
						</li>

                         <li>
							<a href="index.php">Logout</a>
						</li>

                        
                        <li>
							<a href="mailto:info@maucom.co.in">Mail us</a>
						</li>
                          <li>
							<a href="#"> </a>
						</li>
					</ul>
				</div>
				
			</nav>
		</div>
	</div>

    <br /><br /><br />


<!-- Post -->
	<div class="row clearfix">
		<div class="col-md-8 column">
			

			<?php include("includes/PostNews.php"); ?>

			<br />

			<?php include("includes/PostListPost.php"); ?>



			
			



            	
		
			
		</div>


		<div class="col-md-4 column">
			<ul class="nav nav-pills">
				<li class="active">
					 <a href="#"> <span class="badge pull-right">2</span> Friends Request</a>
				</li>
				<li>
					 <a href="#"> <span class="badge pull-right">6</span> App Request</a>
				</li>
			</ul>
            
            <br /><br />
				<h4>Sponsored Link</h4>
			<br />

            <img alt="140x140" width="130px" src="img_project/Advt1.jpg">
            

            <br /><br />

            <img alt="140x140" width="130px" src="img_project/Advt2.jpg">

            <br /><br />

            <img alt="140x140" width="130px" src="img_project/Advt3.jpg">




		</div>
	</div>



<!-- Footer -->
	<div class="row clearfix">
		<div class="col-md-12 column">
        <hr />			&copy - MauCom Solutions P Ltd  | <a href="http://www.maucom.co.in" > Website</a>  <br /> 
		</div>
	</div>


</div>
</body>
</html>
