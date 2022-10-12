<?php
					require_once "../includes/DBConnect.php";
		
					$query="SELECT * FROM zz".$_SESSION["mobile1"]."products where categoryID='".$_SESSION["category1"]."'";
					$result=mysqli_query($db, $query) ;
		
					$cnt=0;
					$rcnt=0;
		
					while($row=mysqli_fetch_array($result))
					{

						//$bannerurl = $row["bannerimg"];

						//if( $row["show_homepage"] == "YES")
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
                            <div class="thumbnail" style="height: 400px" >

                              <a href="product_detail.php?var1=<?php echo $_SESSION["mobile1"]; ?>&var2=<?php echo $row["productid"]; ?>" >

                                  <img src="<?php echo "../".$row["image1"]; ?>" style="height:150px"/>

                              </a>
                                <div class="caption">
                                <h3>
								                    <a href="product_detail.php?var1=<?php echo $_SESSION["mobile1"]; ?>&var2=<?php echo $row["productid"]; ?>" >
                                          <?php 
                                          $prod = $row["productName"];
                                          echo substr($prod,0,18); 
                                      
                                          ?>
								                    </a>
                                </h3>
                                <p>
                                  <?php 
                                  
                                  $desc = $row["descriptions"];
                                  $desc1 = substr($desc,0,80);
                                  echo "$desc1.."; 
                                  
                                  
                                  echo "<br/><br/><b>Rs ".$row["price"]."</b>"; 
                                 
                                  
                                  
                                  ?>
                                </p>
                                <p>
                                  
                                  <a class="btn btn-default" href="#"> Cart </a>

                                  <a class="btn" href="#"> Wish </a>
                                  
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

                        