<?php
		
		session_start();
             
             
          $mob = $_GET["var1"];
          $pro = $_GET["var2"];
          
          echo "    $mob  =   $pro   <br/>";
          
           //---------- Seach existing items -------------------------
           
           $cart_detail = $_SESSION["cart_detail"];
              
              $chk = 0;
              $cnt = count($cart_detail );
              
              
              if ($cnt > 0)
              {
              
              
                  for ($row = 0; $row < $cnt; $row++) 
                  {
		            
                
			                  $listprodid = $cart_detail[$row][0];
		                
                        echo "$pro =  $listprodid";
                    
                        if ($pro == $listprodid)
                        {
                                //--------------------- if items already in list --------------------
		                            $cart_detail[$row][1] = $cart_detail[$row][1] + 1;
                                              
                                $cart_detail[$row][3] = $cart_detail[$row][1] * $cart_detail[$row][2];
                               
                                $_SESSION["cart_detail"] = $cart_detail;
                                
                                $chk = 1;
                                break;
                        }
                       
                    
                       
                    
                    }
                    
                    
                    if ($chk == 0)
                    {
                    
                             
          
                                require_once "../includes/DBConnect.php";
		
					                      $query="SELECT * FROM zz".$mob."products where productid=".$pro;
					                      $result=mysqli_query($db, $query) ;
		
                                
    
				                        if($row=mysqli_fetch_array($result))
					                      {
              
                                        //--------------------- Add num of items in cart
                          
                                        $cart_items = $_SESSION["cart_items"];
                                        $cart_items++;
                                        $_SESSION["cart_items"] = $cart_items;
                                        
                                       // echo "OK1";
                                        
                                        //--------------------- Add item to cart
                          
                                        $cart_detailnew = array($row["productid"],1,$row["price"],$row["price"]);							  
		 
							                                  
                                        
                                        $cart_detail = $_SESSION["cart_detail"] ;
                                        
                                        array_push($cart_detail, $cart_detailnew);
                                        
                                        $_SESSION["cart_detail"] = $cart_detail;
                                        
                                        //print_r($cart_detail );
					                      }
                    
                        }
                    
                    
                  // ------------------- Recount total amount ---------------
                  
                    $tot = 0;
                    
                    for ($row = 0; $row < $cnt; $row++) 
                    {
		                    
                        $tot = $tot + $cart_detail[$row][3];  
                         
                    }
		                $_SESSION["cart_sum"] = $tot;
              }
          
          
          
         
					
              
              
             header("location:shop.php?var1=".$mob);
				?>

