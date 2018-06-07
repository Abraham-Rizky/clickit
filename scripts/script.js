let nav = document.getElementsByClassName("navigation")[0];
let video = document.getElementById("video");
let stickyNav = document.getElementById("ul");

/************* Burger Nav ****************/
function myFunction(x) {
  x.classList.toggle("change");
}

function toggleHam() {
  nav.classList.toggle("responsive");
}
function toggleStickyHam() {
  stickyNav.classList.toggle("sticky-nav-toggle");
}
/************* Sticky Nav ****************/
window.addEventListener("scroll", () => {
  let navTop = video.offsetTop;
  let scrollPos = window.scrollY;

  if (scrollPos >= navTop + 60) {
    nav.classList.add("navigation-fixed");
  } else {
    nav.classList.remove("navigation-fixed")
  }
})


// slider
$(function() {
  var width = 1200;
  var animation = 1000;
  var pause = 3000;
  var currentSlide = 1;
  var maxWidth = 3600;
  
  var $slider = $('#slider');
  var $slideContainer = $slider.find('.slide');
  var $slides = $slideContainer.find('.slides');

  setInterval(function() {
    $('#slider .slide').animate({'margin-left':'-='+width},animation, function(){
      currentSlide++;
      if(width === maxWidth) {
        currentSlide = 1; 
        $slideContainer.css('margin-left',0);
      }
    });
  },pause)});

  //setTimeout(function lastSlide(){