var search = angular.module('search', []);

jQuery(document).ready(function($) {
    angular.bootstrap($('#search-positions'), ['search']);

    $('.cities li a').click(function() {
        $('#filter-results li a').fadeOut();
        $('#filter-results li a[city="' + $(this).attr('tid') + '"]').fadeIn();
    });

    $('.positions li a').click(function() {
      $('#filter-results li a').fadeOut();
      $('#filter-results li a[studio="' + $(this).attr('tid') + '"]').fadeIn();
    });
  });
