<?php
include('../dbconfig.php');


session_start();
$query="select c.orderid, c.fname, c.ccity, c.mobile1, c.total, c.dateoforder from zz".$_SESSION["mobile"]."order c where status1 ='Order Completed' order by c.orderid desc ";
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

$arr = array();
if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$arr[] = $row;	
	}
}
# JSON-encode the response
$json_response = json_encode($arr);

// # Return the response
echo $json_response;
?>
