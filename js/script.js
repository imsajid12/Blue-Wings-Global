//Contact form validation
function validateForm() {
    document.getElementById('status').innerHTML = "Sending...";
    formData = {
    'name'     : $('input[name=name]').val(),
    'email'    : $('input[name=email]').val(),
    'message'  : $('textarea[name=message]').val()
    };
    
    
    $.ajax({
    url : "mail.php",
    type: "POST",
    data : formData,
    success: function(data, textStatus, jqXHR)
    {
    
    $('#status').text(data.message);
    if (data.code) //If mail was sent successfully, reset the form.
    $('#contact-form').closest('form').find("input[type=text], textarea").val("");
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
    $('#status').text(jqXHR);
    }
    });
    
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());
    
    // Init Scrollspy
    $('body').scrollspy({ target: '#main-nav' });
    
    // Smooth Scrolling
    $("#main-nav a").on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();
    
            const hash = this.hash;
    
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function () {
    
                window.location.hash = hash;
            });
        }
    });
}


// Configure Slider
$('.carousel').carousel({
    interval: 3000,
    pause: 'hover'
});

// Lightbox Init
$(document).on('click', '[data-toggle="lightbox"]', function (event) {
    event.preventDefault();
    $(this).ekkoLightbox();
});

//Back to Top
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    });
    // scroll body to 0px on click
    $('#back-to-top').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 400);
        return false;
    });
});