<?php 

require_once 'db_connect.php';

$output = array('data' => array());

$sql = "SELECT c.carName,s.id, s.servicePer40km, s.servicePer80km, s.servicePer100km, s.extraPerHour, s.extraPerKm, s.nightHalts FROM car_details c INNER JOIN services s ON c.id = s.carId";
$query = $connect->query($sql);

while ($row = $query->fetch_assoc()) {
    $actionButton = '<div class="btn-group">
	  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    Actions <span class="caret"></span>
	  </button>
	  <ul class="dropdown-menu">
	    <li><a type="button" data-toggle="modal" data-target="#editServiceModal" onclick="editService('.$row['id'].')"> <i class="fa fa-pencil fa-stack text-dark"></i> Edit</a></li>
		</ul>
	</div>
		';

	$output['data'][] = array(
		$row['carName'],
		$row['servicePer40km'],
		$row['servicePer80km'],
		$row['servicePer100km'],
		$row['extraPerHour'],
		$row['extraPerKm'],
		$row['nightHalts'],	
		$actionButton
	);
}

// database connection close
$connect->close();

echo json_encode($output);
