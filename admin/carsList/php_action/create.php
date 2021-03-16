<?php 

require_once 'db_connect.php';

//if form is submitted
if($_POST) {	

	$validator = array('success' => false, 'messages' => array());

	$carName = $_POST['carName'];
	$carImage = $_POST['carImage'];
	$carDes = $_POST['carDesc'];
	

	$sql = "INSERT INTO `car_details` (carName, carImage, carDescription) VALUES ('$carName', '$carImage', '$carDes')";
	$query = $connect->query($sql);


	if($query === TRUE) {			
		$validator['success'] = true;
		$validator['messages'] = "Car added Successfully";
	} else {		
		$validator['success'] = false;
		$validator['messages'] = "Can't create Record";
	}

	// close the database connection
	$connect->close();

	echo json_encode($validator);

}
