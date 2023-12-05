//Hamburger menu
jQuery("#hamburgerButton").click(function () {
    jQuery("#hamburgerButton").toggleClass("is-active");
    jQuery("#menuClose").toggleClass("hidden");
    jQuery("#menuOpen").toggleClass("lg:flex");
    jQuery("#menu").toggleClass("open");
  });