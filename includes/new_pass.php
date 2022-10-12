<?php
	//require_once("DB.php");
	//require_once("http.php");
	
	/*
	if(isset($_REQUEST["newPass"]) || isset($_REQUEST["rePass"])){
		if(!isset($_REQUEST["newPass"]) || $_REQUEST["newPass"]==null || $_REQUEST["newPass"]==""){
			redirect("new_pass.php?passError=true");
		}else if(!isset($_REQUEST["rePass"]) || $_REQUEST["rePass"]==null || $_REQUEST["rePass"]==""){
			redirect("new_pass.php?passError=true");
		}else if($_REQUEST["newPass"]!=$_REQUEST["rePass"]){
			redirect("new_pass.php?passError=true");
		}else{
		 	session_start();
			if(setNewPassword($_SESSION["pass_recov_user"],$_REQUEST["newPass"]))
			 echo "New Password set successfully.";
		}
	}
	*/
?>

<div id="passRecov" class="wrapper">
	<form method="post" action="">
		<table>
			<thead>
				<tr></th><label>Set New Password:</label></th></tr>
				<tr>
					<td style="color: red;">
						<?php
							if(isset($_REQUEST["passError"])){
								echo "Passwords not match!";
							}
						?>
					</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><label id="newPassLbl" for="newPass">New Password:</label></td>
					<td><input type="password" name="newPass" /></td>
				</tr>
				<tr>
					<td><label id="rePassLbl" for="rePass">Retype Password:</label></td>
					<td><input type="password" name="rePass" /></td>
				</tr>
				<tr>
					<td colspan="2" align="right">
						<input type="button" id="backBtn" name="backBtn" value="Back" onclick="javascript:history.back();" />
						<input type="submit" value="Submit" />
					</td>
				</tr>
			</tbody>
		</table>
	</form>
</div>