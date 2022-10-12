<div class="carousel slide" id="carousel-47768">
				
				
				<div class="carousel-inner">



						<?php
								require_once "../includes/DBConnect.php";
		
								$query="SELECT * FROM zz".$_SESSION["mobile1"]."banner";
								$result=mysqli_query($db, $query) ;
		
								$cnt=0;
		
								while($row=mysqli_fetch_array($result))
								{

									$bannerurl = $row["bannerimg"];

									$cnt++;
									if ($cnt == 1)
									{

										?>
											<div class="item active">

										<?php			

									}
									else
									{
										?>
											<div class="item">

										<?php	

									}
									?>

										<img alt="" src="<?php echo "../".$row["bannerimg"]; ?> " />
												<div class="carousel-caption">
													<h4>
								
													</h4>
													<p>
								
													</p>
												</div>
											</div>
									<?php
			
								}
							
							
							?>

				</div> 
				
				
				<a class="left carousel-control" href="#carousel-47768" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-47768" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
			
		