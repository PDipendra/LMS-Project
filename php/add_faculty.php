<?php
include "db_connect.php";
if(isset($_POST['insert']))
{

    // get values form input text and number
    $faculty_name = $_POST['faculty_name'];
    
    // mysql query to insert data

    $pdoQuery = "INSERT INTO `faculty`(`faculty_name`) VALUES (:faculty_name)";
    
    $pdoResult = $conn->prepare($pdoQuery);
    
    $pdoExec = $pdoResult->execute(array(":faculty_name"=>$faculty_name));
    
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
