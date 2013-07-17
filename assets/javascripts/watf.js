/* 
 * For the smooth scroll http://www.paulund.co.uk/smooth-scroll-to-internal-links-with-jquery
 

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

*/

/* 
 * For the highlighting the nav http://trevordavis.net/blog/jquery-one-page-navigation-plugin
 */

 $('.nav-home').onePageNav({
      currentClass: 'current-menu-item',
      changeHash: true,
      scrollSpeed: 900,
      scrollThreshold: 0.1,
      filter: '',
      easing: 'swing'
  });


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

      }

      else if ($filter.hasClass('fix') && scroll_top < splash)
      {

        $filter.removeClass("fix");
        $(".logo-small").removeClass("fix-logo");
  
      }
    });
  }

}
