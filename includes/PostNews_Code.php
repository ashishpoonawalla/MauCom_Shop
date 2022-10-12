<?php
	require_once "http.php";
	require_once "validator.php";
	 
   
   session_start();
 	  $username=      $_SESSION["user"];
    $name1 =        $_SESSION["name1"];
    $imageprofile=  $_SESSION["image1"];
    $newspost=      $_REQUEST["newspost"];
    $dt = date("d.M");
  
	//if(checkRegister())
  //{
  
  
	 	
    
    if ($username == null || $name1 == null || $newspost == null)
    {
    
        redirect("../Post.php?postError=true");
    }
    else
    {
    
    
          try 
          {
    
		          require_once "DBConnect.php";
		
		              $query="INSERT INTO newspost(USERNAME, NEWS, DATE, USERIMAGE, NAME, comments, likecount) VALUES('".$username."','".$newspost."','".$dt."','".$imageprofile."','".$name1."',' ',0) ";
		
		              $result=mysqli_query($db, $query) ;
		              //echo "RESULT: ".$result;
		
		              if($result!=1)
                  {
		 	              //echo "RESULT1: ".$result;
			              redirect("../Post.php?postError=true");
		              }
                  else
                  {
		 	              //echo "RESULT2: ".$result;
			   

			              redirect("../Post.php");
		              }
        
        
        
          }
          catch(PDOException $e)
          {
              redirect("../Post.php?postError=true");
          }
        
        
    }
	//}
  //else
  //{
	 //	echo "Error RESULT3: ";
		////redirect("../Signup.php?registerError=true");
	//}
  
?>