/* ----------- */
/* JS: DEFAULT */
/* ----------- */

$(document).ready(function() {

// If user scrolls down, change Top Bar
$(window).scroll(function () {

    var iCurScrollPos = $(this).scrollTop();

    if (iCurScrollPos > 100) {
        $("#top-bar").removeClass("at-one");
    } else {
        $("#top-bar").addClass("at-one");
    }

});

// Scroll To (about us)
$("section#hero #about-us-btn").click(function() {

    $("html, body").animate({
        scrollTop: $("section#about").offset().top - 20
    }, 300);

});

// Scroll To (desktop)
$("nav desktop a.scroll-to").click(function() {

    var id = $(this).attr("id");

    $("html, body").animate({
        scrollTop: $("section#" + id).offset().top - 50
    }, 300);

});

// Scroll To (mobile)
$("#mobile-menu a.scroll-to").click(function() {

    $("#mobile-menu").addClass("hide");
    $("html,body").removeClass("stop-scrolling");

    var id = $(this).attr("id");

    $("html, body").animate({
        scrollTop: $("section#" + id).offset().top - 10
    }, 300);

});

// Open Mobile Menu
$("#open-mobile-menu").click(function() {
    $("#mobile-menu").removeClass("hide");
    $("html,body").addClass("stop-scrolling");
});

// Close Mobile Menu
$("#close-mobile-menu").click(function() {
    $("#mobile-menu").addClass("hide");
    $("html,body").addClass("stop-scrolling");
});
    
});