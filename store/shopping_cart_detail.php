 <?php
		//session_start();
             
        $mob = $_GET["var1"];


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


                          <form role="form" action="shopping_cart_detail_ref.php" method="GET">
                            <input type="hidden" class="form-control" name="prod"  value="<?php echo $listprodid; ?>" style="width: 50px;">

                            <div class="input-group">
                              <input type="text" class="form-control" name="qnty"  value="<?php echo $listprodqnty; ?>" style="width: 50px;">
                              <button name="submit" type="submit" class="btn btn-primary" value='ref'>
                                  <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
                                </button>
                                <button name="submit" type="submit" class="btn btn-danger" value='del'>
                                    <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>
                                </button>
                                
                              </div>

                          </form>
                          
                        </td>



                     							<td>

                          <p class="text-right">
                            <?php echo $listprodprice; ?>
                          </p>
                          
												</td>
												<td>
                          <p class="text-right">
                            <?php
							
							if (strpos($listprodamt,".") > -1)
							{
								echo $listprodamt;
							}
							else
							{
								echo $listprodamt.".00"; 
							}
							 
							 
							 
							 ?>
                          </p>
												</td>
											</tr>

											
									    <?php
										
									}
									
							}
                    
            }
                    
        }
			  $cartempty = "N";
			 
			  if ($tccc == 0)
			  {

					echo "<h2> Shopping Cart..</h2> <p> Your shopping cart is empty ! </p><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
					 $cartempty = "Y";
			  }
			 
			  	
			  

			    $_SESSION["cart_sum"] = $tot;

				//print_r($cart_detail);
			
		?>


					
				</tbody>
			</table>



<?php

if ($cartempty == "N")
{
	?>
	
	


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
            <p class="text-right">Rs <?php echo $tot.".00"; ?>
          </p>
          </td>
        </tr>

        <tr>
          <td>
            <p class="text-right">Shipping Rate:</p>
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
            <p class="text-right">Rs <?php echo $tot.".00"; ?>
          </p>
          </td>
        </tr>

      </tbody>
    </table>
    
    
  </div>

</div>

<?php

}
	?>
