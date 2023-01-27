// $('h1').text('Hello World').animate({
//     opacity: 0.25,
// }, 1000);
// $('body').css('margin', 0);
// $('h1').css(text-align, center)

// Pseudoklasy
$('p:eq(5)').css('color', 'red'); // Pojedyńczy index
$('p:gt(5)').css('color', 'green'); // Wszystkie Powyżej wskazanego indexu
$('p:gt(5)').css('color', 'green'); // Wszystkie Poniżej wskazanego indexu
$('p:first').css('color', 'fuchsia'); // Pierwszy
$('p:last').css('color', 'lightsalmon'); // Ostatni

$(document).ready(function(){
    $("button:first").click(function(){
      $(".info:lt(3)").fadeToggle();
      $('.header:first').fadeToggle();
    });
  });
$(document).ready(function(){
    $("button").click(function(){
      $("p").css({"color": "green"});
    });
  });





































