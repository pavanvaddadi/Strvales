<?php 

require_once 'db_connect.php';

$packageId = $_POST['package_Id'];
$sql = "SELECT * FROM `package_list` WHERE id = $packageId";
$query = $connect->query($sql);
$result = $query->fetch_assoc();

$connect->close();

echo json_encode($result);

