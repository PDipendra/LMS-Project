<?php
	$student_id = '';
	$name = '';
	$address = '';
	$roll = '';
	$contact = '';
	$faculty = '';
	$gender = '';
	$email = '';
	$batch = '';

function getPosts()
{
    $posts = array();
    
    $posts[0] = $_POST['student_id'];
    $posts[1] = $_POST['name'];
    $posts[2] = $_POST['address'];
    $posts[3] = $_POST['roll'];
    $posts[4] = $_POST['contact'];
    $posts[5] = $_POST['faculty'];
    $posts[6] = $_POST['gender'];
    $posts[7] = $_POST['email'];
    $posts[8] = $_POST['batch'];
    
    return $posts;
}
?>