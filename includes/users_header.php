<tr>
	<?php
		echo "<th align='right'>No.</th>";
		$fieldsCnt=mysqli_num_fields($results);
		$fields=array();
		for($i=0;$i<$fieldsCnt;$i++){
			echo "<th>".($fields[$i]=mysqli_field_name($results,$i))."</th>";
		}
		
		if(isset($_REQUEST["submit"]) && $_REQUEST["submit"]=="Edit")
		 echo "<th>Update</th>";
		else
		 echo "<th>Edit</th>";
		echo "<th>Delete</th>";
	?>
</tr>