// Disable Right Click
// document.addEventListener('contextmenu', event => event.preventDefault());

// Select2 select option
$('.select2').select2();

// Show navmenu after hero section
// $(document).ready(function () {
//     if ($(window).width() > 991) {
//         $('.navbar-light .d-menu').hover(function () {
//             $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
//         }, function () {
//             $(this).find('.sm-menu').first().stop(true, true).delay(120).slideUp(100);
//         });
//     }
// });

// Carousel Slider
$('.carousel').carousel({
    interval: 2000
})

// ScrollBar
function scrollToTop() {
    $("html, body").animate({ scrollTop: 0 }, "slow");
}

$('.scroll-top').hide();

$(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
        $('.scroll-top').fadeIn("slow");
    } else {
        $('.scroll-top').fadeOut("slow");
    }
});


// Audio Play in every 24 hour
var lastVisit = localStorage.getItem("lastVisit");
var currentDate = new Date();

if (!lastVisit || (currentDate - new Date(lastVisit)) >= 24 * 60 * 60 * 1000) {
    localStorage.setItem("lastVisit", currentDate);
    var audio = document.getElementById("myAudio");
    audio.play();
}