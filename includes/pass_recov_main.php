<div id="passRecov" class="wrapper">
	<form method="post" action="">
		<table>
			<thead>
				<tr>
					<th align="left"><label>Having trouble with Login ?</label></th>
				</tr>
				<tr>
					<th align="left" style="color: red">
						<?php 
							if(isset($_REQUEST["userError"])){
								echo "No such Username or Email exists.";
								unset($_REQUEST["userError"]);
							}
						?>
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><label id="userLbl" for="user">Enter Username or Email:</label></td>
				</tr>
				<tr>
					<td>
						<input type="text" id="user" name="user" style="width: 100%;" />
					</td>
				</tr>
				<tr>
					<td align="right">
						<input type="submit" name="next1" value="Next" />
					</td>
				</tr>
			</tbody>
		</table>
	</form>
</div>