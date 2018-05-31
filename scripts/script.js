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