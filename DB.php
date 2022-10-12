<!-- Database Handler -->

<?php
	require_once "DBConnect.php";
	
	function isValidUser($user){
		if($user==null || $user=="") return false;
		
		$query="SELECT USER_ID FROM USER WHERE USERNAME='".$user."' OR EMAIL='".$user."'";
		$result=mysqli_query($db, $query) ;
		$row=mysqli_fetch_assoc($result);
		return $row["USER_ID"];
	}
	
	function getEmail($userId){
		$query="SELECT EMAIL FROM USER WHERE USER_ID=".$userId;
		$result=mysqli_query($db, $query) ;
		$row=mysqli_fetch_assoc($result);
		return $row["EMAIL"];
	}
	
	function getPassword($userId){
		$query="SELECT PASSWORD FROM USER WHERE USER_ID=".$userId;
		$result=mysqli_query($db, $query) ;
		$row=mysqli_fetch_assoc($result);
		return $row["PASSWORD"];
	}
	
	function getSequrityQuestion($userId){
		$query="SELECT SECURITY_QUESTION, ANSWER FROM USER WHERE USER_ID=".$userId;
		$result=mysqli_query($db, $query) ;
		$row=mysqli_fetch_assoc($result);
		return $row;
	}
	
	function setNewPassword($userId,$pass){
		$query="UPDATE USER SET PASSWORD='".$pass."' WHERE USER_ID=".$userId;
		$result=mysqli_query($db, $query) ;
		return $result==1;
	}
	
	function getAllUserDetails(){
		//$query="SELECT USERNAME, PASSWORD, FIRSTNAME, LASTNAME, EMAIL, MOBILE FROM USER ORDER BY USER_ID";
		$query="SELECT * FROM USER ORDER BY USER_ID";
		$results=mysqli_query($db, $query) ;
		//$row=mysqli_fetch_assoc($result);
		return $results;
	}
	
	function updateUser($userId,$userName,$password,$firstName,$lastName,$email,$mobile,$carrier,$secQues,$ans){
		$query="UPDATE USER SET USERNAME='".$userName."', PASSWORD='".$password."', FIRSTNAME='".$firstName."', LASTNAME='".$lastName."', EMAIL='".$email."', MOBILE='".$mobile."', CARRIER='".strtoupper($carrier)."', SECURITY_QUESTION='".$secQues."', ANSWER='".$ans."' WHERE USER_ID=".$userId;
		$result=mysqli_query($db, $query) ;
		return $result==1;
	}
	
	function deleteUser($userId){
		$query="DELETE FROM USER WHERE USER_ID=".$userId;
		$result=mysqli_query($db, $query) ;
		return $result==1;
	}
?>