new WOW().init();

//hamburger
const hamburger = document.getElementById("hamburger");
const nav = document.getElementById("menu");
  hamburger.addEventListener("click", function() {
    hamburger.classList.toggle("active");
    nav.classList.toggle("active");
})

// Back to top button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 10) {
      $('.back-to-top').fadeIn('slow');
      $('.contact').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
      $('.contact').fadeOut('slow');
    }
  });

  $('.back-to-top').click(function () {
    $('html, body').animate({
      scrollTop: 0
    }, 200);
    return false;
  });

  
$(document).ready(function () {
  $(".slick-content").slick({
    dots: true,
    arrows: false,
    autoplay: true,
    slidesToScroll: 1,
    slidesToShow: 1,
    autoplaySpeed: 2000,
    // responsive: [
    //   {
    //     breakpoint: 769,
    //     settings: {
    //       slidesToShow: 1,
    //       slidesToScroll: 1,
    //       variableWidth: false,
    //     },
    //   },
    // ],
  });
});



//mouse cursor

// document.addEventListener('DOMContentLoaded', () => {
//   if (!navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/)) {
//     const body = document.body;
//     const stalker = document.createElement('div');
//     const btns = document.querySelectorAll('a');
//     const STALKER_SIZE = 10;
//     const STALHER_COLOR = '#00AFD0';
//     const SCALE_SIZE = 3;
//     const SCALE_DURATION = .3;

//     ({
//       init() {
//         const self = this;
//         stalker.id = 'js-stalker';
//         stalker.className = 'stalker';
//         stalker.style.width = STALKER_SIZE + 'px';
//         stalker.style.height = STALKER_SIZE + 'px';
//         stalker.style.backgroundColor = STALHER_COLOR;
//         body.appendChild(stalker);
//         body.addEventListener('mousemove', self.onMouseMove);
//         for (let i = 0; i < btns.length; i++) {
//           btns[i].addEventListener('mouseenter', self.onMouseEnter);
//           btns[i].addEventListener('mouseleave', self.onMouseLeave);
//         }
//       },
//       onMouseMove(e) {
//         TweenMax.to(stalker, .4, {
//           x: e.clientX - (STALKER_SIZE / 2),
//           y: e.clientY - (STALKER_SIZE / 2),
//         });
//       },
//       onMouseEnter() {
//         TweenMax.to(stalker, SCALE_DURATION, {
//           scale: SCALE_SIZE
//         });
//       },
//       onMouseLeave() {
//         TweenMax.to(stalker, SCALE_DURATION, {
//           scale: 1
//         });
//       },
//     }.init());
//   }
// });