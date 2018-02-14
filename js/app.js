$(document).ready(function() {
    $tabout=setTimeout(function(){},300);
    $('.tab-menu li a').on('click',function(){
        var p = $(this).parent();
        if(!p.hasClass('active')) {
            p.addClass('active');
            p.siblings().removeClass('active');
            var i = p.index()+1;
            var t = $('.tabs');
            var a = t.find('.tab.active');
            t.find('anim');
            var n = t.find('.tab:nth-child('+i+')');
            n.addClass('anim').fadeIn(300);
            clearTimeout($tabout);
            $tabout = setTimeout(function(){
                n.addClass('active').removeClass('anim');
                a.removeClass('active').hide();
            },300);
        }
        return false;
    });
    run();
    $('.trigger').on('click',function(){
        var t = $('#main');
        if(t.hasClass('active')){
            t.removeClass('active');
            $('#play_btn g').attr('fill','#FFFFFF');
            $('body,html').removeClass('modal-open');
        } else {
            t.addClass('active');
            $('#play_btn g').attr('fill','#0b7fe5');
            $('body,html').addClass('modal-open');
        }
    });
    $('[href="#hiw"]').on('click',function(){
        var t = $('#main');
        if(!$('.fp-enabled').length){
            t.removeClass('active');
            $('#play_btn g').attr('fill','#FFFFFF');
            $('body,html').removeClass('modal-open');
        } else{
            $.fn.fullpage.moveTo(($('#hiw').closest('.section').index()+1));
            return false;
        }
    });
    $('.scroll-more').on('click',function(){
        if(!$('.fp-enabled').length){
        } else{
            $.fn.fullpage.moveTo(2);
            return false;
        }
    });
    $('.btn-demo').on('click',function(){
        if($(this).hasClass('active'))
            $('#order_success').fadeIn(300);
        else
            $('#order_from').fadeIn(300);
        $('body,html').addClass('modal-open');
        if($('.fp-enabled').length){
            try{
                $.fn.fullpage.setAllowScrolling(false,'all');
            }
            catch (err){

            }
        }
        return false;
    });
    $('#order_from .close').on('click',function(){
        $('#order_from').fadeOut(300);
        var l = $('.modal-open').length;
        $('body,html').removeClass('modal-open');
        if($('.fp-enabled').length && l){
            try{
                $.fn.fullpage.setAllowScrolling('all');
            }
            catch (err){

            }
        }
        return false;
    });
    $('#order_success .close').on('click',function(){
        $('#order_success').fadeOut(300,function(){
            var v = $('#order_success .video');
            v.removeClass('active');
            var i = v.find('iframe');
            var s = i.attr('src').replace('autoplay=1','');
            i.attr('src',s);
        });
        $('body').removeClass('modal-open');
        if($('.fp-enabled').length) {
            try{
                $.fn.fullpage.setAllowScrolling('all');
            }
            catch (err){

            }
        };
        return false;
    });
    $('#order_success .video svg').on('click',function(){
        $(this).parent().addClass('active');
        var i = $(this).parent().find('iframe');
        var s = i.attr('src');
        i.attr('src',s+'&autoplay=1');

    });
    $('form').on('submit',function(){
        checkForm($(this));
        return false;
    });
    $('input,textarea').on('focus',function(){
        $(this).removeClass('animate shake error');
    });
});
$(window).resize(function(){
    run();
});
$(window).scroll(function(){
    var s = $(window).scrollTop();
    var i = $('#iphone .shadow');
    var ib = $('#iphone');
    if(
        (i.offset().top- 200) < s
        && (ib.height()+ib.offset().top) > s
        && ib.offset().top < s ){
        i.addClass('active');
    } else {
        i.removeClass('active');
    }
});
function run() {
    if($(window).width() > 1200 && $(window).height() > 690 ) {
        $('#fullpage').fullpage({
            //Navigation
            menu: '#menu',
            lockAnchors: false,
            anchors: ['one', 'second', 'third', 'forth', 'fifth', 'sixth', 'seventh'],
            navigation: true,
            navigationPosition: 'left',
            // navigationTooltips: ['firstSlide', 'secondSlide'],
            showActiveTooltip: false,
            slidesNavigation: false,
            slidesNavPosition: 'bottom',

            //Scrolling
            css3: true,
            scrollingSpeed: 700,
            autoScrolling: true,
            fitToSection: true,
            fitToSectionDelay: 1000,
            scrollBar: false,
            easing: 'easeInOutCubic',
            easingcss3: 'ease',
            loopBottom: false,
            loopTop: false,
            loopHorizontal: true,
            continuousVertical: false,
            continuousHorizontal: false,
            scrollHorizontally: false,
            interlockedSlides: false,
            dragAndMove: false,
            offsetSections: false,
            resetSliders: false,
            fadingEffect: false,
            normalScrollElements: '#element1, .element2',
            scrollOverflow: true,
            scrollOverflowReset: false,
            scrollOverflowOptions: null,
            touchSensitivity: 15,
            normalScrollElementTouchThreshold: 5,
            bigSectionsDestination: null,

            //Accessibility
            keyboardScrolling: true,
            animateAnchor: true,
            recordHistory: true,

            //Design
            controlArrows: true,
            verticalCentered: false,
            sectionsColor: false,
            paddingTop: 0,
            paddingBottom: 0,
            fixedElements: false,
            responsiveWidth: 0,
            responsiveHeight: 0,
            responsiveSlides: false,
            parallax: false,
            parallaxOptions: {type: 'reveal', percentage: 62, property: 'translate'},

            //Custom selectors
            sectionSelector: '.section',
            slideSelector: '.slide',

            lazyLoading: true,

            //events
            onLeave: function (index, nextIndex, direction) {
                var e = $('.fp-bg > div');
                var s = $('.section');
                if(typeof (timeReset) !== 'undefined')
                    clearTimeout(timeReset);
                $(this).siblings().delay(1).removeClass('treset');
                if(nextIndex == 1){
                    e.eq(0).addClass('bi').addClass('active');
                }
                if (direction == 'up') {
                    e.eq(nextIndex - 1).addClass('tr').addClass('bi').addClass('active');
                    s.eq(index - 1).addClass('trout outAnim');
                    timeReset = setTimeout(function(){s.eq(index - 1).addClass('treset')},300);
                }
                if (direction == 'down') {
                    e.eq(nextIndex - 1).addClass('tr').addClass('bi').addClass('active');
                    s.eq(index - 1).addClass('trout outAnim');
                    timeReset = setTimeout(function(){s.eq(index - 1).delay(300).addClass('treset');},300);
                }

            },
            afterLoad: function (anchorLink, index) {
                var e = $('.fp-bg > div').eq(index - 1);
                var s = $('.section');
                e.siblings().removeClass('tr bi active');
                $(this).siblings().removeClass('trout outAnim');
                e.removeClass('bi');

            },
            afterRender: function () {
                $('.section').removeClass('tr-none');
            },
            afterResize: function () {
            },
            afterResponsive: function (isResponsive) {
            },
            afterSlideLoad: function (anchorLink, index, slideAnchor, slideIndex) {
            },
            onSlideLeave: function (anchorLink, index, slideIndex, direction, nextSlideIndex) {
            }
        });
    } else {
        if($('.fp-enabled').length)
            $.fn.fullpage.destroy('all');
    }
}
function checkForm(f){
   var fa=  f.serializeArray();
    f.find('.error').removeClass('animate shake error');
    var t = true;
    $.each(fa, function( i, v ) {
        if(v.name == 'name' && v.value.length < 3){
            find_it(f,v.name).addClass('animate shake error');
            t = false;
        }
        if(v.name == 'phone' && v.value.length < 5){
            find_it(f,v.name).addClass('animate shake error');
            t = false;
        }
        if(v.name == 'email' && !isEmail(v.value)){
            find_it(f,v.name).addClass('animate shake error');
            t = false;
        }
    });
    if(!t)
        return false;

    $.ajax({
        url:'submit.php',
        data: f.serialize(),
        method: 'POST',
        cache:false,
        success: function(data){

        }

    });
    var b = $('.btn-demo');
    b.addClass('active');
    b.find('span').text('Watch Demo');
    $('#order_success').fadeIn(300);
    $('#order_from').fadeOut(300);

    f[0].reset();
    return false;
}
function find_it(p,n){
    var s = '[name="'+n+'"]';
    return p.find(s);
}
function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}
function toTop(){
    if($('.fp-enabled').length) {
        $.fn.fullpage.moveTo(1);
    } else {
        var body = $("html, body");
        body.stop().animate({scrollTop: 0}, 1000, 'swing');
    }
}

