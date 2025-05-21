<?php

require_once('config.php');



try {
	$sql = "select * from events";
	
	$stmt = $con->prepare($sql);
	$stmt->execute();
	$events = $stmt->fetchAll(PDO::FETCH_OBJ);
	
	$dbh = null;
	
	$json_result = json_encode($events);
    echo $json_result;
	  
} catch(PDOException $e) {
	echo '{"error":{"text":'. $e->getMessage() .'}}'; 
}