// global the manage memeber table 
var carDetailsTable;

$(document).ready(function() {
	carDetailsTable = $("#carListTable").DataTable({
		"ajax": "php_action/retrieve.php",
		"order": []
	});

	

});



function editCar(id = null) {
	if(id) {

		// remove the error 
		$(".form-group").removeClass('has-error').removeClass('has-success');
		$(".text-danger").remove();
		// empty the message div
		$(".edit-messages").html("");

		// remove the id
		// $("#editExpNo").remove();

		// fetch the member data
		$.ajax({
			url: 'php_action/getSelectedCar.php',
			type: 'post',
			data: {car_Id : id},
			dataType: 'json',
			success:function(response) {
				console.log(response);
				$("#editCarName").val(response.carName);
				$("#editDesc").val(response.carDescription);



				// mmeber id 
				$(".editCarModal").append('<input type="hidden" name="car_Id" id="car_Id" value="'+response.id+'"/>');

				// here update the member data
				$("#updateCarForm").unbind('submit').bind('submit', function() {
					// remove error messages
					$(".text-danger").remove();

					var form = $(this);

					// validation
					var editCarName = $("#editCarName").val();
					var editCarDesc = $("#editDesc").val();
					

					if(editCarName === "") {
						$("#editCarName").closest('.form-group').addClass('has-error');
						$("#editCarName").after('<p class="text-danger">The Name field is required</p>');
					} else {
						$("#editCarName").closest('.form-group').removeClass('has-error');
						$("#editCarName").closest('.form-group').addClass('has-success');				
					}

					if(editCarDesc == "") {
						$("#editDesc").closest('.form-group').addClass('has-error');
						$("#editDesc").after('<p class="text-danger">The Exp Number field is required</p>');
					} else {
						$("#editDesc").closest('.form-group').removeClass('has-error');
						$("#editDesc").closest('.form-group').addClass('has-success');
					}

					if(editCarName && editCarDesc) {
						$.ajax({
							url: form.attr('action'),
							type: form.attr('method'),
							data: form.serialize(),
							dataType: 'json',
							success:function(response) {
								if(response.success === true) {
									$(".edit-messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
									  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
									  '<strong> <span><i class="fa fa-check fa-stack"></i></span> </strong>'+response.messages+
									'</div>');

									// reload the datatables
									carDetailsTable.ajax.reload(null, false);
									// this function is built in function of datatables;

									// remove the error 
									$(".form-group").removeClass('has-success').removeClass('has-error');
									$(".text-danger").remove();
								} else {
									$(".edit-messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
									  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
									  '<strong> <span><i class="fa fa-exclamation-circle"></i> </strong>'+response.messages+
									'</div>')
								}
							} // /success
						}); // /ajax
					} // /if

					return false;
				});

			} // /success
		}); // /fetch selected member info

	} else {
		alert("Error : Refresh the page again");
	}
}
