$(document).ready(function () {
    $('#form').submit(function (event) {
        event.preventDefault();
        $('tbody').empty();
        $.ajax({
            type: 'POST',
            url: '3.php',
            data: $('#form').serialize(),
            success: function (response) {
                $('#mytable tbody').append(response)
            },

            error: function (xhr, status, error) {
                alert("failed" + xhr + status + error);
            }
        });
    });
});