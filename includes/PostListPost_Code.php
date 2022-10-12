<?php
	require_once "http.php";
	require_once "validator.php";
	 
   
   session_start();
 	  $username=      $_SESSION["user"];
    $name1 =        $_SESSION["name1"];
    $imageprofile=  $_SESSION["image1"];
    $postID2=       $_REQUEST["postid2"];
    $comment2=      $_REQUEST["comment2"];
    $dt = date("d.M");
  

   
    {
    
    
          //try 
          //{
    
		            require_once "DBConnect.php";
		
		              $query="INSERT INTO newscomment(USERNAME, newscomment, DATE, USERIMAGE, postID) VALUES('".$username."','".$comment2."','".$dt."','".$imageprofile."','".$postID2."') ";
		
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
        
        
        
          //}
          //catch(PDOException $e)
          //{
           //   redirect("../Post.php?postError=true");
          //}
        
        
    }
	
  
?>