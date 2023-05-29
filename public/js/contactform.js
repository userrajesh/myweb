
var nameError = document.getElementById('name-error');
var emailError = document.getElementById('email-error');
var phoneError = document.getElementById('contact-error');
var msgError = document.getElementById('msg-error');
var submitError = document.getElementById('submit-Error');

function validateName() {
    var name = document.getElementById('name').value;
    if (name.length == 0) {
        nameError.innerHTML = '<i class="fa fa-exclamation-circle" aria-hidden="true"></i>';
 
        return false;
    }
    if (!name.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/)) {
        nameError.innerHTML = '<i class="fa fa-exclamation-circle" aria-hidden="true"></i>';
      
        return false;
    }
    nameError.innerHTML = '<i class="fa fa-check-circle-o" aria-hidden="true"></i>';
    return true;
}

function validateEmail() {
    var email = document.getElementById('email').value;
    if (email.length == 0) {
        emailError.innerHTML = '<i class="fa fa-exclamation-circle" aria-hidden="true"></i>';

        return false;
    }
    if (!email.match(/^[A-Za-z0-9_!#$%&'*+\/=?`{|}~^.-]+@[A-Za-z0-9.-]+$/)) {
        emailError.innerHTML = '<i class="fa fa-exclamation-circle" aria-hidden="true"></i>';

        return false;
    }

    emailError.innerHTML = '<i class="fa fa-check-circle-o" aria-hidden="true"></i>';
    return true;
}

function validateContact() {
    var phone = document.getElementById('contact').value;
    if (phone.length == 0) {
        phoneError.innerHTML = '<i class="fa fa-exclamation-circle" aria-hidden="true"></i>';
        return false;
    }
    if (phone.length != 10) {
        phoneError.innerHTML = '<i class="fa fa-exclamation-circle" aria-hidden="true"></i>';
        return false;
    }
    if (!phone.match(/^[0-9]{10}$/)) {
        phoneError.innerHTML = '<i class="fa fa-exclamation-circle" aria-hidden="true"></i>';
        return false;
    }
    phoneError.innerHTML = '<i class="fa fa-check-circle-o" aria-hidden="true"></i>';
    return true;
}

function validateMessage() {
    var message = document.getElementById('message').value;
    if (message.length == 0) {
        msgError.innerHTML = '<i class="fa fa-exclamation-circle" aria-hidden="true"></i>';
        return false;
    }

    msgError.innerHTML = '<i class="fa fa-check-circle-o" aria-hidden="true"></i>';
    return true;
}

function validateForm() {
    if (!validateName() || !validateEmail() || !validateContact() || !validateMessage()) {
        submitError.style.display = "block";
        submitError.style.color = "red";
        submitError.innerHTML = "Please fix above error";
        setTimeout(() => {
            submitError.style.display = "none";
        }, 3000);
        return false;
    } else {
        return true
    }
}

$(document).ready(function() {
    $('#btnenquiry').click(function(e) {
        e.preventDefault();
        validateForm();
        if (validateForm()) {
            document.getElementById("btnenquiry").innerHTML =
                '<span  class="spinner-border spinner-border-sm" role="status" aria-hidden="true" >  </span> Sending. Please wait..';
            document.getElementById("btnenquiry").disabled = true;
            var name = $('#name').val();
            var email = $('#email').val();
            var contact = $('#contact').val();
            var message = $('#message').val();

            let data = {
                'name': name,
                'email': email,
                'contact': contact,
                'message': message,
            };

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({

                url: '/email',
                method: 'post',
                data: JSON.stringify(data),
                success: function(data) {
                    $("#contactForm")[0].reset();
                    $("#btnenquiry")[0].innerHTML = "<span>Send Message</span>";

                    $("#errorMsg")[0].innerHTML =
                        '<div class="alert alert-danger alert-dismissible fade show" role="alert">Thanks for Contacting us.Our executive will call you as soon as possible<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                    nameError.innerHTML = "";
                    emailError.innerHTML = "";
                    phoneError.innerHTML = "";
                    msgError.innerHTML = "";
                    document.getElementById("btnenquiry").disabled = false;

                }


            })

        }




    })
})
