$('#addHS').click(function() {
    const data = {
        MSHS: $('input[name="MSHS"]').val(),
        Name: $('input[name="Name"]').val(),
        Gender: $('input[name="Gender"]:checked').val(),
        Date: $('input[name="Date"]').val(),
        Address: $('input[name="Address"]').val(),
        Email: $('input[name="Email"]').val()
    }
    console.log(data);
    $.ajax({
        url: 'controllers/hocsinh_controller.php',
        type: 'POST',
        data: data,
        success: function(data) {
           $("#error").html(data);
        }
    })


});