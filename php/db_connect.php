<?php
	$dsn = 'mysql:host=localhost;dbname=library';
	$username = 'root';
	$password = '';

		try{
		    // Connect To MySQL Database
		    $conn = new PDO($dsn,$username,$password);
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    
		} 
		catch (Exception $ex) {
		    
		    echo 'Not Connected '.$ex->getMessage();
		    
		} 
 ?>