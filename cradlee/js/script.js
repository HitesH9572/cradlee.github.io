


$(window).scroll(function () {
    if($(this).scrollTop() > 220) {
        $('.navbar').addClass('fixed');
    }
    else {
        $('.navbar').removeClass('fixed');
    }
});







// var scheight =  $(window).height();

// $(window).scroll(function () {
//     if($(this).scrollTop() > scheight) {
//         $('.round').addClass('rnd');
//     }
//     else {
//         $('.round').removeClass('rnd');
//     }
// });




// window.addEventListener('scroll',
// function () {

//     if (window.pageYOffset >= 400) {
//         console.log("jhgh")
//     }
    
// })