/*$.fn.pageSlider = function() {

        var ticking = false;
        var isFirefox = (/Firefox/i.test(navigator.userAgent));
        var isIe = (/MSIE/i.test(navigator.userAgent)) || (/Trident.*rv\:11\./i.test(navigator.userAgent));
        var scrollSensitivitySetting = 30; //Increase/decrease this number to change sensitivity to trackpad gestures (up = less sensitive; down = more sensitive)
        var slideDurationSetting = 600; //Amount of time for which slide is "locked"
        var currentSlideNumber = 0;
        var totalSlideNumber = $(".section").length;
        function parallaxScroll(evt) {
            if (isFirefox) {
                //Set delta for Firefox
                delta = evt.detail * (-120);
            } else if (isIe) {
                //Set delta for IE
                delta = -evt.deltaY;
            } else {
                //Set delta for all other browsers
                delta = evt.wheelDelta;
            }

            if (ticking != true) {
                if (delta <= -scrollSensitivitySetting) {
                    //Down scroll
                    ticking = true;
                    if (currentSlideNumber !== totalSlideNumber - 1) {
                        currentSlideNumber++;
                        nextItem();
                    }
                    slideDurationTimeout(slideDurationSetting);
                }
                if (delta >= scrollSensitivitySetting) {
                    //Up scroll
                    ticking = true;
                    if (currentSlideNumber !== 0) {
                        currentSlideNumber--;
                    }
                    previousItem();
                    slideDurationTimeout(slideDurationSetting);
                }
            }
        }

        function slideDurationTimeout(slideDuration) {
            setTimeout(function() {
                ticking = false;
            }, slideDuration);
        }
        var mousewheelEvent = isFirefox ? "DOMMouseScroll" : "wheel";
        window.addEventListener(mousewheelEvent, _.throttle(parallaxScroll, 60), false);
        function nextItem() {
            var $previousSlide = $(".section").eq(currentSlideNumber - 1).addClass('fadeOut');
            $(".section").eq(currentSlideNumber).removeClass('fadeOut');
            $previousSlide.removeClass("up-scroll").addClass("down-scroll");
        }

        function previousItem() {
            var $currentSlide = $(".section").eq(currentSlideNumber).addClass('fadeOut');
            $(".section").eq(currentSlideNumber).removeClass('fadeOut');
            $currentSlide.removeClass("down-scroll").addClass("up-scroll");
        }

};*/