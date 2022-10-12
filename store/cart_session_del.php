<?php

//------------------- Set Session variable when user use first time our site -------------

				session_start();
				
				$mob = $_POST["mobile12"];
			
			
				$_SESSION["cart_items"] = 0;
				$_SESSION["cart_sum"] = "0.00";
			
				$_SESSION["cart_detail"]="";
				
				$cart_detail = array
							  (
								array("-2",0,0,0),							  
		 
							  );

			    $_SESSION["cart_detail"] = $cart_detail ;
				
				//print_r($_SESSION["cart_detail"]);
				
 		header("location:shopping_cart.php?var1=".$mob);

?>