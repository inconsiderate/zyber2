// Matchheight Tweet grid

jQuery(document).ready(function($){
  $('.aptf-tweets-wrapper .aptf-single-tweet-wrapper').addClass('uk-panel uk-panel-box uk-panel-box-hover uk-overlay-hover');
  $('.aptf-tweets-wrapper .aptf-single-tweet-wrapper').matchHeight({
    byRow: true,
    property: 'height',
    target: null,
    remove: false
  });
});


// Form Validation
jQuery(document).ready(function($){
  $.validate();
});


// Make announcements' links to open in new tab

jQuery(document).ready(function($){
  $('.announcements').find('a').attr('target', '_blank');
});
