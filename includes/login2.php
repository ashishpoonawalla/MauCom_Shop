<div id="login" class="wrapper">
	<form id="loginForm" name="loginForm" method="post" action="./includes/login_check.php" onsubmit="return checkLoginForm();">
		<table>
			<thead>
				<tr>
					<th align="left"><label for="username">Login</label></th>
					<th align="left" style="color: red;">
						<label id="error">
							<?php
								if(isset($_REQUEST["loginError"])){
									echo "Invalid Login!";
									unset($_REQUEST["loginError"]);
								}
							?>
						</label>
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td id="user"><label name="usernameLbl" id="usernameLbl" for="username">*Username:</label>&nbsp;</td>
					<td><input type="text" id="username" name="username" onkeypress="unsetLoginError(false);" /></td>
				</tr>
				<tr>
					<td id="pass"><label id="passwordLbl" for="password">*Password:</label></td>
					<td><input type="password" id="password" name="password" onkeypress="unsetLoginError(false);" /></td>
				</tr>
				<tr>
					<td><a href="includes/register.php" style="color: #164d9b;">click to register</a></td>
					<td align="right"><input type="submit" value="Login" />&nbsp;&nbsp;<input type="reset" onclick="unsetLoginError(true);" /></td>
				</tr>
				<tr><td></td></tr>
				<tr>
					<!-- td colspan="2" align="">forgot password ?<a href="pass_recov.php"> click here</a></td -->
					<td colspan="2" align="center"><a href="./includes/pass_recov.php">I can&rsquo;t access my account</a></td>
				</tr>
			</tbody>
		</table>
	</form>
</div>