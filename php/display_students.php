 <?php
include "db_connect.php";

	$student_id = '';
	$name = '';
	$address = '';
	$roll = '';
	$contact = '';
	$faculty = '';
	$gender = '';
	$email = '';
	$batch = '';
	$image_location = '';

    if(isset($_POST['search'])){

    $student_id = $_POST['student_id'];
    
    $sql = "SELECT * FROM students where student_id=:student_id";
    
    $pdoResult = $conn->prepare($sql);
    
    //set your id to the query id
    $pdoExec = $pdoResult->execute(array(":student_id"=>$student_id));
    
    if($pdoExec)
    {
        if($pdoResult->rowCount()>0)
        {
            foreach($pdoResult as $row)
            {
                $student_id = $row['student_id'];
                $name = $row['name'];
                $address = $row['address'];
                $roll = $row['roll'];
                $contact = $row['contact'];
                $faculty = $row['faculty'];
                $gender = $row['gender'];
                $email = $row['email'];
                $batch = $row['batch'];
                $image_location = $row['image_location'];
            }
        }
        else{
        	echo "<script>alert('Record not availabe!!!')</script>";
        }
		$conn = null;
	}}
?>
