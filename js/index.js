
  $(document).ready(function(){
    $('.customer-logos').slick({
    slidesToShow: 4,
    slidesToScroll: 4,
    autoplay: true,
    speed: 300,
    arrows: true,
    dots: true,
    pauseOnHover: false,
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    }, {
      breakpoint: 520,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 2
      }
    }]
    });
  });