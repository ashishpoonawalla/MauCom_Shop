<?php
include('../dbconfig.php');


session_start();
$query="select c.productid, c.productName, c.categoryID, c.show_homepage from zz".$_SESSION["mobile"]."products c order by c.productName";
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
