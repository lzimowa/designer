<?php

require_once('config.php');


$sql = "INSERT INTO events (name, address, contact, purchase, payment, ticket ) 
	  VALUES (:name, :address,:contact, :purchase,:payment, :ticket)";

try {
	

	if(isset($_POST['name']) && isset($_POST['address']) && isset($_POST['contact']) && isset($_POST['purchase']) && isset($_POST['payment']) && isset($_POST['ticket']) ){
		
	$stmt = $con->prepare($sql); 
	$stmt->bindParam("name", $_POST['name']);
	$stmt->bindParam("address", $_POST['address']);
	$stmt->bindParam("contact", $_POST['contact']);
	$stmt->bindParam("purchase", $_POST['purchase']);
	$stmt->bindParam("payment", $_POST['payment']);
	$stmt->bindParam("ticket", $_POST['ticket']);
	
	$stmt->execute();
	$dbh = null;	
	echo 'inserted';
	}
	
	
	else {
		echo 'not inserted';
	}

	
} catch(PDOException $e) {
	echo '{"error":{"text":'. $e->getMessage() .'}}'; 
}