$(".menu li").on("click", function() {
    $(".menu li").removeClass("active");
    $(this).addClass("active");
});

function login(callbacks) {
    $.ajax({
        url: 'server/login_form.php',
        type: "POST",
        data: $('#loginForm').serialize(),
        success: function(result) {
            data = JSON.parse(result);
            if (data.status == 'success') {
                // window.location.href = data.redirect;
                callbacks.success({
                   redirect: data.redirect,
                   message: 'Login success!'
                });
            } else {
                // notify(data.errorMsg, 'notify-red');
                callbacks.error({
                   message: 'Your login credentials do not match or you don\' have an account yet'
                });
            }
        }
    });
};

// POSTs the register info to server via AJAX
function register() {
$.ajax({
    url: '../server/register_form.php',
        type: "POST",
    data: $('#registerForm').serialize(),
    success: function(result) {
        data = JSON.parse(result);
        if (data.status == 'success') {
            window.location.href = data.redirect;
        } else {
            // notify(data.errorMsg, 'notify-red');
            console.log(data.errorMsg)
        }
    }
        });
};
