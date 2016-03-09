$(document).ready(function(e){  
    var str= location.hash; 
    var n=str.replace("_temp","");
    $('html,body').animate({scrollTop:$(n).offset().top}, 500);
});
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

(function() {
    var quotes = $(".quotes");
    var quoteIndex = -1;
    function showNextQuote() {
        ++quoteIndex;
        quotes.eq(quoteIndex % quotes.length)
            .fadeIn(5000)
            .delay(20000)
            .fadeOut(5000, showNextQuote);
    }
    showNextQuote();
})();

var grabBag = [1,2,3,4,5,6,7,8,9,10];

// randomize order of elements with a sort function that randomly returns -1/0/1
grabBag.sort(function(xx,yy){ return Math.floor(Math.random() * 3) - 1; })

function getNextRandom(){
    return grabBag.shift();
};

var originalLength = grabBag.length;
for(var i = 0; i < originalLength .length; i++){
    console.log(getNextRandom());
}