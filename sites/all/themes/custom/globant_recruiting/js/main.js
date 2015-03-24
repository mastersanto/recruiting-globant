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

GLB.videoShare = {
	init: function($) {
		var that = this,
			$container = $('.studios'),
			$videoShare = $('.modal-video-share', $container);

		$videoShare.each(function() {
			var $this = $(this),
				videoId = $this.data('video');
			that.shareTwitter($this, videoId);
			that.shareFace($this, videoId);
		});
	},
	shareTwitter: function($el, videoId) {
		$el.append('<a href="http://www.twitter.com/share?&text=Check+this+video&amp;url=http%3A//www.youtube.com/watch%3Fv%3D'+ videoId +'" target="_blank">Tweet</a>');
	},
	shareFace: function($el, videoId) {
		$el.append('<a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fyoutube.com/watch%3Fv%3D'+ videoId +'" target="_blank">Facebook</a>');
	}
}

jQuery(document).ready(function() {

    jQuery(window).resize(function(ev) {
    	GLB.sectionResize.init(ev, jQuery);
    }).resize();

	GLB.accordions.init(jQuery);
	GLB.videoShare.init(jQuery);
    
});