<?php
	require_once "http.php";
	require_once "validator.php";
	
 
  
	//if(checkRegister())
  //{
  
    $username=$_REQUEST["username"];
	 	$password=$_REQUEST["password"];
    $name1=$_REQUEST["name1"];
    
    if ($username == null || $password == null || name1 == null)
    {
    
        redirect("../Signup.php?registerError=true");
    }
    else
    {
    
		    require_once "DBConnect.php";
		
          $imgfile = "../img_profile/".$username.".JPG";
          $imgfile1 = "img_profile/".$username.".JPG";
    
		    $query="INSERT INTO user1(username, password, name, profileimage) VALUES('".$username."','".$password."','".$name1."','".$imgfile1."') ";
		
		    $result=mysqli_query($db, $query) ;
		    //echo "RESULT: ".$result;
		
		    if($result!=1)
        {
		 	    //echo "RESULT1: ".$result;
			    redirect("../Signup.php?registerError=true");
		    }
        else
        {
		 	    //echo "RESULT2: ".$result;
			    session_start();
			    $_SESSION["user"]=$username;
          $_SESSION["name1"]=$name1;
         
          copy("../img_profile/Person1.JPG",$imgfile);
          
          $_SESSION["image1"]=$imgfile1;
          
          
			    redirect("../SignShop.php");
		    }
     }
	//}
  //else
  //{
	 //	echo "Error RESULT3: ";
		////redirect("../Signup.php?registerError=true");
	//}
  
?>