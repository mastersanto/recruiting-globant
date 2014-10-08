/**
 * @file
 * bootstrap.js
 *
 * Provides general enhancements and fixes to Bootstrap's JS files.
 */
'use strict';

var GLB = GLB || {};

GLB.sectionResize = {
	init: function(ev, $) {
		var $sections = $('.glb-section'),
			sectionMinHeight = ev.target.innerHeight + 'px';
		$sections.css('min-height', sectionMinHeight);
	}
}

GLB.start = (function(window, document, $) {
	$(window).on('resize', function(ev) {
		GLB.sectionResize.init(ev, $);
	});
})(window, document, jQuery);