$(document).ready(function(){
    $('.multiple-items').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 2,
        prevArrow: '<span class="priv_arrow"><i class="fa-solid fa-angle-left"></i></span>',
        nextArrow: '<span class="next_arrow"><i class="fa-solid fa-angle-right"></i></span>'
    });
});