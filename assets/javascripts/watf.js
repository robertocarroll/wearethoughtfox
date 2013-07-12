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
 * http://www.backslash.gr/content/blog/webdevelopment/6-navigation-menu-that-stays-on-top-with-jquery

 */

$(document).ready(function() {
  
if($('body').hasClass('home')){

 $(function() {
 
    // grab the initial top offset of the navigation 
    var sticky_navigation_offset_top = $('.nav-wrapper').offset().top;
     
    // our function that decides weather the navigation bar should have "fixed" css position or not.
    var sticky_navigation = function(){
        var scroll_top = $(window).scrollTop(); // our current vertical position from the top
         
        // if we've scrolled more than the navigation, change its position to fixed to stick to top,
        // otherwise change it back to relative
        if (scroll_top > sticky_navigation_offset_top) { 
            $('.nav-wrapper').addClass("fix");
        } else {
            $('.nav-wrapper').removeClass("fix");
        }   
    };
     
    // run our function on load
    sticky_navigation();
     
    // and run it again every time you scroll
    $(window).scroll(function() {
         sticky_navigation();
    });
 
});


}

});


