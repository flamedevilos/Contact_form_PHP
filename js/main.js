/*global $, alert, console */

(() => {
    'use strict'

    var nameErrors = true,
        emailError = true,
        subjectError = true,
        messageError = true;

    $('.name').blur(function () {

        if($(this).val().length < 4) {
            $(this).css('border', '1px solid #F00');
            $(this).parent().find('.alert-field').fadeIn(200);

            nameErrors = true;
        } else {
            $(this).css('border', '1px solid #080');
            $(this).parent().find('.alert-field').fadeOut(200);

            nameErrors = false;
        }

    });

    $('.email').blur(function () {

        if($(this).val() === '') {
            $(this).css('border', '1px solid #F00');
            $(this).parent().find('.alert-field').fadeIn(200);

            emailError = true;
        } else {
            $(this).css('border', '1px solid #080');
            $(this).parent().find('.alert-field').fadeOut(200);

            emailError = false;
        }

    });

    $('.subject').blur(function () {

        if($(this).val().length < 7) {
            $(this).css('border', '1px solid #F00');
            $(this).parent().find('.alert-field').fadeIn(200);

            subjectError = true;
        } else {
            $(this).css('border', '1px solid #080');
            $(this).parent().find('.alert-field').fadeOut(200);

            subjectError = false;
        }

    });

    $('.message').blur(function () {

        if($(this).val().length < 10) {
            $(this).css('border', '1px solid #F00');
            $(this).parent().find('.alert-field').fadeIn(200);

            messageError = true;
        } else {
            $(this).css('border', '1px solid #080');
            $(this).parent().find('.alert-field').fadeOut(200);

            messageError = false;
        }

    });

    // Submit
    $('.contact-form').submit(function (e)) {
        if (nameErrors === true || emailError === true || subjectError === true || messageError === true) {
            e.preventDefault();
            $('.name, .email, .subject, message').blur();
        }
    }

});