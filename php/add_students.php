<?php 
    require_once ('php/db_connect.php'); 
    if (isset($_POST['insert'])) {
    // echo "";
    // }else{
    // $file=$_FILES['image']['tmp_name'];
    // $image = $_FILES["image"] ["name"];
    // $image_name= addslashes($_FILES['image']['name']);
    // $size = $_FILES["image"] ["size"];
    // $error = $_FILES["image"] ["error"];
    // 
    // if ($error > 0){
    // die("Error uploading file! Code $error.");
    // }else{
    // 	if($size > 10000000) //conditions for the file
    // 	{
    // 	die("Format is not allowed or file size is too big!");
    // 	}
    // 	
    // else
    // 	{
    move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/" . $_FILES["image"]["name"]);			
    $location = $_FILES["image"]["name"];
    //$image_location = $_POST['image_location'];
    $student_id = $_POST['student_id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $roll = $_POST['roll'];
    $contact = $_POST['contact'];
    $faculty = $_POST['faculty'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $batch = $_POST['batch'];
     
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO students (student_id,name,address,roll,contact,faculty,gender,email,batch,image_location)
    VALUES ('$student_id','$name','$address','$roll','$contact','".$faculty."','".$gender."','$email','".$batch."','$location')";
     
    $conn->exec($sql);
    echo "<script>alert('Successfully Added!!!');</script>";
    // }
    }
    // }
    ?>
