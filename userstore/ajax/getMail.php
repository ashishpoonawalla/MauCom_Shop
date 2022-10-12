<?php
include('../dbconfig.php');



session_start();
$query="select c.mailid, c.smail, c.sname, c.smessage, c.sdate, c.sstatus  from zz".$_SESSION["mobile"]."mail c order by c.mailid desc";
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
