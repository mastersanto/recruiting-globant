jQuery(document).ready(function($) {

    $('.cities li a').click(function() {
        $('#filter-results li a').fadeOut();
        $('#filter-results li a[city*="' + $(this).attr('tid') + '"]').fadeIn();
    });
  });
