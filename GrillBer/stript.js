/* Sticky */

$(document).ready(function(){
    
    $('.js--section-features').waypoint(function(direction){
        if(direction =="down") {
                $('nav').addClass('sticky');
           } else {
              $('nav').removeClass('sticky'); 
           }
    },  {
        offset: '180px;'
});


/* Button scroll */
    
$('.js--scroll-to-start').click(function () {
       $('html, body').animate({scrollTop: $('.js--section-features').offset().top - 140},1000); 
    });
    
    
/* Nav scroll */  
    $(function() {
      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top - 150
            }, 1000);
            return false;
          }
        }
      });
    });

});