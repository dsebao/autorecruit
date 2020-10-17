// Simple Form validation

(function () {
    'use strict';
    window.addEventListener('load', function () {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);


    $('form.js-verify-email').on('submit', function (e) {
        e.stopPropagation();
        e.preventDefault();
        if ($(this)[0].checkValidity() !== false) {
            $.ajax({
                type: "POST",
                url: "https://app.autorecruit.ai/acct/verify/send",
                data: $(this).serialize(),
                beforeSend: function (data) {
                    console.log(data);

                },
                success: function (data) {
                    console.log(data);
                    new Noty({
                        type: 'success',
                        text: 'Your request has been submitted - check your inbox soon for your 10 free candidates!',
                    }).show();
                },
                error: function (data) {
                    new Noty({
                        type: 'error',
                        text: 'An error ocurred',
                    }).show();
                }
            })
        }
        $(this).addClass('was-validated');
    });


})();