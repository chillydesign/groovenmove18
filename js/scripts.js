

(function ($, root, undefined) {

	$(function () {

		'use strict';


        $('.single_event').on('mouseover', function(e) {
            var $this = $(this);
            if ($this.hasClass('hovered')) {
                $this.removeClass('hovered');
            } else {
                $this.addClass('hovered');
            }
        }).on('mouseout', function(e) {
            var $this = $(this);
            $this.removeClass('hovered');
        })


	});

})(jQuery, this);
