<!-- Nav Bar 1 -->
<nav class="navbar navbar-default " role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>

    <a class="navbar-brand" href="shop.php?var1="
      <?php echo $_SESSION["mobile1"];  ?>">

      <img src="../img/Shopping-Bag-icon.png" style="width: 30px" />

    </a>



  </div>

  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

    <ul class="nav navbar-nav navbar-right">

      <li class="active">
        <a href="shop.php?var1="
          <?php echo $_SESSION["mobile1"];  ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home
        </a>
      </li>



      <!-- Category List -->
      <li class="dropdown">


        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>
          Category<strong class="caret"></strong>
        </a>


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
            <a href="category.php?var1="
              <?php echo $_SESSION["mobile1"]; ?>&var2=<?php echo $row["categoryID"]; ?>" ><?php echo $row["categoryID"]; ?>
            </a>
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
          Brand<strong class="caret"></strong>
        </a>


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
            <a href="brand.php?var1="
              <?php echo $_SESSION["mobile1"]; ?>&var2=<?php echo $row["brandid"]; ?>" ><?php echo $row["brandid"]; ?>
            </a>
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
        <a href="shopping_cart.php?var1="
          <?php echo $_SESSION["mobile1"];  ?>"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Shopping Cart
        </a>
      </li>


      <li>
        <a href="checkout.php?var1="
          <?php echo $_SESSION["mobile1"];  ?>"><span class="glyphicon glyphicon-share" aria-hidden="true"></span> Check out
        </a>
      </li>



      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Account<strong class="caret"></strong>
        </a>
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
        <a href="contact.php?var1="
          <?php echo $_SESSION["mobile1"];  ?>"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> Contact us
        </a>
      </li>


      <li>
        <a href="#"> </a>
      </li>
    </ul>
  </div>

</nav>

