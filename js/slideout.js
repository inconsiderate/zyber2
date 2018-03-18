jQuery(document).ready(function() {
    var slideout = new Slideout({
        'panel': document.getElementById('page'),
        'menu': document.getElementById('mobile-nav'),
        'padding': 256,
        'tolerance': 70
    });

    // Toggle button
    document.querySelector('.toggle-button').addEventListener('click', function() {
        slideout.toggle();
    });
    document.querySelector('.mobile-toggle-nav').addEventListener('click', function() {
        slideout.toggle();
    });

    var parentMenus = jQuery("#mobile-nav .menu-item-has-children");

    jQuery.each(parentMenus, function(item, value) {
        jQuery(value).click(function(e) {
            var subMenu = jQuery(value).find('.sub-menu');
            subMenu.toggle();
            e.preventDefault();
        });
    });
});
