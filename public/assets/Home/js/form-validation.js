$(document).ready(function() {
    $("#registrationForm").validate({
        rules: {
            firstname: {
                required: true,
                minlength: 2
            },
            lastname: {
                required: true,
                minlength: 2
            },
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 6
            },
            confirm_password: {
                required: true,
                equalTo: "#password"
            }
        },
        messages: {
            firstname: {
                required: "Please enter your first name",
                minlength: "Your first name must consist of at least 2 characters"
            },
            lastname: {
                required: "Please enter your last name",
                minlength: "Your last name must consist of at least 2 characters"
            },
            email: {
                required: "Please enter a valid email address",
                email: "Please enter a valid email address"
            },
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 6 characters long"
            },
            confirm_password: {
                required: "Please confirm your password",
                equalTo: "Passwords do not match"
            }
        },
        errorPlacement: function(error, element) {
            error.appendTo(element.closest('.mb-3').find('.error'));
        },
        submitHandler: function(form) {
            // If the form is valid, you can submit it or perform other actions
            form.submit();
        }
    });
});