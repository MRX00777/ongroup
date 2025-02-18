"use strict";

$(document).ready(function () {
  $(".tel-mask").mask("+998 11 111 11 11");
  $(".tel-mask").on("focus", function () {
    $(this).val("+998");
  });
  $("[data-fancybox='gallery']").fancybox({
    buttons: ["slideShow", "share", "zoom", "fullScreen", "download", "thumbs", "close"],
    image: {
      preload: false
    }
  });
});
document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();
    var sectionId = this.getAttribute("href");
    var section = document.querySelector(sectionId);
    var headerHeight = document.querySelector("header").offsetHeight;
    var sectionTop = section.offsetTop - headerHeight;
    var scrollOptions = {
      top: sectionTop,
      behavior: "smooth"
    };
    var startTime = performance.now();
    var duration = 1000;
    var startTop = window.pageYOffset;

    function scroll(timestamp) {
      var timeElapsed = timestamp - startTime;
      var progress = Math.min(timeElapsed / duration, 1);

      var easeInOutQuad = function easeInOutQuad(t) {
        return t < 0.5 ? 2 * t * t : -1 + (4 - 2 * t) * t;
      };

      var scrollTop = startTop + easeInOutQuad(progress) * (sectionTop - startTop);
      window.scrollTo({
        top: scrollTop,
        behavior: "auto"
      });

      if (timeElapsed < duration) {
        requestAnimationFrame(scroll);
      }
    }

    requestAnimationFrame(scroll);
  });
});

function openTab(evt, tabName) {
  var i, tabcontent, tablinks;
  var tab = evt.target.closest(".tab");
  tabcontent = tab.getElementsByClassName("tabcontent");

  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].classList.remove("active");
  }

  tablinks = tab.getElementsByClassName("tablinks");

  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].classList.remove("active");
  }

  document.getElementById(tabName).classList.add("active");
  evt.currentTarget.classList.add("active");
}

var header = document.querySelector(".header");
var prevScrollPos = window.pageYOffset;
window.addEventListener("scroll", function () {
  var currentScrollPos = window.pageYOffset;

  if (prevScrollPos > currentScrollPos) {
    // Scrolling Up
    header.classList.remove("scrolled");
  } else {
    // Scrolling Down
    header.classList.add("scrolled");
  }

  prevScrollPos = currentScrollPos;
});
var main = document.querySelector("main");
var headerHeight = document.querySelector("header").offsetHeight;
window.addEventListener("load", function () {
  if (!main.classList.contains("main")) {
    main.style.marginTop = "".concat(headerHeight, "px");
  }
});
window.addEventListener("load", function () {
  document.body.style = "--header-height: ".concat(headerHeight, "px");
});

var fixNav = function fixNav() {
  if (window.scrollY > 1) {
    header.classList.add("scrolled");
  } else {
    header.classList.remove("scrolled");
  }
};

window.addEventListener("scroll", fixNav);

var accardionToggle = function accardionToggle(slideMenu) {
  return function (e) {
    slideMenu.forEach(function (links) {
      var hidePanel = links.nextElementSibling;

      if (links === e.currentTarget) {
        e.currentTarget.classList.toggle("active");
        hidePanel.classList.toggle("active-block");
      } else {
        links.classList.remove("active");
        hidePanel.classList.remove("active-block");
      }
    });
  };
};

var slideMenu = document.querySelectorAll(".accardion-link");
slideMenu.forEach(function (links) {
  links.addEventListener("click", accardionToggle(slideMenu));
}); // tabs function index.php start

function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");

  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  tablinks = document.getElementsByClassName("tablinks");

  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
} // tabs function index.php end