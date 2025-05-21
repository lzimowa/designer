<?php

error_reporting(E_ALL ^ E_NOTICE);

/*=========== Database Configuraiton ==========*/

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'designer';

try {
	$con = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_user, $db_pass);
}catch(PDOException $exception){ //to handle connection error
	echo "Connection error: " . $exception->getMessage();
}