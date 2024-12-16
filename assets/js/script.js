let lastScrollTop = 0;

document.addEventListener("DOMContentLoaded", function() {
  window.addEventListener("scroll", function() {
    const currentScrollTop = window.pageYOffset || document.documentElement.scrollTop;
    const windowHeight = window.innerHeight || document.documentElement.clientHeight;
    const scrollThreshold = windowHeight * 0.8;

    const elements = document.querySelectorAll(".fade-in-animation");
   
    elements.forEach(element => {
      const distanceToTop = element.getBoundingClientRect().top;
      if (distanceToTop <= scrollThreshold) {
        element.classList.add("in-viewport");
      } else {
        element.classList.remove("in-viewport");
      }
    });

    lastScrollTop = currentScrollTop <= 0 ? 0 : currentScrollTop; // For Mobile or negative scrolling
  });
});


jQuery('.hamburger-menu').on('click', function() {
    jQuery('nav').toggleClass('hidden');
});


const navbar = document.querySelector(".navbar");
const navbarToggle = document.querySelector(".btn-navtoggle");

let opened = false;

navbarToggle.addEventListener("click", () => {
  opened = !opened;
  let makeX = navbarToggle.querySelector("path");

  if (opened) {
    navbar.style.height = navbar.scrollHeight + "px";
    makeX.setAttribute("d", "M6 18 18 6M6 6l12 12");
  } else {
    navbar.style.height = "0px";
    makeX.setAttribute("d", "M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5");
  }
});


jQuery(document).ready(function () {
  jQuery('.read-more').click(function (e) {
      e.preventDefault(); // Prevent default anchor behavior
      var popupId = jQuery(this).data('popup');
      jQuery('#' + popupId).addClass('active'); // Show the popup
      jQuery('body').addClass('no-scroll'); // Disable background scrolling
  });

  jQuery('.close').click(function () {
      jQuery(this).closest('.popup').removeClass('active'); // Hide the popup
      jQuery('body').removeClass('no-scroll'); // Enable background scrolling
  });

  jQuery(document).click(function (event) {
      if (!jQuery(event.target).closest('.popup-content, .read-more').length) {
          jQuery('.popup').removeClass('active'); // Hide all popups
          jQuery('body').removeClass('no-scroll'); // Enable background scrolling
      }
  });
});

