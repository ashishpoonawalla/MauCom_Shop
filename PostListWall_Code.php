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
      $_SESSION["name1"]=$row["name"];
      $_SESSION["image1"]=$row["profileimage"];
         
			echo "Correct Login";
			redirect("../post.php");
		}
	}else{
		redirect("../index.php?loginError=true");
	}
?>