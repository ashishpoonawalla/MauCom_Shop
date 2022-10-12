<?php
					require_once "../includes/DBConnect.php";
		
					$query="SELECT * FROM zz".$_SESSION["mobile1"]."products";
					$result=mysqli_query($db, $query) ;
		
					$cnt=0;
					$rcnt=0;
		
					while($row=mysqli_fetch_array($result))
					{

						//$bannerurl = $row["bannerimg"];

						if( $row["show_homepage"] == "YES")
						{
						
								$cnt++;
								$rcnt++;
						
						
								if ($rcnt == 1)
								{

									?>
                      <div class="row clearfix">

                        <?php			

								}
						
								?>




                          <div class="col-md-3">
                            <div class="thumbnail" style="height: 420px" >

                              <a href="product.php?var1=<?php echo $_SESSION["mobile1"]; ?>&var2=<?php echo $row["productid"]; ?>" >

                                  <img src="<?php echo "../".$row["image1"]; ?>" style="height:150px"/>

                              </a>
                                <div class="caption">
                                <h3>
								                    <a href="product.php?var1=<?php echo $_SESSION["mobile1"]; ?>&var2=<?php echo $row["productid"]; ?>" >
                                          <?php 
                                          $prod = $row["productName"];
                                          echo substr($prod,0,20); 
                                      
                                          ?>
								                    </a>
                                </h3>
                                <p>
                                  <?php 
                                  
                                    $desc = $row["descriptions"];
                                    $desc1 = substr($desc,0,80);
                                    echo "$desc1.."; 
                                  
                                  
                                    echo "<br/><p><b>Rs ".$row["price"]."  &nbsp&nbsp&nbsp</b>"; 
                                 
                                  
                                  
                                  ?>
                                  
                                  
                                  <a class="btn" href="shop_products_addtocart.php?var1=<?php echo $_SESSION["mobile1"]; ?>&var2=<?php echo $row["productid"]; ?>" >
                                    <img src="../img/shopping-cart.png" data-toggle="tooltip" data-placement="top" title="Add to Cart" />
                                  </a>
                                  </p>
                                  <!--
                                      <a class="btn" href="#"> Wish </a>
                                  -->
                                </p>

                              </div>

                            </div>

                          </div>


     <?php

								if ($rcnt == 4)
								{

									$rcnt=0;
							
									echo "</div>";

								}
							}
					}
							
							
				?>

                        