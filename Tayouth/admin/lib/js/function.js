/*==================== ALERT FOR DELETE USER ====================*/
$(document).on('click', '.delete_user_btn', function (e) {
    e.preventDefault();
    var id = $(this).val();
    // alert(id);
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            $.ajax({
                method: "POST",
                url: "code.php",
                data: {
                    'user_table':id,
                    'delete_user_btn': true
                },
                success: function (response) {
                    if(response == 200){
                        swal("Success!", "User Deleted Successfully!", "success");
                        $("#user_table").load(location.href + " #user_table");

                    }else if(response == 500){
                        swal("Error!", "Something went Wrong", "error");
                    }
                }
            });
        }
    });
});