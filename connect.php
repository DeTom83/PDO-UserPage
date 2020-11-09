<?php
	require_once "config.php";
	
	if($QUERY_METHOD=="PDO"){
		//Conncetion to DB with PDO
		try{
			$connection = new PDO("$DB_CONNECTION:host=$DB_HOST;dbname=$DB_DATABASE","$DB_USERNAME","$DB_PASSWORD");
			/*if ($connection){
				echo "I connected the ".$DB_DATABASE." database!<BR><BR>";
			}*/
		}
		catch(PDOException $e){
				echo "Failed to connect to database: <BR>";
				echo $e->getMessage();
				die();
		}
		//Optional Close the connection
		//$connection = NULL;
	}

//----------------------------------------------------------------------------------------------------------------	
	if($QUERY_METHOD=="MySQLi"){
		//Conncetion to DB with mysqli
		
		$mysqli = new mysqli($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);
		if ($mysqli->connect_errno) {
			echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
			die();
		}
		else {
			//echo "I connected the ".$DB_DATABASE." database!<BR>";
		}
		//echo $mysqli->host_info . "\n";
		
		/*
		// Try to get data in DB and handle the error action
		$query = "SELECT * FROM  $DB_TABLE";
		$res = $mysqli->query($query);
		//error_reporting(0);
		if ($mysqli->error) {
			try {   
				throw new Exception("MySQL error $mysqli->error <br> Query:<br> $query", $msqli->errno);   
			} 
			catch(Exception $e ) {
				echo "Error No: ".$e->getCode(). " - ". $e->getMessage() . "<br >";
				echo nl2br($e->getTraceAsString());
			}	
		}*/
		
		//Optional Close the connection
		//mysqli_close($mysqli);
	}

	
	
?>