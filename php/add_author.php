<?php
include "db_connect.php";
if(isset($_POST['insert']))
{

    // get values form input text and number
    $author_name = $_POST['author_name'];
    
    // mysql query to insert data

    $pdoQuery = "INSERT INTO `author`(`author_name`) VALUES (:author_name)";
    
    $pdoResult = $conn->prepare($pdoQuery);
    
    $pdoExec = $pdoResult->execute(array(":author_name"=>$author_name));
    
        // check if mysql insert query successful
    if($pdoExec)
    {
        echo '<script>alert("Data Inserted");</script>';
    }else{
        echo 'Data Not Inserted';
    }
}


?>
