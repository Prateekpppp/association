$(document).ready(function(){
  setTimeout(function(){ // allowing 3 secs to fade out loader
  $('.page-loader').fadeOut(1000);
  },2000);
});

$(window).on('scroll',function () {
    // console.log($(window).scrollTop())
    if ($(window).scrollTop() > 63) {
      // $('.arrow-bottom').removeClass('hide');
      $('.arrow-bottom').addClass('show-arrow');
      // $('.arrow-bottom').fadeIn(1000);
    }
    if ($(window).scrollTop() < 64) {
      $('.arrow-bottom').removeClass('show-arrow');
      // $('.arrow-bottom').addClass('hide');
      // $('.arrow-bottom').fadOut(1000);
    }
  });


$('.arrow-bottom').click(function() {      // When arrow is clicked
  $('body,html').animate({
      scrollTop : 0                       // Scroll to top of body
  }, 50);
});

$('.navbar-toggler').on('click',()=>{
  if(!$('.navbar-toggler').hasClass('is-active'))
  {
    $('.navbar-toggler').addClass('is-active');
  } else 
  {
    $('.navbar-toggler').removeClass('is-active');
  }
  
  if(!$('.navbar-row').hasClass('mobile-nav'))
  {
    $('.navbar-row').addClass('mobile-nav');
  } else 
  {
    $('.navbar-row').removeClass('mobile-nav');
  }
})

