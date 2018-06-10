<?php
include "db_connect.php";
if(isset($_POST['insert']))
{

    // get values form input text and number
    $batch_no = $_POST['batch_no'];
    
    // mysql query to insert data

    $pdoQuery = "INSERT INTO `batch`(`batch_no`) VALUES (:batch_no)";
    
    $pdoResult = $conn->prepare($pdoQuery);
    
    $pdoExec = $pdoResult->execute(array(":batch_no"=>$batch_no));
    
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
