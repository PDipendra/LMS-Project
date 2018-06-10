<?php
include "db_connect.php";
if(isset($_POST['insert']))
{

    // get values form input text and number
    $category_name = $_POST['category_name'];
    
    // mysql query to insert data

    $pdoQuery = "INSERT INTO `category`(`category_name`) VALUES (:category_name)";
    
    $pdoResult = $conn->prepare($pdoQuery);
    
    $pdoExec = $pdoResult->execute(array(":category_name"=>$category_name));
    
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
