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

jQuery(document).ready(function() {

    jQuery(window).resize(function(ev) {
    	GLB.sectionResize.init(ev, jQuery);
    }).resize();
    
});