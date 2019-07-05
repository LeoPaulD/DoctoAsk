$(document).ready(function(){
  var test = false;
  $("#filtreMobile p").click(function() {
    if (test) {
    $("#filtreMobile").animate({
        top : "90vh",
      }, 500 );
      test=false;
    }
    else {
      $("#filtreMobile").animate({
          top : "0",
        }, 500 );
        test=true;
    }
    });


    $( window ).scroll(function() {
      var pos = $('#filtreMobile').offset();
      var limite =$("body").height() - $('footer').height();

      if (pos.top > limite) {
        $('#filtreMobile').css('visibility','hidden');
      }
      else
      {
        $('#filtreMobile').css('visibility','visible');
      }
});
  });
