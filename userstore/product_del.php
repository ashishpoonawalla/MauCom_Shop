      <!--  		Product Delete Body --------------------------------- -->

		<?php
		
          session_start();
             
          $mob = $_SESSION["mobile"];
          $pro = $_GET["vv"];
          
          echo "    $mob  =   $pro   <br/>";



		  	require_once "../includes/DBConnect.php";
		
					$query="Delete FROM zz".$_SESSION["mobile1"]."products where productID='".$pro."'";
					$result=mysqli_query($db, $query) ;
		
				
				
				 header("location:product.php");			
							
		?>

                        


