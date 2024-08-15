$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
      items: 1,  // This sets the number of items to display at once
      loop: true,  // This allows the carousel to loop infinitely
      margin: 10,  // This sets the margin between items
    //   nav: true,  // This shows the next/prev buttons
      autoplay: true,  // This enables autoplay
      autoplayTimeout: 3000,  // This sets the autoplay speed in milliseconds
      autoplayHoverPause: true  // This pauses autoplay on hover
    });
  });
  