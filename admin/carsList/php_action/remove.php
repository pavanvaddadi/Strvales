<?php 

require_once 'db_connect.php';

$output = array('success' => false, 'messages' => array());

$carId = $_POST['car_Id'];

$newSql = "DELETE FROM car_details WHERE id = $carId";


$newquery = $connect->query($newSql);
    if($newquery === TRUE) {
        $output['success'] = true;
        $output['messages'] = 'Successfully removed';
    } else {
        $output['success'] = false;
        $output['messages'] = "Error While removing the selected car";
    }
// close database connection
$connect->close();

echo json_encode($output);
