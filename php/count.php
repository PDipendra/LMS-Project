<?php
	include "db_connect.php";
	$sql= "SELECT * FROM students";
	$pdoResult=$conn->query($sql);
	$pdoRowStudent =$pdoResult->rowCount();
?>
<?php
include "db_connect.php";
	$sql= "SELECT * FROM books";
	$pdoResult=$conn->query($sql);
	$pdoRowBook =$pdoResult->rowCount();
?>