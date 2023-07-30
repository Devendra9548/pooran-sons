




// Star rating Carousel slider

$('.slick-row-class').slick({
    dots: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 200000,
  });


  $('.about-slick-row-class').slick({
    dots: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 200000,
  }); 
          
  $('.home-slider').slick({
    dots: true,
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear'
  });

  $(function () {
	$('.tlt').textillate();
})
