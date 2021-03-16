<?php 

require_once 'db_connect.php';

$carId = $_POST['car_Id'];
$sql = "SELECT * FROM `car_details` WHERE id = $carId";
$query = $connect->query($sql);
$result = $query->fetch_assoc();

$connect->close();

echo json_encode($result);

