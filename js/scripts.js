$(document).ready(function () {

    $("#select-input").hide();
    $("#video").hide();

    $("#carousel li").click(function () {
       $("#carousel li").removeClass("active");
       $(this).addClass("active")
    });

    $(".view-demo").click(function () {
       $("#video-pop-up").fadeIn();
    });

    $("#close-pop-up").click(function () {
       $("#video-pop-up").fadeOut();
       var iframe = document.getElementById('video');
       iframe.src = iframe.src;
    });

    $(document).on('scroll', function() {
        if($(this).scrollTop()>=$('#how-it-works').position().top){
            $(".navbar__menu .menu > .menu-item").removeClass("active");
            $(".navbar__menu .menu > .menu-item:nth-child(2)").addClass("active");
        } else if ($(this).scrollTop()>=$('#particles-js').position().top) {
            $(".navbar__menu .menu > .menu-item").removeClass("active");
            $(".navbar__menu .menu > .menu-item:nth-child(1)").addClass("active");
        } else if ($(this).scrollTop()>=$('#demo-block').position().top) {
            $(".navbar__menu .menu > .menu-item").removeClass("active");
            $(".navbar__menu .menu > .menu-item:nth-child(1)").addClass("active");
        }
    });

    $(".navbar__menu .menu > .menu-item:nth-child(1)").click(function () {
        $('html,body').animate({
                scrollTop: $("#particles-js").offset().top},
            'slow');
    });

    $(".navbar__menu .menu > .menu-item:nth-child(2)").click(function () {
        $('html,body').animate({
                scrollTop: $("#how-it-works").offset().top},
            'slow');
    });

    $("#select-input li").click(function () {
        $("#select-vacancies").removeAttr('placeholder');
        var temp;
        temp = $(this).text();
        $("#select-vacancies").val(temp);
        $("#select-input").hide();
    });

    $("#select-vacancies").click(function () {
        $("#select-input").slideToggle();
    });

});