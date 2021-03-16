<?php 

require_once 'db_connect.php';

$output = array('data' => array());

$sql = "SELECT * FROM car_details";
$query = $connect->query($sql);

while ($row = $query->fetch_assoc()) {
    $actionButton = '
	<div class="btn-group">
	  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    Actions <span class="caret"></span>
	  </button>
	  <ul class="dropdown-menu">
	    <li><a type="button" data-toggle="modal" data-target="#editCarModal" onclick="editCar('.$row['id'].')"> <i class="fa fa-pencil fa-stack text-dark"></i> Edit</a></li>
		</ul>
	</div>
		';

	$output['data'][] = array(
		$row['carName'],
		$row['carDescription'],
		$actionButton
	);

}

// database connection close
$connect->close();

echo json_encode($output);
