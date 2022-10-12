<?php
	//require_once("../includes/DB.php");
	//require_once("http.php");
	
	$userId=null;
	if(!isset($_REQUEST["user"]) || ($userId=isValidUser($_REQUEST["user"]))==null || $userId==""){
		redirect("pass_recov_main.php?userError=1");
	}
	
	session_start();
	$_SESSION["pass_recov_user"]=$userId; //$_REQUEST["user"];
?>

<div id="passRecov" class="wrapper">
	<form method="post" action="">
		<table>
			<thead>
				<tr>
					<th align="left"><label>Having trouble with Login ?</label></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<input type="radio" id="passProblem" name="passRecov" value="4" checked />
						<label id="passProblemLbl" for="passProblem">Send my password to my email</label>
					</td>
				</tr>
				<tr>
					<td>
						<input type="radio" id="ansSecQues" name="passRecov" value="5" />
						<label id="ansSecQuesLbl" for="ansSecQues">Answer security question</label>
					</td>
				</tr>
				<tr>
					<td colspan="1" align="right">
						<input type="button" id="backBtn" name="backBtn" value="Back" onclick="javascript:history.back();" />
						<input type="submit" name="next2" value="Next" />
					</td>
				</tr>
			</tbody>
		</table>
	</form>
<div>