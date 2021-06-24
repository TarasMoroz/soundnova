$('.remember-me-checkbox').on('click', function() {
    $(this).toggleClass('active');
})
$('.show-password-block').on('click', function() {
    $(this).toggleClass('checked');
    checkPasswordVisibility();
})

function checkPasswordVisibility () {
        let x = document.getElementById("password-input");
        if (x.type === "password") {
          x.type = "text";
          $('.show-password-block').text('Hide password');
        } else {
          x.type = "password";
          $('.show-password-block').text('Show password');
        }
}