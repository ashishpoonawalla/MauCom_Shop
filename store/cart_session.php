<?php

//------------------- Set Session variable when user use first time our site -------------

			
			
			if ( (!isset($_SESSION["cart_items"])) || ($_SESSION["cart_items"] == "") )
				$_SESSION["cart_items"] = 0;


			if ( (!isset($_SESSION["cart_sum"]))  || ($_SESSION["cart_sum"] == "") )
				$_SESSION["cart_sum"] = "0.00";
			


			if ((!isset($_SESSION["cart_detail"])) || ($_SESSION["cart_detail"] == "") )
			{
				$cart_detail = array
							  (
								array("-2",0,0,0),							  
		 
							  );

			    $_SESSION["cart_detail"] = $cart_detail ;
				//print_r($cart_detail );

			}
			
			
			$cart_detail = $_SESSION["cart_detail"];

			
              
              $chk = 0;
              $cnt = count($cart_detail );
			  
              $totsum = 0;
			  $totitems =0;
			  
              
              if ($cnt > 0)
              {
              
              
                  for ($row = 0; $row < $cnt; $row++) 
                  {
		            
                        if ($cart_detail[$row][0] != "-2")
                        {
                                              
                                $cart_detail[$row][3] = $cart_detail[$row][1] * $cart_detail[$row][2];
                               
                                $totsum = $totsum + $cart_detail[$row][3];  
								
								$totitems++;
								
                        }
                       
                    	
                    }
                    
                     $_SESSION["cart_sum"] = $totsum;
                     $_SESSION["cart_items"] = $totitems;
                       
                    
                      
                   
		               
              }
          





			















?>