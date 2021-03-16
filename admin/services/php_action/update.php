<?php 

require_once 'db_connect.php';



//if form is submitted
if($_POST) {	

	$validator = array('success' => false, 'messages' => array());

	$serviceId = $_POST['service_Id'];
    $edit40KM = $_POST['edit40KM'];
	$edit80KM = $_POST['edit80KM'];
	$edit100KM = $_POST['edit100KM'];
	$editPerKM = $_POST['editPerKM'];
	$editPerHour = $_POST['editPerHour'];
	$editNightHalts = $_POST['editNightHalts'];


    $sql = "UPDATE services SET  servicePer40km = '$edit40KM', servicePer80km = '$edit80KM', servicePer100km = '$edit100KM', extraPerKm = '$editPerKM',  extraPerHour = '$editPerHour',  nightHalts='$editNightHalts' WHERE id = $serviceId";
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
