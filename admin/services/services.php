<!DOCTYPE html>
<html lang="">
<head>
    <link rel="stylesheet" href="../../enduser/css/bootstrap.min.css">

    <link rel="stylesheet" href="../../assests/css/font-awesome.min.css">

	<link rel="stylesheet" href="../../enduser/css/main.css">
	
    <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../assests/datatables/datatables.min.css">
    <title>Car Services</title>
</head>
<body>

<nav class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                <a class="navbar-brand" href="index.html">
					<img src="../../enduser/images/logo/logo.png" alt="logo" class="logoItem">
				</a>
            </div>

            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li><a href="../carsList/cars_list.php">Cars List</a></li>

                    <li class="active"><a href="#">Services</a></li>

                    <li><a href="../packages/package_list.php">Packages</a></li>

                    <li><a href="../Logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
        <!--/.container-->
    </nav>


	<div class="container">
        <div class="panel panel-primary mt-3">
            <div class="panel-heading bg-primary">
                <h4>Services List</h4>
            </div>

            <div class="panel-body">
                <div class="removeMessages"></div>
				<table class="table table-striped" id="servicesTable">
					<thead>
						<tr>
							<th class="pl-0">Car Name</th>
							<th class="pl-0">4hours Per 40km</th>
							<th class="pl-0">8hours Per 80km</th>
							<th class="pl-0">10hours Per 100km</th>
							<th class="pl-0">Extra per hour</th>
							<th class="pl-0">Extra per km</th>
							<th class="pl-0">Extra For NightHalts</th>
							<th>Actions</th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
    </div>


    	<!-- edit modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="editServiceModal">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header bg-primary">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><span><i class="fa fa-pencil fa-stack"></i></span> Edit Service</h4>
	      </div>

		<form class="form-horizontal" action="php_action/update.php" method="POST" id="updateServiceForm">
            <div class="modal-body">
	        	
	        <div class="edit-messages"></div>
             <div class="form-group">
                  <label for="edit40KM" class="col-sm-4 control-label">4 hours per 40KM</label>
			    <div class="col-sm-6">
			      <input type="number" class="form-control" id="edit40KM" name="edit40KM" required/>
				<!-- here the text will apper  -->
			    </div>
				</div>
				<div class="form-group">
                  <label for="edit80KM" class="col-sm-4 control-label">8 hours per 80KM</label>
			    <div class="col-sm-6">
			      <input type="number" class="form-control" id="edit80KM" name="edit80KM" required/>
				<!-- here the text will apper  -->
			    </div>
				</div>
				<div class="form-group">
                  <label for="edit100KM" class="col-sm-4 control-label">10 hours per 100KM</label>
					<div class="col-sm-6">
					<input type="number" class="form-control" id="edit100KM" name="edit100KM" required/>
					<!-- here the text will apper  -->
					</div>
				</div>

				<div class="form-group">
                  <label for="editPerKM" class="col-sm-4 control-label">extra Per Km</label>
			    <div class="col-sm-6">
			      <input type="number" class="form-control" id="editPerKM" name="editPerKM" required/>
				<!-- here the text will apper  -->
			    </div>
				</div>
				<div class="form-group">
                  <label for="editPerHour" class="col-sm-4 control-label">extra Per Hour</label>
			    <div class="col-sm-6">
			      <input type="number" class="form-control" id="editPerHour" name="editPerHour" required/>
				<!-- here the text will apper  -->
			    </div>
				</div>

				<div class="form-group">
                  <label for="editNightHalts" class="col-sm-4 control-label">Night Halts</label>
			    <div class="col-sm-6">
			      <input type="number" class="form-control" id="editNightHalts" name="editNightHalts" required/>
				<!-- here the text will apper  -->
			    </div>
			  </div>

			  </div>	
            <div class="modal-footer editServiceModal">
	            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	            <button type="submit" class="btn btn-primary">Save changes</button>
	        </div>
	      </form>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!-- /edit modal -->
 
	

	<!-- jquery plugin -->
	<script type="text/javascript" src="../../assests/jquery/jquery.min.js"></script>
	<!-- bootstrap js -->
	<script type="text/javascript" src="../../assests/js/bootstrap.min.js"></script>
	<!-- datatables js -->
	<script type="text/javascript" src="../../assests/datatables/datatables.min.js"></script>
	<!-- include custom index.js -->
	<script type="text/javascript" src="custom/js/index.js"></script>

</body>
</html>
