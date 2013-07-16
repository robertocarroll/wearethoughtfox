/* 
 * For the smooth scroll http://www.paulund.co.uk/smooth-scroll-to-internal-links-with-jquery
 */

$(document).ready(function(){
  $('a[href^="#"]').on('click',function (e) {
      e.preventDefault();

      var target = this.hash,
      $target = $(target);

      $('html, body').stop().animate({
          'scrollTop': $target.offset().top
      }, 900, 'swing', function () {
          window.location.hash = target;
      });
  });
});

/* 
 * For the highlighting the nav http://trevordavis.net/blog/jquery-one-page-navigation-plugin
 */




/* 
 * http://www.backslash.gr/content/blog/webdevelopment/6-navigation-menu-that-stays-on-top-with-jquery

 */

if($('body').hasClass('home')){ 
  var $filter = $('.nav-wrapper'); 
    

if ($filter.size()) 
  { 
    $(window).scroll(function () 

    { 
    var scroll_top = $(window).scrollTop(); // our current vertical position from the top
    var splash = $('.splash').height(); // the height of the nav from the top
  
      if (!$filter.hasClass('fix') && scroll_top > $filter.offset().top) 
      {       
        $filter.addClass("fix");
        $(".logo-small").addClass("fix-logo");
        
        $('.nav').onePageNav({
      currentClass: 'current-menu-item',
      changeHash: false,
      scrollSpeed: 750,
      scrollOffset: 0,
      scrollThreshold: 0,
      filter: '',
      easing: 'swing',
      begin: function() {
          //I get fired when the animation is starting
      },
      end: function() {
          //I get fired when the animation is ending
      },
      scrollChange: function($currentListItem) {
          //I get fired when you enter a section and I pass the list item of the section
      }
  });

      } 

      else if ($filter.hasClass('fix') && scroll_top < splash) 
      { 
        $filter.removeClass("fix");
        $('.nav').onePageNav({
            filter: ':not(.our-work)'
        });
        $(".logo-small").removeClass("fix-logo");
        $(".our-work").removeClass("current-menu-item");
      } 
    }); 
  } 

}
