<?php
	//require_once("DB.php");
	//require_once("http.php");
?>

<div id="passRecov" class="wrapper">
	<?php
		if(isset($_REQUEST["passRecov"])){
		 	session_start();
		 	if($_REQUEST["passRecov"]==4){
				echo "Mail password";
				mail(getEmail($_SESSION["pass_recov_user"]),"Password","Your Password: ".getPassword($_SESSION["pass_recov_user"]));
			}else if($_REQUEST["passRecov"]==5){
			 	//if(!isset($_REQUEST["ans"])){
					$secQues=getSequrityQuestion($_SESSION["pass_recov_user"]);
					if(isset($secQues["SECURITY_QUESTION"]) && isset($secQues["ANSWER"])){
	?>
							<form method="post" action="">
								<table>
									<tr>
										<td style="color: red;">
											<?php
												if(isset($_REQUEST["ansError"])){
													echo "Incorrect Answer";
												}
											?>
										</td>
									</tr>
									<tr><td></label>Security Question:</label></td></tr>
									<tr><td><input type="text" name="secQues" value="<?php echo $secQues['SECURITY_QUESTION']; ?>" disabled="true" /></td></tr>
									<tr><td></label>Answer:</label></td></tr>
									<tr><td><input type="text" name="ans" /></td></tr>
									<tr>
										<td align="right">
											<input type="hidden" name="dbAns" value="<?php echo $secQues['ANSWER']; ?>" />
											<input type="hidden" name="passRecov" value="<?php echo $_REQUEST['passRecov']; ?>" />
											<input type="submit" value="Submit" />
										</td>
									</tr>
								</table>
							</form>
	<?php
					}
				//}//else if($_REQUEST["ans"]==$_REQUEST["dbAns"]){
					//redirect("new_pass.php");
				//}else{
					//redirect("pass_recov3.php?passRecov=5&ansError=true");
				//}
			}
	?>
	
	<?php } ?>
</div>