<!DOCTYPE html>
<html lang="">
<head>
    <link rel="stylesheet" href="../../enduser/css/bootstrap.min.css">

    <link rel="stylesheet" href="../../assests/css/font-awesome.min.css">

	<link rel="stylesheet" href="../../enduser/css/main.css">
	
    <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../assests/datatables/datatables.min.css">
    <title>Packages</title>
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

                    <li><a href="../services/services.php">Services</a></li>

                    <li class="active"><a href="#">Packages</a></li>

                    <li><a href="../Logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
        <!--/.container-->
    </nav>




	<div class="container">
        <div class="panel panel-primary mt-3">
            <div class="panel-heading bg-primary">
                <h4>Packages</h4>
            </div>

            <div class="panel-body">
                <div class="removeMessages"></div>
				<table class="table table-striped" id="packageListTable">
					<thead>
						<tr>
							<th class="pl-0">Package Name</th>
							<th class="pl-0">Fare</th>
							<th>Actions</th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
    </div>


    	<!-- edit modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="editPackageModal">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header bg-primary">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><span><i class="fa fa-pencil fa-stack"></i></span> Edit Package</h4>
	      </div>

		<form class="form-horizontal" action="php_action/update.php" method="POST" id="updatePackageForm">
            <div class="modal-body">
	        	
	        <div class="edit-messages"></div>
                <div class="form-group"> <!--/here the addclass has-error will appear -->
                  <label for="editPackageName" class="col-sm-3 control-label">Package Name</label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control mr-sm-2" title="select Package Name" id="editPackageName" name="editPackageName" required/>
                      <!-- here the text will apper  -->
                  </div>
              </div>

			  <div class="form-group">
                  <label for="editFare" class="col-sm-3 control-label">Cost</label>
			    <div class="col-sm-9">
			      <input type="text" class="form-control" id="editFare" name="editFare"/>
				<!-- here the text will apper  -->
			    </div>
			  </div>

			  </div>	
            <div class="modal-footer editPackageModal">
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
