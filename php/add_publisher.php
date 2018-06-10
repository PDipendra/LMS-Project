<?php
include "db_connect.php";
if(isset($_POST['insert']))
{

    // get values form input text and number
    $publisher_name = $_POST['publisher_name'];
    
    // mysql query to insert data

    $pdoQuery = "INSERT INTO `publisher`(`publisher_name`) VALUES (:publisher_name)";
    
    $pdoResult = $conn->prepare($pdoQuery);
    
    $pdoExec = $pdoResult->execute(array(":publisher_name"=>$publisher_name));
    
        // check if mysql insert query successful
    if($pdoExec)
    {
        //echo 'Data Inserted';
        echo '<script>alert("Data Inserted");</script>';
    }else{
        echo 'Data Not Inserted';
    }
}


?>
