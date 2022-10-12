<?php
	require_once "http.php";
	require_once "validator.php";
	
 session_start();
  
	//if(checkRegister())
  //{
  
    
    $name1=$_REQUEST["name1"];
    
    if ($name1 == null)
    {
    
        redirect("../Profile.php?nameError=true");
    }
    else
    {
    
		   require_once "DBConnect.php";
		
       
		    $query="UPDATE user1 SET NAME='".$name1."' Where username='".$_SESSION['user']."' ";
		
		    $result=mysqli_query($db, $query) ;
		  
		
		    if($result!=1)
        {
		 	    
			    redirect("../Profile.php?nameError=true");
		    }
        else
        {
		 	    //echo "RESULT2: ".$result;
			    session_start();
			    
          $_SESSION["name1"]=$name1;
         
          
			    redirect("../Profile.php");
		    }
     }
	
  
?>