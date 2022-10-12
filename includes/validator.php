<!-- /* Server side validator */ -->
<?php
	function isEmpty($var){
		if(!isset($var) || $var==null || $var==""){
			return true;
		}
		return false;
	}
	
	function checkLogin(){
		if(isEmpty($_REQUEST["username"]) || isEmpty($_REQUEST["password"])){
			return false;
		}
		return true;
	}
	
	function checkRegister(){
		if(isEmpty($_REQUEST["username"]) || 
		   isEmpty($_REQUEST["password"]) || 
		   isEmpty($_REQUEST["firstname"]) || 
		   isEmpty($_REQUEST["lastname"]) || 
		   isEmpty($_REQUEST["email"]) || 
		   isEmpty($_REQUEST["mobile"]) || 
		   isEmpty($_REQUEST["ans"]) ||
		   isEmpty($_REQUEST["tnc"]) ){
			return false;
		}
		
		if(isEmpty($_REQUEST["carrier"]) || $_REQUEST["carrier"]==-1){
			return false;
		}else if($_REQUEST["carrier"]=="0" && isEmpty($_REQUEST["otherCarrier"])){
			return false;
		}
		
		if(isEmpty($_REQUEST["secQues"]) || $_REQUEST["secQues"]==-1){
			return false;
		}else if($_REQUEST["secQues"]=="0" && isEmpty($_REQUEST["otherSecQues"])){
			return false;
		}
		
		return true;
	}
	
	function checkUsersTable(){
		if(isEmpty($_REQUEST["USERNAME"]) || 
		   isEmpty($_REQUEST["PASSWORD"]) || 
		   isEmpty($_REQUEST["FIRSTNAME"]) || 
		   isEmpty($_REQUEST["LASTNAME"]) || 
		   isEmpty($_REQUEST["EMAIL"]) || 
		   isEmpty($_REQUEST["MOBILE"]) || 
		   isEmpty($_REQUEST["ANSWER"]) ){
			return false;
		}
		
		if(isEmpty($_REQUEST["CARRIER"]) || $_REQUEST["CARRIER"]==-1){
			return false;
		}else if($_REQUEST["CARRIER"]=="0" && isEmpty($_REQUEST["OTHER_CARRIER"])){
			return false;
		}
		
		if(isEmpty($_REQUEST["SECURITY_QUESTION"]) || $_REQUEST["SECURITY_QUESTION"]==-1){
			return false;
		}else if($_REQUEST["SECURITY_QUESTION"]=="0" && isEmpty($_REQUEST["NEW_SEC_QUES"])){
			return false;
		}
		
		return true;
	}
?>