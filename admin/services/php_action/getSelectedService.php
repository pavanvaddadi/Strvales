<?php 

require_once 'db_connect.php';

$serviceId = $_POST['service_Id'];
$sql = "SELECT * FROM `services` WHERE id = $serviceId";
$query = $connect->query($sql);
$result = $query->fetch_assoc();

$connect->close();

echo json_encode($result);

