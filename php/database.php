<!-- ------------------------------------------------------------------------------------------- -->
<!--------------- Code for database creation for Library Management System ------------------------>
<!-- ------------------------------------------------------------------------------------------- -->

<?php
if(isset($_POST['insert']))
{
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    /* -----------------------------Create Database Library if not Create------------------------ */

    $sql = "CREATE DATABASE IF NOT EXISTS Library";
    $conn->exec($sql);
    echo "Database created successfully<br>";
    $sql = "USE Library";
    $conn->exec($sql);

    /* ----------------------------Create Table Category if not Create---------------------------- */

    $table_category = "CREATE TABLE IF NOT EXISTS Category(
	category_id int NOT NULL AUTO_INCREMENT,
	category_name varchar(255) NOT NULL,
	PRIMARY KEY(category_id)
	)";

    /* ---------------------------Create Table Book_type if not Create---------------------------- */

    $table_Book_type = "CREATE TABLE IF NOT EXISTS Book_Type(
    book_type_id int NOT NULL AUTO_INCREMENT,
    book_type varchar(255) NOT NULL,
    PRIMARY KEY(book_type_id)
    )";

    /*----------------------------- Create Table Author if not Create------------------------------ */

    $table_Author = "CREATE TABLE IF NOT EXISTS Author(
    author_id int NOT NULL AUTO_INCREMENT,
    author_name varchar(255) NOT NULL,
    PRIMARY KEY(author_id)
    )";

    /*----------------------------------- Create Table Publisher if not Create--------------------- */

    $table_Publisher = "CREATE TABLE IF NOT EXISTS Publisher(
    publisher_id int NOT NULL AUTO_INCREMENT,
    publisher_name varchar(255) NOT NULL,
    PRIMARY KEY(publisher_id)
    )";

    /*----------------------- Create Table Books if not Create------------------------------------- */

    $table_Books = "CREATE TABLE IF NOT EXISTS Books(
    isbn int NOT NULL AUTO_INCREMENT,
    book_name varchar(255) NOT NULL,
    category varchar(255) NOT NULL,
    author varchar(255) NOT NULL,
    edition int NOT NULL,
    type varchar(255) NOT NULL,
    publisher varchar(255) NOT NULL,
    quantity int NOT NULL,
    price int NOT NULL,
    PRIMARY KEY(isbn)
    )";

    /*----------------------------------------------------------------------------------------------*/
    /* Table for the student module */
    /* ---------------------Create Table Faculty if not Create------------------------------------- */

    $table_Faculty = "CREATE TABLE IF NOT EXISTS Faculty(
    faculty_id int NOT NULL AUTO_INCREMENT,
    faculty_name varchar(255) NOT NULL,
    PRIMARY KEY(faculty_id)
    )";

    /* -----------------------Create Table Batch if not Create------------------------------------- */

    $table_Batch = "CREATE TABLE IF NOT EXISTS Batch(
    batch_id int NOT NULL AUTO_INCREMENT,
    batch_no int NOT NULL,
    PRIMARY KEY(batch_id)
    )";
    
    /* ------------------------Create Table student if not Create---------------------------------- */

    $table_Students = "CREATE TABLE IF NOT EXISTS Students(
    student_id int NOT NULL,
    name varchar(255) NOT NULL,
    address varchar(255) NOT NULL,
    roll varchar(255) NOT NULL,
    contact bigint NOT NULL,
    faculty varchar(255) NOT NULL,
    gender varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    batch int NOT NULL,
    image_location varchar(255) NOT NULL,
    PRIMARY KEY(student_id)
    )";

    /*-----------------------------End of student module----------------------------------------------*/
    /*------------------------------------------------------------------------------------------------*/
    /*-----------------------Create table transaction if not create-----------------------------------*/

    $table_Transaction = "CREATE TABLE IF NOT EXISTS Transaction(
    transaction_id int NOT NULL,
    student_id int NOT NULL,
    book_id int NOT NULL,
    issue_time date,
    return_time date,
    PRIMARY KEY(transaction_id)
    )";

    /*------------------------------------End of transaction module-----------------------------------*/
    /*------------------------------------------------------------------------------------------------*/
    /*-------------------------------create table setting if not create-------------------------------*/

    $table_setting = "CREATE TABLE IF NOT EXISTS Setting(
    setup_id int NOT NULL AUTO_INCREMENT,
    institute_name varchar(255) NOT NULL,
    image varchar(255) NOT NULL,
    max_book int NOT NULL,
    background_color varchar(255) NOT NULL,
    font_color varchar(255) NOT NULL,
    fine_after_day int NOT NULL,
    fine_per_week int NOT NULL,
    username varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    PRIMARY KEY(setup_id) 
    )";

    /*--------------------------------end of transaction module------------------------------------------*/
    /*===================================================================================================*/

    	$conn->exec($table_category);
        $conn->exec($table_Book_type);
        $conn->exec($table_Author);
        $conn->exec($table_Publisher);
        $conn->exec($table_Shelf);
        $conn->exec($table_Books);
        $conn->exec($table_Faculty);
        $conn->exec($table_Batch);
        $conn->exec($table_Students);
        $conn->exec($table_setting);
        	}
    	catch(PDOException $e)
        {
        	echo $sql . "<br>" . $e->getMessage();
            echo $table_category . "<br>" . $e->getMessage();
            echo $table_Book_type . "<br>" . $e->getMessage();
            echo $table_Author . "<br>" . $e->getMessage();
            echo $table_Publisher . "<br>" . $e->getMessage();
            echo $table_Transaction . "<br>" . $e->getMessage();
            echo $table_Books . "<br>" . $e->getMessage();
            echo $table_Faculty . "<br>" . $e->getMessage();
            echo $table_Batch . "<br>" . $e->getMessage();
            echo $table_Students . "<br>" . $e->getMessage();
        }

    move_uploaded_file($_FILES["logos"]["tmp_name"],"LOGOS/" . $_FILES["logos"]["name"]);         
    $location = $_FILES["logos"]["name"];

    $institute_name = $_POST['institute_name'];
    $max_book = $_POST['max_book'];
    $fine_after_day = $_POST['fine_after_day'];
    $fine_per_week = $_POST['fine_per_week'];
    $background_color = $_POST['background_color'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO setting (institute_name,max_book,fine_after_day,fine_per_week,username,password,background_color,image_location) VALUES ('$institute_name','$max_book','$fine_after_day','$fine_per_week','$username','$password','$background_color','$location')";
    
    //$pdoResult = $conn->prepare($pdoQuery);
    
    //$pdoExec = $pdoResult->execute(array(":institute_name"=>$institute_name,":max_book"=>$max_book,":fine_after_day"=>$fine_after_day,":fine_per_week"=>$fine_per_week,":username"=>$username,":password"=>$password,":location"=>$));
    $conn->exec($sql);
        // check if mysql insert query successful
        echo '<script>alert("Data Inserted");</script>';
    }
    ?>
    <!-- ---------------------------------------------------------------------------------------------- -->
    <!-- ----------------------------------End of the code--------------------------------------------- -->
    <!-- ---------------------------------------------------------------------------------------------- -->