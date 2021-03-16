<?php 

require_once 'db_connect.php';

//if form is submitted
if($_POST) {	

	$validator = array('success' => false, 'messages' => array());

	$carId = $_POST['car_Id'];
    $name = $_POST['editCarName'];
    $desc = $_POST['editDesc'];

    $sql = "UPDATE car_details SET  carName = '$name', carDescription = '$desc' WHERE id = $carId";
	$query = $connect->query($sql);

	if($query === TRUE) {			
		$validator['success'] = true;
		$validator['messages'] = "Changes Saved Successfully";
	} else {		
		$validator['success'] = false;
		$validator['messages'] = "Could not save the changes";
	}

	// close the database connection
	$connect->close();

	echo json_encode($validator);

}
