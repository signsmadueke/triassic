"use strict";

$(document).ready(function () {
    $(".menu-icon").click(function () {
        var $body = $('body');
        var $nav = $('nav.main');
        var $logo = $('#logo');
        $body.toggleClass("nav-active");
        if ($nav.hasClass('proto')) {
            $nav.removeClass('proto show-on-scroll show');
            $logo.addClass('light');
        }
        if ((scrollTop > height * 1) && !$body.hasClass('nav-active') && !$nav.hasClass('proto')) {
            $nav.addClass('proto show-on-scroll show');
            $logo.addClass('light');
        }
    });
});

$('.carousel-single').owlCarousel({
    loop: false,
    margin: 0,
    nav: true,
    autoplay: true,
    autoplayHoverPause: true,
    autoHeight: false,
    items: 1,
    dots: true,
    navText: ['', ''],
    rewind: true
});

// window.addEventListener('load', function() {
//         var rellax = new Rellax('.parallax', {
//             center: true
//         });
// });


window.addEventListener('load', function () {
    //------------------------------------------------------------------------
    //                      TOOGLE BUTTON SCRIPT
    //------------------------------------------------------------------------

    $(".toogle-btn").on('click', function (e) {
        e.preventDefault();
        var href = $(this).attr('href');
        $(href).toggleClass("show");
    });

    $(".toogle-btn.close").on('click', function (e) {
        e.preventDefault();
        $(this).parent().toggleClass("show");
    });

    //------------------------------------------------------------------------
    //                      MENU TAP ON MOBILE DEVICES
    //------------------------------------------------------------------------

    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        $("nav.navbar").addClass("touchmenu");
        $(".sub-menu-link").on('click', function (e) {
            e.preventDefault();
            $(this).parent().toggleClass("tap");
        });
    }


    //------------------------------------------------------------------------
    //                      SHOW NAVIGATION ON SCROLL DOWN
    //------------------------------------------------------------------------

    var $window = $(window);
    $window.on('scroll', function () {
        var $body = $('body');
        var $nav = $('nav.main');
        var height = $nav.outerHeight();
        var scrollTop = $window.scrollTop();
        var $logo = $('#logo');
        if ((scrollTop > height * 2) && !$('body').hasClass('nav-active')) {
            $nav.addClass('proto show-on-scroll show');
            $logo.removeClass('light');
        } else {
            $nav.removeClass('proto show-on-scroll show');
            $logo.addClass('light');
        }

    });


    //------------------------------------------------------------------------
    //                      HIDE NAVIGATION ON SCROLL DOWN
    //------------------------------------------------------------------------

    var prev = 0;
    var $window = $(window);
    $window.on('scroll', function () {
        var nav = $('nav.hide-on-scroll');
        var scrollTop = $window.scrollTop();
        nav.toggleClass('hide', scrollTop > prev);
        prev = scrollTop;
    });



    //------------------------------------------------------------------------
    //                      STICKY NAVIGATION
    //------------------------------------------------------------------------

    // Custom
    window.stickyToggle = function (sticky, stickyWrapper, scrollElement) {
        var stickyHeight = sticky.outerHeight();
        var stickyWrapperHeight = stickyWrapper.outerHeight();
        var stickyTop = stickyWrapper.offset().top - stickyHeight + stickyWrapperHeight;
        if (scrollElement.scrollTop() >= stickyTop) {
            stickyWrapper.height(stickyHeight);
            sticky.addClass("fixed-top");
        } else {
            sticky.removeClass("fixed-top");
            stickyWrapper.height('auto');
        }
    };

    // Find all data-toggle="sticky-onscroll" elements
    $('.sticky-top').each(function () {
        var sticky = $(this);
        var stickyWrapper = $('<div>').addClass('sticky-wrapper'); // insert hidden element to maintain actual top offset on page
        if (!sticky.next().hasClass('sticky-wrapper')) {
            sticky.after(stickyWrapper);
        } else {
            stickyWrapper = sticky.next();
        }

        window.stickyTB = window.stickyToggle.bind(window, sticky, stickyWrapper, $(window));
        // Scroll & resize events
        $(window).on('scroll.sticky-onscroll resize.sticky-onscroll', window.stickyTB);

        // On page load
        window.stickyToggle(sticky, stickyWrapper, $(window));
    });

    //------------------------------------------------------------------------
    //                      TOOGLE BUTTON SCRIPT
    //------------------------------------------------------------------------

    $(document).on('click', ".toogle-btn:not(.close)", function (e) {
        e.preventDefault();
        e.stopPropagation();
        e.stopImmediatePropagation();
        var href = $(this).attr('href');
        $(href).toggleClass("show");
    });

    $(document).on('click', ".toogle-btn.close", function (e) {
        e.preventDefault();
        e.stopPropagation();
        e.stopImmediatePropagation();
        $(this).parent().removeClass("show");
        $(this).parent().trigger("close.panel");
    });

    $(document).on('click', '[data-toggle=panel]', function (e) {
        e.preventDefault();
        e.stopPropagation();
        e.stopImmediatePropagation();
        var href = $(this).attr('data-target');
        $(href).toggleClass("show");

        if (!$(href).hasClass("show")) $(href).trigger("close.alert");
        else $(href).trigger("open.alert");
    });

});
var pAgree = '1';

jQuery('img.svg').each(function () {
    var $img = jQuery(this);
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');

    jQuery.get(imgURL, function (data) {
        // Get the SVG tag, ignore the rest
        var $svg = jQuery(data).find('svg');

        // Add replaced image's ID to the new SVG
        if (typeof imgID !== 'undefined') {
            $svg = $svg.attr('id', imgID);
        }
        // Add replaced image's classes to the new SVG
        if (typeof imgClass !== 'undefined') {
            $svg = $svg.attr('class', imgClass + ' replaced-svg');
        }

        // Remove any invalid XML tags as per http://validator.w3.org
        $svg = $svg.removeAttr('xmlns:a');

        // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
        if (!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
            $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
        }

        // Replace image with new SVG
        $img.replaceWith($svg);

    }, 'xml');

});
