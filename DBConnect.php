<!-- Database Handler -->

<?php

  
define('DB_SERVER', 'localhost:3306');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'maucomshop');

$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);


  //mysqli_connect("mysql6.000webhost.com","a2393919_connect","Abcdefgh001") or die("error in connection!");
	//                  mysqli_select_db("a2393919_maucom");

  $db1 =  mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD) or die("error in connection!");
	mysqli_select_db($db1, DB_DATABASE);
	
?>