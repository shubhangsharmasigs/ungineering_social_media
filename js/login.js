$(document).ready(function () {
    $('#registration_form').submit(function() {
        var url = "registration_submit.php";
        var data = $('#registration_form').serialize();
        $.ajax({
            url: url,
            type: "POST",
            data: data,
            success: registration_success,
            error: on_error
        });
        return false;
    });

    $('#login_form').submit(function() {
        var url = "login_submit.php";
        var data = $('#login_form').serialize();
        $.ajax({
            url: url,
            type: "POST",
            data: data,
            success: login_success,
            error: on_error
        });
        return false;
    });
});

var registration_success = function (response) {
    response = JSON.parse(response); //parse coverts this string to object

    if (response.success) {
        alert(response.message);
        //window.location.href = "homepage.php";
    } else {
        alert(response.message);
    }
};

var login_success = function (response) {
    response = JSON.parse(response);

    if (response.success) {
        alert(response.message);
        //window.location.href = "homepage.php";
    } else {
        alert(response.message);
    }
};

var on_error = function () {
    alert("something went wrong");
};
