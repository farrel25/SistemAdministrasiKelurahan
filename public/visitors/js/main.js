/**
 * Template Name: Vesperr - v3.0.2
 * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
 * Author: BootstrapMade.com
 * License: https://bootstrapmade.com/license/
 */
!(function($) {
    "use strict";

    // Smooth scroll for the navigation menu and links with .scrollto classes
    var scrolltoOffset = $("#header").outerHeight() - 15;

    // Activate smooth scroll on page load with hash links in the url
    $(document).ready(function() {
        if (window.location.hash) {
            var initial_nav = window.location.hash;
            if ($(initial_nav).length) {
                var scrollto = $(initial_nav).offset().top - scrolltoOffset;
                $("html, body").animate(
                    {
                        scrollTop: scrollto
                    },
                    1500,
                    "easeInOutExpo"
                );
            }
        }
    });

    // Mobile Navigation
    if ($(".nav-menu").length) {
        var $mobile_nav = $(".nav-menu")
            .clone()
            .prop({
                class: "mobile-nav d-lg-none"
            });
        $("header").append($mobile_nav);
        $("header").prepend(
            '<button type="button" class="mobile-nav-toggle d-lg-none"><i class="icofont-navigation-menu"></i></button>'
        );
        $("header").append('<div class="mobile-nav-overly"></div>');

        $(document).on("click", ".mobile-nav-toggle", function(e) {
            $("header").toggleClass("mobile-nav-active");
            $(".mobile-nav-toggle i").toggleClass(
                "icofont-navigation-menu icofont-close"
            );
            $(".mobile-nav-overly").toggle();
        });

        $(document).on("click", ".mobile-nav .drop-down > a", function(e) {
            e.preventDefault();
            $(this)
                .next()
                .slideToggle(300);
            $(this)
                .parent()
                .toggleClass("active");
        });

        $(document).click(function(e) {
            var container = $(".mobile-nav, .mobile-nav-toggle");
            if (
                !container.is(e.target) &&
                container.has(e.target).length === 0
            ) {
                if ($("header").hasClass("mobile-nav-active")) {
                    $("header").removeClass("mobile-nav-active");
                    $(".mobile-nav-toggle i").toggleClass(
                        "icofont-navigation-menu icofont-close"
                    );
                    $(".mobile-nav-overly").fadeOut();
                }
            }
        });
    } else if ($(".mobile-nav, .mobile-nav-toggle").length) {
        $(".mobile-nav, .mobile-nav-toggle").hide();
    }

    // Toggle .header-scrolled class to #header when page is scrolled
    $(window).scroll(function() {
        if ($(this).scrollTop() > 30) {
            $("#header").addClass("header-scrolled");
        } else {
            $("#header").removeClass("header-scrolled");
        }
    });

    if ($(window).scrollTop() > 100) {
        $("#header").addClass("header-scrolled");
    }

    // Back to top button
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $(".back-to-top").fadeIn("slow");
        } else {
            $(".back-to-top").fadeOut("slow");
        }
    });

    $(".back-to-top").click(function() {
        $("html, body").animate(
            {
                scrollTop: 0
            },
            1500,
            "easeInOutExpo"
        );
        return false;
    });

    $(".scroll-to-bottom").click(function() {
        $("html, body").animate(
            {
                scrollTop: document.body.scrollHeight
            },
            1500,
            "easeInOutExpo"
        );
        return false;
    });

    $(".scroll-to-id").click(function() {
        $("html, body").animate(
            {
                scrollTop: $("#services").offset().top - scrolltoOffset
            },
            1500,
            "easeInOutExpo"
        );
        return false;
    });

    // jQuery counterUp
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 1000
    });

    // Init AOS
    function aos_init() {
        AOS.init({
            duration: 1000,
            easing: "ease-in-out",
            once: true,
            mirror: false
        });
    }
    $(window).on("load", function() {
        aos_init();
    });
})(jQuery);
