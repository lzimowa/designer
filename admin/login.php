<?php

session_start();

require_once('config.php');

$sql = "SELECT * FROM users WHERE username=:username AND password=SHA1(:password)";

try {
	$stmt = $con->prepare($sql); 
	$stmt->bindParam("username", $_POST['username']);
	$stmt->bindParam("password", $_POST['password']);
	$stmt->execute();
	$login = $stmt->fetchObject(); 
	$dbh = null;
	if($stmt->rowCount() > 0){
		
    $_SESSION["loggedIn"] = $login->id; // create session id
	$_SESSION["firstName"] = $login->name; // create session name
			
	echo 'found';
	}
	else{
		echo 'nothing';
	}
} catch(PDOException $e) {
	echo '{"error":{"text":'. $e->getMessage() .'}}'; 
}