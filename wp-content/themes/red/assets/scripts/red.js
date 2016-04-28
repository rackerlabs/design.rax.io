(function($) {
  'use strict';

  var resizeThumbs = function() {
    var thumbs = $('.red-thumbnail-link, .red-img-responsive');
    var ratio = 0.6667;

    thumbs.each(function() {
      var thumb = $(this);
      var thumbnailHeight = Math.round(thumb.width()*ratio);
      thumb.css('height',thumbnailHeight+'px');
    });
  };

  $(document).ready(function() {
    if($('.red-thumbnail-link').length) {
      resizeThumbs();

      $(window).bind('resize',function() {
        resizeThumbs();
      });
    }

    var lastScrollTop = 0;
    $(window).scroll(function() {
      var currentScrollTop = $(this).scrollTop();
      if(currentScrollTop > lastScrollTop) {
        $('.navbar').addClass('header-hidden');
      } else {
        $('.navbar').removeClass('header-hidden');
      }
      lastScrollTop = currentScrollTop;
    });

    $('.menu-item-has-children>a').each(function() {
      var newHTML = '<i class="fa fa-chevron-down pull-right"></i>'+$(this).text();
      $(this).html(newHTML);
    });

    $('.menu-item-has-children').hover(function() {
      $(this).addClass('hover').find('.sub-menu').slideDown('fast');
    },function() {
      $(this).removeClass('hover').find('.sub-menu').hide();
    });

    $('#menu-item-1304>a,#menu-item-1311>a').click(function(e) {
      e.preventDefault();
    });

  });


})(jQuery);
