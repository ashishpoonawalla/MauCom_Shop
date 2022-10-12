<?php
	require_once "http.php";
	require_once "validator.php";
	
	if(checkLogin()){
		$username=$_REQUEST["username"];
		$password=$_REQUEST["password"];
		
	require_once "DBConnect.php";
		
		$query="SELECT * FROM user1 WHERE username='".$username."' AND password='".$password."'";
		$result=mysqli_query($db, $query) ;
		$row=mysqli_fetch_assoc($result);
		
		if(!isset($row["name"]) || $row["name"]==null){
			$_REQUEST["loginError"]="Invalid Login!";
			redirect("../index.php?loginError=true");
		}else{
			session_start();
			$_SESSION["user"]=$username;
      $_SESSION["pass"]=$password;
      $_SESSION["name1"]=$row["name"];
      $_SESSION["image1"]=$row["profileimage"];
      $shopname1 = $row["shopname"];
      //$_SESSION["city1"]=$row["city"];
      
     
			echo "Correct Login";
      
      $mob = $row["mobileno"];
      $_SESSION["mobile"]=$row["mobileno"];
      $_SESSION["mobile1"]=$row["mobileno"];
      
        if ($mob == null || $mob == "")
        {
             $_SESSION["mobile"]="";
             redirect("../signshop.php");
        }
        else
        {
            //$_SESSION["mobile"]=$row["mobileno"];
            
            
            
            $shopname1 = $row["shopname"];
            
            if ($shopname1 == null || $shopname1 == "")
            {
                 $_SESSION["shopname"]="";
                 redirect("../shopprofile.php");
            }
            else
            {
                $_SESSION["shopname"]=$shopname1;
                redirect("../userstore/shopadmin.php");
            }
            
        }
        
     
			
		}
	}else{
		redirect("../index.php?loginError=true");
	}
?>