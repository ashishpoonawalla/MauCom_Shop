 <?php
		//session_start();
             
        $mob = $_SESSION["mobile1"];


?>




		<?php

				//---------- Seach existing items -------------------------
           
			  $cart_detail = $_SESSION["cart_detail"];
              
             
              $cnt = count($cart_detail );
              $tot = 0;
			  
			  $tccc = 0;
			  $ttitle=0;
              
              if ($cnt > 0)
              {

			   for ($row = 0; $row < $cnt; $row++) 
                  {
		           
							$listprodid = $cart_detail[$row][0];
							
							
		                
                        
							if ($listprodid > 0 )
							{
								$ttitle++;
								break;
							}
					}
				  
				  
				  if ($ttitle > 0)
				  {

				  ?>


							<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>
										Image
									</th>
									<th>
										Product Name
									</th>
									<th>
										Model
									</th>
									<th>
										Quantity
									</th>
									<th>
                    <p class="text-right"> Unit Price  </p>
									</th>
									<th>
                    <p class="text-right"> Total </p>
									</th>
								</tr>
							</thead>
							<tbody>


				  <?php

				  }

            for ($row = 0; $row < $cnt; $row++) 
            {
		           
							$listprodid = $cart_detail[$row][0];
							$listprodqnty = $cart_detail[$row][1];
							$listprodprice = $cart_detail[$row][2];
							$listprodamt = $cart_detail[$row][3];

							//echo "<hr>$listprodid<hr>";
		                
                        
							if ($listprodid > 0 )
							{
									$tccc++;

									$tot = $tot + $cart_detail[$row][3];  
										
									
									// ---------------- Select product details

									require_once "../includes/DBConnect.php";

									$query="SELECT * FROM zz".$_SESSION["mobile1"]."products where productid=".$listprodid;

									$result=mysqli_query($db, $query) ;
		
									if($rowDB=mysqli_fetch_array($result))
									{

                                              
											?>

											<tr>
												<td>
													<!--  ---------------- Image    -->
													<div class="thumbnail" style="height: 50px;" >

													  <a href="product.php?var1=<?php echo $_SESSION["mobile1"]; ?>&var2=<?php echo $rowDB["productid"]; ?>" >

														  <img src="<?php echo "../".$rowDB["image1"]; ?>" style="height:43px"/>

													  </a>

													</div>


												</td>
												<td>
													<a href="product.php?var1=<?php echo $_SESSION["mobile1"]; ?>&var2=<?php echo $rowDB["productid"]; ?>" >

														<?php echo $rowDB["productName"]; ?>

													</a>
												</td>
                     
												<td>
													<?php echo $rowDB["productcode"]; ?>
												</td>


                    
												<td>
													<?php echo $listprodqnty; ?>
												</td>
                       
                        
												<td>

                          <p class="text-right">
                            <?php echo $listprodprice; ?>
                          </p>
                          
												</td>
												<td>
                          <p class="text-right">
                            <?php echo $listprodamt; ?>
                          </p>
												</td>
											</tr>

											
									    <?php
										
									}
									
							}
                    
            }
                    
        }
			  
			  if ($tccc == 0)
			  {

					echo "<h1> Shopping Cart..</h1> <p> Your shopping cart is empty ! </p><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";

			  }


			    $_SESSION["cart_sum"] = $tot;

				//print_r($cart_detail);
			
		?>


					
				</tbody>
			</table>





<div class="row clearfix">

  <div class="col-md-8 column">

  </div>
  <div class="col-md-4 column">

    <table class="table table-bordered">
     
      <tbody>

        <tr>
          <td>
            <p class="text-right">Sub Total:</p>
          </td>
          <td>
            <p class="text-right">Rs <?php echo $tot; ?>
          </p>
          </td>
        </tr>

        <tr>
          <td>
            <p class="text-right">Shipping Rat:</p>
          </td>
          <td>
            <p class="text-right">Rs 0.00</p>
          </td>
        </tr>

<!-- 
        <tr>
          <td>
            <p class="text-right">VAT:</p>
          </td>
          <td>
            <p class="text-right">Rs 0.00</p>
          </td>
        </tr>
-->
        <tr>
          <td>
            <p class="text-right">Total:</p>
          </td>
          <td>
            <p class="text-right">Rs <?php echo $tot; ?>
          </p>
          </td>
        </tr>

      </tbody>
    </table>
    
    
    
    
  </div>

</div>
