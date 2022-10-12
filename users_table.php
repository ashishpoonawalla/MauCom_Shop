<?php
	$reqUserId=isset($_REQUEST["userId"]) ? $_REQUEST["userId"] : -1;
	
	$submitBtnVal="Edit";
	if(isset($_REQUEST["submit"]) && $_REQUEST["submit"]=="Edit") $submitBtnVal="Update";
	
	$count=0;
	$userId=0;
	$udpateBtnFlag=false;
	while($row=mysqli_fetch_array($results,mysqli_NUM)){
		echo "<tr>";
		echo "<td align='right' style='cursor: hand;' >".(++$count)."</td>";
		echo "<form id='usersForm' name='usersForm' method='post' action=''>";
		for($i=0;$i<count($row);$i++){
		 	$udpateBtnFlag=false;
		 	if($i==0) $userId=$row[$i];
			if($i>0 && $submitBtnVal=="Update" && $reqUserId==$userId){
				echo "<td>";
				if($fields[$i]=="CARRIER"){
				 	echo "<span id='carrierText' style='display: none;'>";
				 	echo "<input type='text' id='OTHER_CARRIER' name='OTHER_CARRIER' value='".$row[$i]."' />";
				 	echo "<label style='color: red; cursor: hand;' onclick='switchToCarrierChoice();'>X</label>";
				 	echo "</span>";
					echo "<span id='carrierChoice' style='display: inline;'>";
					echo "<select id='CARRIER' name='".$fields[$i]."' onchange=' if(this.options.value==0) switchToCarrierText();'>";
					include("carrierTool.php");
					echo "<option value='".$row[$i]."' selected='true'>".$row[$i]."</option>";
					echo "</select>";
					echo "</span>";
				}else if($fields[$i]=="SECURITY_QUESTION"){
				 	echo "<span id='secQuesText' style='display: none;'>";
				 	echo "<input type='text' id='NEW_SEC_QUES' name='NEW_SEC_QUES' value='".$row[$i]."' />";
				 	echo "<label style='color: red; cursor: hand;' onclick='switchToSecQuesChoice();'>X</label>";
				 	echo "</span>";
					echo "<span id='secQuesChoice' style='display: inline;'>";
					echo "<select id='SECURITY_QUESTION' name='".$fields[$i]."' onchange='if(this.options.value==0) switchToSecQuesText();'>";
					include("secQuesTool.php");
					echo "<option value='".$row[$i]."' selected='true'>".$row[$i]."</option>";
					echo "</select>";
					echo "</span>";
				}else{
					echo "<input type='text' id='".$fields[$i]."' name='".$fields[$i]."' value='".$row[$i]."' />";
				}
				echo "</td>";
				if($i==count($row)-1){
					$udpateBtnFlag=true;
					echo "<td>";
					echo "<input type='hidden' name='userId' value=$userId />";
					echo "<input type='submit' name='submit' value='Update' />";
					echo "</td>";
				}
			}else{ echo "<td>".$row[$i]."</td>"; }
			if($i==count($row)-1){
				if(!$udpateBtnFlag){
					echo "<td>";
					echo "<input type='hidden' name='userId' value=$userId />";
					echo "<input type='submit' name='submit' value='Edit' />";
					echo "</td>";
				}
				
				echo "<td>";
				echo "<input type='hidden' name='userId' value=$userId />";
				echo "<input type='submit' name='submit' value='Delete' />";
				echo "</td>";
			}
		}
		echo "</form>";
		echo "</tr>";
	}
?>