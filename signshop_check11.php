<?php
	require_once "http.php";
	require_once "validator.php";
	
 
  
	//if(checkRegister())
  //{
  
  session_start();
		$username=$_SESSION["user"];
  
    $mobile1=$_REQUEST["mobile1"];
	 	$shopname=$_REQUEST["shopname"];
    $city1=$_REQUEST["city1"];
    $address1=$_REQUEST["address1"];
    $Pin=$_REQUEST["Pin1"];
    
    $imgfile = "img_profile/".$username."logo.JPG";
    $shoplogo1=$imgfile;
    
         
    
    
    if ($mobile1 == null || $shopname == null || $city1 == null)
    {
    
        redirect("../signshop.php?registerError=true");
    }
    else
    {
    
		    require_once "DBConnect.php";
		    
        	$query1="SELECT * FROM user1 WHERE mobileno='".$mobile."' ";
          
		        $result1=mysqli_query($db, $query1) ;
		        $row=mysqli_fetch_assoc($result1);
		
		        if(!isset($row["mobileno"]))
            {
			       
             
             
              require_once "DBConnect.php";
		    
              $query="Update user1 SET mobileno='".$mobile1."', shopname='".$shopname."', city='".$city1."',address1='".$address1."',pinorzip='".$Pin."',shoplogo='".$imgfile."' where username='".$username."' ";
		
		            $result=mysqli_query($db, $query) ;
		            //echo "RESULT: ".$result;
		
		            if($result!=1)
                {
		 	            //echo "RESULT1: ".$result;
			            redirect("../signshop.php?registerError=true");
		            }
                else
                {
		 	            //echo "RESULT2: ".$result;
			   
                // session_start();
			          // $_SESSION["user"]=$username;
                // $_SESSION["pass"]=$password;
                // $_SESSION["name1"]=$row["name"];
                // $_SESSION["image1"]=$row["profileimage"];
         
			            $_SESSION["mobile"]=$mobile1;
                  $_SESSION["shopname"]=$shopname;
         
                  copy("../img_profile/shoplogo1.png",$imgfile);
          
                  $_SESSION["imageshop1"]=$imgfile1;
          
          
			            redirect("../shopadmin.php");
		            }
             
             
             
             
             
		        }
            else
            {
			         $_REQUEST["loginError"]="Mobile no already taken by someone !";
			        redirect("../signshop.php?loginError=true");
		        }
        
        
		   
     }
	//}
  //else
  //{
	 //	echo "Error RESULT3: ";
		////redirect("../Signup.php?registerError=true");
	//}
  
?>