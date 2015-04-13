/**
 * @file
 * main.js
 *
 * Main Javascript file for GLB Recruiting site
 */
'use strict';

var GLB = GLB || {};

GLB.sectionResize = {
	init: function(ev, $) {
		var $sections = jQuery('.glb-section'),
			$heroImg = $('.hero-container img'),
			sectionMinHeight = ev.target.innerHeight + 'px';
		$sections.css('min-height', sectionMinHeight);
		$heroImg.css('min-height', sectionMinHeight);
	}
}

GLB.accordions = {
	init: function($) {
		var $container = $('#row2'),
			$accordions = $('.panel-collapse', $container);

		$accordions.on("shown.bs.collapse", function () {
		    $('html, body').animate({
		    	// Adding Header's height 70px 
		        scrollTop: $(this).offset().top - 120
		    }, 500);
		});
	}
}

jQuery(document).ready(function() {

    jQuery(window).resize(function(ev) {
    	GLB.sectionResize.init(ev, jQuery);
    }).resize();

	GLB.accordions.init(jQuery);    
});