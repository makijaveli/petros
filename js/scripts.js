(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
		
	});


	$(document).ready( function() {
        $('#tab-container').easytabs();
    });

    $(function() {
          $(document).on('click', 'a[href^="#"]:not(a[href^="#tab"])', function () {
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.substr(1) +']');
              if (target.length) {
                  $('html,body').animate({
                    scrollTop: target.offset().top -100
                  }, 1000);
                  return false;
              }
          });
      });
	
})(jQuery, this);
