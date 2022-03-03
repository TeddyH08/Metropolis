$(document).ready(function(){
    $('.multiple-items').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 2,
        prevArrow: '<span class="priv_arrow"><i class="fa-solid fa-angle-left"></i></span>',
        nextArrow: '<span class="next_arrow"><i class="fa-solid fa-angle-right"></i></span>',
        dots: true,
        responsive: [
          {
            breakpoint: 1025,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 2,
              infinite: true,
              prevArrow: false,
              nextArrow: false
            }
          },
          {
            breakpoint: 601,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
              infinite: true,
              prevArrow: false,
              nextArrow: false
            }
          },
          {
            breakpoint: 481,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              prevArrow: false,
              nextArrow: false
            }
          }
        ]
    });
});