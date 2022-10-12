

<?php
					require_once "../includes/DBConnect.php";
		
					$query="SELECT * FROM zz".$_SESSION["mobile1"]."products where productID='".$_SESSION["product1"]."'";
					$result=mysqli_query($db, $query) ;
		
					$cnt=0;
					$rcnt=0;
		
					if($row=mysqli_fetch_array($result))
					{
						
						?>



						  <div class="row clearfix">

							<div class="col-md-8 column">

<!-- Left side  Image etc ---------------------  -->


			<!-- Big Image ---------------------  -->


			<div class="row clearfix">

				<div class="col-md-12">
					<a href="#" >
						<div class="thumbnail"  >
					
								<img src="<?php echo "../".$row["image1"]; ?>" style="height:250px"/>

						</div>
					</a>

				</div>



			</div>


			<!-- Small Image ---------------------  -->

			<div class="row clearfix">

				<div class="col-md-4">
					<a href="#" >
						<div class="thumbnail"  >


                  <img src="<?php echo "../".$row["image1"]; ?>" class="magnify" style="height:100px"/>


             </div>
					</a>

				</div>


				<div class="col-md-4">
					<a href="#" >
						<div class="thumbnail"  >
					
								<img src="<?php echo "../".$row["image2"]; ?>" class="magnify" style="height:100px"/>

             </div>
					</a>

				</div>

				<div class="col-md-4">
					<a href="#" >
						<div class="thumbnail"  >
					
								<img src="<?php echo "../".$row["image3"]; ?>" class="magnify" style="height:100px"/>

            </div>
					</a>

				</div>

			</div>



			<!-- Description ---------------------  -->


			<div class="row clearfix">

				<div class="col-md-12">
					<h3>Description</h3>
					<p>
					<?php echo $row["descriptions"]; ?>
					</p>
					

				</div>



			</div>

<!--  ---------------------  -->


							</div>

<!-- Right side  Price etc ---------------------  -->

							<div class="col-md-4 column">

		<div class="caption">
				
						
					<?php 
								
						echo "<h1>".$row["productName"]."</h1>"; 							
					
						echo "<br/><p>Brand: ".$row["brand"]."</p>"; 
                        echo "<p>Product Code: ".$row["productcode"]."</p>"; 

						if ($row["availableinstock"] == "YES")
							echo "<p>Availability: In Stock</p>"; 
						else
							echo "<p>Availability: Out of Stock</p>"; 

         
                                 
						echo "<br/><h3>Rs ".$row["price"]."</h3><br/>"; 
                                    
					?>
				
						
						<a class="btn btn-primary" href="product_addtocart.php?var1=<?php echo $_SESSION["mobile1"]; ?>&var2=<?php echo $row["productid"]; ?>" >
                                    <img src="../img/shopping-cart.png" data-toggle="tooltip" data-placement="top" title="Add to Cart" /> Add to Cart
                        </a>
					

				<p>
                                  
					

					
                                  
				</p>

				</div>
								
<!--  ---------------------  -->

							</div>
        
						</div>



						

				 <?php

						
					}
							
							
				?>

                        