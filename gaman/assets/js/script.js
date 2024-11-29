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
         console.log("test");
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
