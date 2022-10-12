<?php
	require_once("DB.php");
	require_once("http.php");
	
	if(!isset($_REQUEST["user"]) && !isset($_REQUEST["passRecov"]) && !isset($_REQUEST["newPass"]))
	{
		include("pass_recov_main.php");
	}
	else if(isset($_REQUEST["user"]))
	{
	 	$userId=isValidUser($_REQUEST["user"]);
	 	if($userId==null || $userId=="")
		{
	 	 	$_REQUEST["userError"]=true;
			include("pass_recov_main.php");
		}else{
		 	$_REQUEST["userId"]=$userId;
			include("pass_recov2.php");
		}
	}else if(isset($_REQUEST["passRecov"]))
	{
	 	if(isset($_REQUEST["ans"])){
	 		if($_REQUEST["ans"]==$_REQUEST["dbAns"])
			{
				include("new_pass.php");
			}else{
				$_REQUEST["ansError"]=true;
				include("pass_recov3.php");
			}
		}
		else
		{
			include("pass_recov3.php");
		}
	}
	else if(isset($_REQUEST["newPass"]))
	{
	 	if( ($_REQUEST["newPass"]==null || $_REQUEST["newPass"]=="") || ($_REQUEST["rePass"]==null || $_REQUEST["rePass"]=="") || ($_REQUEST["newPass"]!=$_REQUEST["rePass"]) ){
			$_REQUEST["passError"]=true;
		}else if($_REQUEST["newPass"]==$_REQUEST["rePass"]){
			session_start();
			if(setNewPassword($_SESSION["pass_recov_user"],$_REQUEST["newPass"]))
			 echo "New Password set successfully.";
		}
		include("new_pass.php");
	}
?>