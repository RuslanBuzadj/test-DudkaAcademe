// Hello!

import * as JQuery from "jquery";
window.$ = JQuery.default;

$(function(){  
   $('.header__burger').click(function(){
      $('.header__burger, .nav__menu').toggleClass('active'); 
      $('body').toggleClass('lock');       
  });  
   $('.card').click(function (e) {
      const target = e.target;      
         if(target.classList.contains('btn-more')){            
            $('.more', this).slideToggle(100, function(){
               if ($(this).is(':hidden')) {
                  $(this).parent().next().html('Show more').removeClass('open');
               } else {
                  $(this).parent().next().html('Show less').addClass('open');
               }							
            });                       
         }        
      } 
  );
});
