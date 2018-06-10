<?php
include "db_connect.php";
if(isset($_POST['insert']))
{

    // get values form input text and number
    $book_type = $_POST['book_type'];
    
    // mysql query to insert data

    $pdoQuery = "INSERT INTO `book_type`(`book_type`) VALUES (:book_type)";
    
    $pdoResult = $conn->prepare($pdoQuery);
    
    $pdoExec = $pdoResult->execute(array(":book_type"=>$book_type));
    
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
