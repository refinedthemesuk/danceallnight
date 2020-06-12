/* Responsive Mobile Menu */

// Look for .hamburger
  var hamburger = document.querySelector(".hamburger");
  // On click
  hamburger.addEventListener("click", function() {
    // Toggle class "is-active"
    hamburger.classList.toggle("is-active");
    // Do something else, like open/close menu
  });

//Toggle Nav
let mainNav = document.getElementById('js-menu');
      let navBarToggle = document.getElementById('js-navbar-toggle');
      navBarToggle.addEventListener('click', function () {
        mainNav.classList.toggle('toggle-on');
});