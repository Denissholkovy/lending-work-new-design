//buttom//
function toggle(el) {
  el.style.display = (el.style.display == 'none') ? '' : 'none'
};



//img//

$(function(){
  $('.bt-img-gallery-one').click(function(event) {
    var i_path = $(this).attr('src');
    $('body').append('<div id="overlay"></div><div id="magnify"><div id="conteiner-popup"><img src="'+i_path+'"><div id="close-popup"><i></i></div></div></div>');
    $('#magnify').css({});
    $('#overlay, #magnify').fadeIn('fast');
  });
  
  $('body').on('click', '#close-popup, #overlay', function(event) {
    event.preventDefault();
    $('#overlay, #magnify').fadeOut('fast', function() {
      $('#close-popup, #magnify, #overlay').remove();
    });
  });
});