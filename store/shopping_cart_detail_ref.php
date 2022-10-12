 <?php
		session_start();
             
				//---------- Seach existing items -------------------------
           
			$cart_detail = $_SESSION["cart_detail"];
              
            $mob = $_SESSION["mobile1"];
            $qnt = $_REQUEST["qnty"];
            $pro = $_REQUEST["prod"];
              $cnt = count($cart_detail );
            
				echo "$qnt  $pro";

            for ($row = 0; $row < $cnt; $row++) 
            {
		           
              
               
							$listprodid = $cart_detail[$row][0];
							$listprodqnty = $cart_detail[$row][1];
							$listprodprice = $cart_detail[$row][2];
							$listprodamt = $cart_detail[$row][3];
              
              if ($listprodid == $pro)
              {
              
              
							  if(isset($_REQUEST["submit"]) && $_REQUEST["submit"]=="ref")
		              {
                    //--------------- Refresh - modify quantity ------------
                    
                    $qnt1 = (int)$qnt;
                    
                    if ($qnt1 < 0)
                      $qnt1 = 1;
                      
                      $cart_detail[$row][1] = $qnt1;
                      $cart_detail[$row][3] = $cart_detail[$row][1] * $cart_detail[$row][2];
                    
                    echo "modify";
                  }
		          else
                  {
		                //--------------- Delete Product------------
                   $cart_detail[$row][0] = "-2";
		               echo "Delete";
                  }
                  
                  
                 
               }         
							
            }
							
             $_SESSION["cart_detail"] = $cart_detail ;
              
              header("location:shopping_cart.php?var1=".$mob);
?>