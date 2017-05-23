jQuery( document ).ready(function ( $ ) {
    var menuIcon = $('.menu-icon'),
        siteNav = $('.site-nav');

    function showMenu() {
        siteNav.toggleClass('site-nav--is-visible');
        $('#menu-icons').toggleClass('dashicons-menu dashicons-no-alt');
    }

    menuIcon.on('click', showMenu);
});