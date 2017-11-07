$(document).ready(function () {

   $("#view-demo-d").click(function () {
       var valid;
       valid = validateFormDemo();
       if (valid) {
           jQuery.ajax({
               url: "demo.php",
               type: "POST",
               data: 'firstName='+$("#name").val()+'&lastName='+$("#last-name").val()+'&email='+$("#email").val()+'&company='+$("#company").val()+'&phone='+$("#phone").val()+'&vacancies='+$("#select-vacancies").val(),
               success:function (data) {
                   $("#video-pop-up input").val('');
                   addPlaceholdersDemo();
                   alert('Thanks, your demo is available now!');
                   $("#video-pop-up").addClass("video-visible");
                   $("#pop-up-main").hide();
                   $("#video").show();

                   $("#video-pop-up").click(function () {
                       $("#video-pop-up").fadeOut();
                       var iframe = document.getElementById('video');
                       iframe.src = iframe.src;
                   });
               },
               error:function () {}
           });
       }
   });

   $("#contact-form-submit").click(function () {
       var valid;
       valid = validateFormContact();
       if (valid) {
           jQuery.ajax({
               url: "form.php",
               type: "POST",
               data: 'firstName='+$("#name").val()+'&lastName='+$("#last-name").val()+'&email='+$("#email").val()+'&company='+$("#company").val()+'&phone='+$("#phone").val()+'&message='+$("#message").val(),
               success:function (data) {
                   $(".contact-up-card input").val('');
                   addPlaceholdersContact();
                   alert('Thank you for getting in touch! We will get back to you soon!')
               },
               error:function () {}
           });
       }
   });
});

function validateFormDemo() {
    var valid = true;

    if (!$("#name").val()) {
        $("#name").css('border-bottom','1.5px solid #FF0000');
        valid = false;
    } else {
        $("#name").css('border-bottom','1.5px solid #cccee6');
    }

    if (!$("#last-name").val()) {
        $("#last-name").css('border-bottom','1.5px solid #FF0000');
        valid = false;
    } else {
        $("#last-name").css('border-bottom','1.5px solid #cccee6');
    }

    if (!$("#email").val()) {
        $("#email").css('border-bottom','1.5px solid #FF0000');
        valid = false;
    } else {
        $("#email").css('border-bottom','1.5px solid #cccee6');
    }

    if (!$("#email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
        $("#email").css('border-bottom','1.5px solid #FF0000');
        valid = false;
    } else {
        $("#email").css('border-bottom','1.5px solid #cccee6');
    }

    if (!$("#company").val()) {
        $("#company").css('border-bottom','1.5px solid #FF0000');
        valid = false;
    } else {
        $("#company").css('border-bottom','1.5px solid #cccee6');
    }

    if (!$("#phone").val()) {
        $("#phone").css('border-bottom','1.5px solid #FF0000');
        valid = false;
    } else {
        $("#phone").css('border-bottom','1.5px solid #cccee6');
    }

    if (!$("#select-vacancies").val()) {
        $("#select-vacancies").css('border-bottom','1.5px solid #FF0000');
        valid = false;
    } else {
        $("#select-vacancies").css('border-bottom','1.5px solid #cccee6');
    }

    return valid;

}


function validateFormContact() {
    var valid = true;

    if (!$("#name").val()) {
        $("#name").css('border-bottom','1.5px solid #FF0000');
        valid = false;
    } else {
        $("#name").css('border-bottom','1.5px solid #cccee6');
    }

    if (!$("#last-name").val()) {
        $("#last-name").css('border-bottom','1.5px solid #FF0000');
        valid = false;
    } else {
        $("#last-name").css('border-bottom','1.5px solid #cccee6');
    }

    if (!$("#email").val()) {
        $("#email").css('border-bottom','1.5px solid #FF0000');
        valid = false;
    } else {
        $("#email").css('border-bottom','1.5px solid #cccee6');
    }

    if (!$("#email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
        $("#email").css('border-bottom','1.5px solid #FF0000');
        valid = false;
    } else {
        $("#email").css('border-bottom','1.5px solid #cccee6');
    }

    if (!$("#company").val()) {
        $("#company").css('border-bottom','1.5px solid #FF0000');
        valid = false;
    } else {
        $("#company").css('border-bottom','1.5px solid #cccee6');
    }

    if (!$("#phone").val()) {
        $("#phone").css('border-bottom','1.5px solid #FF0000');
        valid = false;
    } else {
        $("#phone").css('border-bottom','1.5px solid #cccee6');
    }

    if (!$("#message").val()) {
        $("#message").css('border-bottom','1.5px solid #FF0000');
        valid = false;
    } else {
        $("#message").css('border-bottom','1.5px solid #cccee6');
    }

    return valid;

}

function addPlaceholdersDemo() {
    $("#name").focus();
    $("#name").blur();
    $("#last-name").focus();
    $("#last-name").blur();
    $("#email").focus();
    $("#email").blur();
    $("#company").focus();
    $("#company").blur();
    $("#phone").focus();
    $("#phone").blur();
    $("#select-vacancies").focus();
    $("#select-vacancies").blur();
}

function addPlaceholdersContact() {
    $("#name").focus();
    $("#name").blur();
    $("#last-name").focus();
    $("#last-name").blur();
    $("#email").focus();
    $("#email").blur();
    $("#company").focus();
    $("#company").blur();
    $("#phone").focus();
    $("#phone").blur();
    $("#message").focus();
    $("#message").blur();
}