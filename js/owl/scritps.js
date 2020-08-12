$("#slider-service").owlCarousel({
  autoplay: true,
  dots: false,
  nav: true,
  loop: true,
  autoplayTimeout: 900,
  autoplayHoverPause: true,
  navText: ['<img src="images/left.png">', '<img src="images/rigth.png">'],
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 3,
    },
    1000: {
      items: 5,
    },
  },
});

$("#slider-testimonio").owlCarousel({
  autoplay: true,
  dots: false,
  nav: true,
  loop: true,

  autoplayHoverPause: true,
  navText: ['<img src="images/t_letf.png">', '<img src="images/t_right.png">'],
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 1,
    },
    1000: {
      items: 1,
    },
  },
});
