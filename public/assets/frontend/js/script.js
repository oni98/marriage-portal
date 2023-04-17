// Disable Right Click
// document.addEventListener('contextmenu', event => event.preventDefault());

// Select2 select option
$('.select2').select2();

// Carousel Slider
$('.carousel').carousel({
    interval: 2000
})

// Scroll to Top
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