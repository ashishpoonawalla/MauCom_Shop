<?php
	require_once "http.php";
	require_once "validator.php";
	
 
  
	//if(checkRegister())
  //{
  
    session_start();
		$username=$_SESSION["user"];
  
    
	 	$shopname=$_REQUEST["shopname"];
    $city1=$_REQUEST["city1"];
    $address1=$_REQUEST["address1"];
    $Pin=$_REQUEST["Pin1"];
    
    //$imgfile = "img_profile/".$username."logo.JPG";
    //$shoplogo1=$imgfile;
    
         
    
    
    if ( $shopname == null || $city1 == null)
    {
    
        redirect("../shopprofile.php?registerError=true");
    }
    else
    {
    
		    require_once "DBConnect.php";
		    
        
		    $query="Update user1 SET  shopname='".$shopname."', city='".$city1."',address1='".$address1."',pinorzip='".$Pin."' where username='".$username."' ";
		
		    $result=mysqli_query($db, $query) ;
		    //echo "RESULT: ".$result;
		
		    if($result!=1)
        {
		 	    //echo "RESULT1: ".$result;
			    redirect("../shopprofile.php?registerError=true");
		    }
        else
        {
		 	    //echo "RESULT2: ".$result;
			   
      
          $_SESSION["shopname"]=$shopname;
         
         
			    redirect("../userstore/shopadmin.php");
		    }
     }
	//}
  //else
  //{
	 //	echo "Error RESULT3: ";
		////redirect("../Signup.php?registerError=true");
	//}
  
?>