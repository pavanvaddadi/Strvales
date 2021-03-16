// global the manage memeber table 
var servicesTable;

$(document).ready(function() {
    servicesTable = $("#servicesTable").DataTable({
        "ajax": "php_action/retrieve.php",
        "order": []
    });
});



function editService(id = null) {
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
            url: 'php_action/getSelectedService.php',
            type: 'post',
            data: { service_Id: id },
            dataType: 'json',
            success: function(response) {
                    $("#edit40KM").val(response.servicePer40km);
                    $("#edit80KM").val(response.servicePer80km);
                    $("#edit100KM").val(response.servicePer100km);
                    $("#editPerKM").val(response.extraPerKm);
                    $("#editPerHour").val(response.extraPerHour);
                    $("#editNightHalts").val(response.nightHalts);




                    // mmeber id 
                    $(".editServiceModal").append('<input type="hidden" name="service_Id" id="service_Id" value="' + response.id + '"/>');

                    // here update the member data
                    $("#updateServiceForm").unbind('submit').bind('submit', function() {
                        // remove error messages
                        $(".text-danger").remove();

                        var form = $(this);

                        // validation
                        var edit40KM = $("#edit40KM").val();
                        var edit80KM = $("#edit80KM").val();
                        var edit100KM = $("#edit100KM").val();
                        var editPerKM = $("#editPerKM").val();
                        var editPerHour = $("#editPerHour").val();
                        var editNightHalts = $("#editNightHalts").val();


                        if (edit40KM === "") {
                            $("#edit40KM").closest('.form-group').addClass('has-error');
                            $("#edit40KM").after('<p class="text-danger">The 4hr per 40KM field is required</p>');
                        } else {
                            $("#edit40KM").closest('.form-group').removeClass('has-error');
                            $("#edit40KM").closest('.form-group').addClass('has-success');
                        }

                        if (edit80KM == "") {
                            $("#edit80KM").closest('.form-group').addClass('has-error');
                            $("#edit80KM").after('<p class="text-danger">The 8hrs per 80KM field is required</p>');
                        } else {
                            $("#edit80KM").closest('.form-group').removeClass('has-error');
                            $("#edit80KM").closest('.form-group').addClass('has-success');
                        }

                        if (edit100KM == "") {
                            $("#edit100KM").closest('.form-group').addClass('has-error');
                            $("#edit100KM").after('<p class="text-danger">The 10hrs per 100KM field is required</p>');
                        } else {
                            $("#edit100KM").closest('.form-group').removeClass('has-error');
                            $("#edit100KM").closest('.form-group').addClass('has-success');
                        }

                        if (editPerKM == "") {
                            $("#editPerKM").closest('.form-group').addClass('has-error');
                            $("#editPerKM").after('<p class="text-danger">The Extra Per KM field is required</p>');
                        } else {
                            $("#editPerKM").closest('.form-group').removeClass('has-error');
                            $("#editPerKM").closest('.form-group').addClass('has-success');
                        }

                        if (editPerHour == "") {
                            $("#editPerHour").closest('.form-group').addClass('has-error');
                            $("#editPerHour").after('<p class="text-danger">The Extra Per Hour field is required</p>');
                        } else {
                            $("#editPerHour").closest('.form-group').removeClass('has-error');
                            $("#editPerHour").closest('.form-group').addClass('has-success');
                        }

                        if (editNightHalts == "") {
                            $("#editNightHalts").closest('.form-group').addClass('has-error');
                            $("#editNightHalts").after('<p class="text-danger">The Night Halts is required</p>');
                        } else {
                            $("#editNightHalts").closest('.form-group').removeClass('has-error');
                            $("#editNightHalts").closest('.form-group').addClass('has-success');
                        }

                        if (edit40KM && edit80KM && edit100KM && editPerHour && editPerKM && editNightHalts) {
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
                                            servicesTable.ajax.reload(null, false);
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