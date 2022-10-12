<?php
	require_once("DB.php");
	require_once("Validator.php");
	
	$results=getAllUserDetails();
?>
<div>
	<table border="1">
		<thead>
			<?php include("users_header.php"); ?>
		</thead>
		<tbody>
			<?php
				if(isset($_REQUEST["submit"])){
					if($_REQUEST["submit"]=="Update"){
						if(checkUsersTable()){
							$carrier=($_REQUEST["CARRIER"]=="0") ? $_REQUEST["OTHER_CARRIER"] : $_REQUEST["CARRIER"];
		 					$secQues=($_REQUEST["SECURITY_QUESTION"]=="0") ? $_REQUEST["NEW_SEC_QUES"] : $_REQUEST["SECURITY_QUESTION"];
		 					
		 					if(updateUser($_REQUEST["userId"],$_REQUEST["USERNAME"],$_REQUEST["PASSWORD"],$_REQUEST["FIRSTNAME"],$_REQUEST["LASTNAME"],$_REQUEST["EMAIL"],$_REQUEST["MOBILE"],$carrier,$secQues,$_REQUEST["ANSWER"])) $results=getAllUserDetails();
						}
					}else if($_REQUEST["submit"]=="Delete"){
						echo "USER_ID: ".$_REQUEST["userId"];
						if(deleteUser($_REQUEST["userId"])) $results=getAllUserDetails();
					}
				}
				
				include("users_table.php");
			?>
		</tbody>
	</table>
	
</div>



<?php
	/*
		while($row=mysqli_fetch_assoc($results)){
 			echo "<tr>";
 			foreach($row as $val){
				echo "<td>".$val."</td>";
			}
			echo "</tr>";
		}
	*/
?>