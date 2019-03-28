$(document).ready(function() {
    $('.ui.sidebar').sidebar({
        context: $('.ui.pushable.segment'),
        transition: 'overlay'
    }).sidebar('attach events', '#mobile_item');

    function scrollNav() {
        $('.right.menu a').click(function(){  
          //Toggle Class
          $(".active").removeClass("active");      
          $(this).closest('a').addClass("active");
          var theClass = $(this).attr("class");
          $('.'+theClass).parent('a').addClass('active');
          //Animate
          $('html, body').stop().animate({
              scrollTop: $( $(this).attr('href') ).offset().top - 160
          }, 800);
          return false;
        });
        $('.scrollTop a').scrollTop();
      }
      scrollNav();

});
