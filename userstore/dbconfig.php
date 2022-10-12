<?php 
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$DB_NAME = 'maucomshop';
$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

//define('DB_SERVER', 'localhost');
//('DB_USERNAME', 'root');
//define('DB_PASSWORD', '');
//define('DB_DATABASE', 'imagetest');
$db = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);
?>
