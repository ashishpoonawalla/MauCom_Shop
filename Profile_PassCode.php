<?php
	require_once "http.php";
	require_once "validator.php";
	
 session_start();
  
	//if(checkRegister())
  //{
  
    
    $pass1=$_REQUEST["pass1"];
    
    if ($pass1 == null)
    {
    
        redirect("../Profile.php?nameError=true");
    }
    else
    {
    
		    require_once "DBConnect.php";
		
       
		    $query="UPDATE user1 SET PASSWORD='".$pass1."' Where username='".$_SESSION['user']."' ";
		
		    $result=mysqli_query($db, $query) ;
		  
		
		    if($result!=1)
        {
		 	    
			    redirect("../Profile.php?nameError=true");
		    }
        else
        {
		 	    //echo "RESULT2: ".$result;
			    session_start();
			    
          $_SESSION["pass"]=$pass1;
         
          
			    redirect("../Profile.php");
		    }
     }
	//}
  //else
  //{
	 //	echo "Error RESULT3: ";
		////redirect("../Signup.php?registerError=true");
	//}
  
?>