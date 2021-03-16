// global the manage memeber table 
var packageListTable;

$(document).ready(function() {
    packageListTable = $("#packageListTable").DataTable({
        "ajax": "php_action/retrieve.php",
        "order": []
    });



});



function editPackage(id = null) {
    if (id) {

        // remove the error 
        $(".form-group").removeClass('has-error').removeClass('has-success');
        $(".text-danger").remove();
        // empty the message div
        $(".edit-messages").html("");

        // remove the id
        // $("#editExpNo").remove();

        // fetch the member data
        $.ajax({
            url: 'php_action/getSelectedPackage.php',
            type: 'post',
            data: { package_Id: id },
            dataType: 'json',
            success: function(response) {
                    console.log(response);
                    $("#editPackageName").val(response.packageName);
                    $("#editFare").val(response.fare);



                    // mmeber id 
                    $(".editPackageModal").append('<input type="hidden" name="package_Id" id="package_Id" value="' + response.id + '"/>');

                    // here update the member data
                    $("#updatePackageForm").unbind('submit').bind('submit', function() {
                        // remove error messages
                        $(".text-danger").remove();

                        var form = $(this);

                        // validation
                        var editPackageName = $("#editPackageName").val();
                        var editFare = $("#editFare").val();


                        if (editPackageName === "") {
                            $("#editPackageName").closest('.form-group').addClass('has-error');
                            $("#editPackageName").after('<p class="text-danger">The Name field is required</p>');
                        } else {
                            $("#editPackageName").closest('.form-group').removeClass('has-error');
                            $("#editPackageName").closest('.form-group').addClass('has-success');
                        }

                        if (editFare == "") {
                            $("#editFare").closest('.form-group').addClass('has-error');
                            $("#editFare").after('<p class="text-danger">The Fare field is required</p>');
                        } else {
                            $("#editFare").closest('.form-group').removeClass('has-error');
                            $("#editFare").closest('.form-group').addClass('has-success');
                        }

                        if (editPackageName && editFare) {
                            $.ajax({
                                url: form.attr('action'),
                                type: form.attr('method'),
                                data: form.serialize(),
                                dataType: 'json',
                                success: function(response) {
                                        if (response.success === true) {
                                            $(".edit-messages").html('<div class="alert alert-success alert-dismissible" role="alert">' +
                                                '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                                                '<strong> <span><i class="fa fa-check fa-stack"></i></span> </strong>' + response.messages +
                                                '</div>');

                                            // reload the datatables
                                            packageListTable.ajax.reload(null, false);
                                            // this function is built in function of datatables;

                                            // remove the error 
                                            $(".form-group").removeClass('has-success').removeClass('has-error');
                                            $(".text-danger").remove();
                                        } else {
                                            $(".edit-messages").html('<div class="alert alert-warning alert-dismissible" role="alert">' +
                                                '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                                                '<strong> <span><i class="fa fa-exclamation-circle"></i> </strong>' + response.messages +
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