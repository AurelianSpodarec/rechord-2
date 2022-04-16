/**
 * External Dependencies
 */

 window.onload = function () {

    var headerMenu = document.querySelector(".mobile-menu");
    var siteHamburger = document.querySelector(".header__hamburger");
    var html = document.querySelector('html');
    var mobileMenuCloseButton = document.querySelector('.mobile-menu__close');
    
    function toggleMainMenu() {
        html.classList.toggle("html-overflow-modal");
        headerMenu.classList.toggle("is-active");
        siteHamburger.classList.toggle("is-active");

    }

    function closeMobileMenu() {
        headerMenu.classList.remove("is-active");
        html.classList.remove("html-overflow-modal");
    }

    mobileMenuCloseButton.addEventListener('click', closeMobileMenu, false);
    siteHamburger.addEventListener('click', toggleMainMenu, false);


}