<?php 

require_once 'db_connect.php';

//if form is submitted
if($_POST) {	

	$validator = array('success' => false, 'messages' => array());

	$packageId = $_POST['package_Id'];
    $name = $_POST['editPackageName'];
    $fare = $_POST['editFare'];

    $sql = "UPDATE package_list SET  packageName = '$name', fare = '$fare' WHERE id = $packageId";
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
