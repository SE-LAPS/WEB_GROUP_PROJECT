////////////////////Check the responsive///////////////

const responsive = {
    0: {
        items: 1
    },
    320: {
        items: 1
    },
    467: {
        items: 2
    },
    960: {
        items: 3
    }
}


$(document).ready(function() {

    $nav = $('.nav');
    $toggleCollapse = $('.toggle-collapse');

    //////////////////click event toggle menu///////////////////

    $toggleCollapse.click(function() {
        $nav.toggleClass('collapse');
    })

    /////////////////////// owl-crousel for OL//////////////////
    $('.owl-carousel').owlCarousel({
        loop: true,
        autoplay: false,
        autoplayTimeout: 3000,
        dots: false,
        nav: true,
        navText: [$('.owl-navigation .owl-nav-prev'), $('.owl-navigation .owl-nav-next')],

    });

});


///////////////Auto view slider///////////////

var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("home-slider");
    var dots = document.getElementsByClassName("dot ");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none ";
    }
    slideIndex++;
    if (slideIndex > slides.length) { slideIndex = 1 }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active ", " ");
    }
    slides[slideIndex - 1].style.display = "block ";
    dots[slideIndex - 1].className += " active ";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}



//////////////////// Click Auto scroll upper///////////

$(".move-up span ").click(function() {
    $('html, body').animate({
        scrollTop: 0
    }, 1000);
})