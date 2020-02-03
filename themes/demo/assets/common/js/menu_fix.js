$(window).scroll(function(){
  var element = $('header'),
       scroll = $(window).scrollTop(),
       height = element.outerHeight();
  if ( scroll > height ) {
    element.addClass('fixed');
  } else {
    element.removeClass('fixed');
  }
});