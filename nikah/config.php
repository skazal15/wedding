<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
 
$db_username = 'skazal';
$db_password = 'saidf223';
$db_name = 'nikahsaid';
$db_host = 'localhost';				
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);
 
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
?>