jQuery(document).ready(function ($) {
    $('.dog-holder-icons').owlCarousel({
        loop: false,
        margin: 5,
        responsiveClass: true,
        nav: true,
        //navText: ["<img class='prevnext' src='images/prev.png'>", "<img class='prevnext' src='images/next.png'>"],
        responsive: {

            600: {
                items: 3,
                nav: false
            },
            800: {
                items: 5,
                nav: true,
                loop: false
            },
            1000: {
                items: 7,
                nav: true,
                loop: false
            },
            1200: {
                items: 10,
                nav: true,
                loop: false,
                autoplayHoverPause: false,
                autoWidth: true

            }
        }
    })

    $('.social-icons').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        nav: true,
        //navText: ["<img class='prevnext' src='images/prev.png'>", "<img class='prevnext' src='images/next.png'>"],
        responsive: {

            600: {
                items: 3,
                nav: false
            },
            800: {
                items: 6,
                nav: true,
                loop: false
            },
            1000: {
                items: 9,
                nav: true,
                loop: false
            },
            1200: {
                items: 12,
                nav: true,
                loop: false
            }
        }
    });


    // $('.shop-section-top').owlCarousel({
    //     loop: true,
    //     margin: 50,
    //     responsiveClass: true,
    //     nav: true,
    //     rtl: false,
    //     responsive: {

    //         600: {
    //             items: 1,
    //             nav: false
    //         },
    //         800: {
    //             items: 1,
    //             nav: true,
    //             loop: false
    //         },
    //         1000: {
    //             items: 1,
    //             nav: true,
    //             loop: false
    //         },
    //         1200: {
    //             items: 3,
    //             nav: true,
    //             loop: false
    //         }
    //     }
    // });


    $('.last-items').owlCarousel({
        loop: true,
        margin: 25,
        responsiveClass: true,
        nav: true,
        responsive: {

            600: {
                items: 1,
                nav: false
            },
            800: {
                items: 2,
                nav: true,
                loop: false
            },
            1000: {
                items: 3,
                nav: true,
                loop: false
            },
            1200: {
                items: 5,
                nav: true,
                loop: false
            }
        }
    });

    var slideIndex = 0;
    //showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) { slideIndex = 1 }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 6000); // Change image every 2 seconds
    }


});


function toggleSearch (element) {
    var elm = document.getElementById("search-box");
    jQuery(document).ready(function ($) {
        $(elm).toggleClass("display-none");
    });
}

function compactFooter(element) {
    element.classList.toggle("change");
    jQuery(document).ready(function ($) {
        $("#footerlayer2").toggleClass("compact-layer2");
        $("#footerlayer3").toggleClass("compact-layer3");
        $("#footerlayer5").toggleClass("compact-layer5");
    });
}

var scrollLimit = 30;

function compactNavigation(element) {
    element.classList.toggle("change");
    jQuery(document).ready(function ($) {
        $("#topNavigation").toggleClass("compact-header-nav");
        if (document.body.scrollTop > scrollLimit || document.documentElement.scrollTop > scrollLimit) {
            $("#topNavigation").addClass("top-is-sticky");
        } else {
            $("#topNavigation").removeClass("top-is-sticky");
        }
    });
}

function switchToMobileVersion() {
    var ww = document.body.clientWidth;
    if (ww > 980) {
        if (document.body.scrollTop > scrollLimit || document.documentElement.scrollTop > scrollLimit) {
            jQuery(document).ready(function ($) {
                $("header").addClass("is-sticky");
                $('#topNavigation').addClass("top-is-sticky");
            });
        } else {
            jQuery(document).ready(function ($) {
                $("header").removeClass("is-sticky");
                $('#topNavigation').removeClass("top-is-sticky");
            });
        }
    } else if (ww < 981) {
        jQuery(document).ready(function ($) {
            $("header").addClass("is-sticky");
            $('#topNavigation').addClass("top-is-sticky");
        });
    };
};

jQuery(document).ready(function ($) {
    $(window).resize(function () {
        switchToMobileVersion();
    });
    //Fire it when the page first loads:
    switchToMobileVersion();
});

window.onscroll = function () { switchToMobileVersion() };

// function scrollFunction() {
//     if (document.body.scrollTop > scrollLimit || document.documentElement.scrollTop > scrollLimit) {
//         jQuery(document).ready(function ($) {
//             $("header").addClass("is-sticky");
//         });
//     } else {
//         jQuery(document).ready(function ($) {
//             $("header").removeClass("is-sticky");
//         });
//     }
// }
