const navbarnav = document.querySelector(".navbar-nav");
document.querySelector("#hamburger-menu");
onclick = () => {
  navbarnav.classList.toggle("active");
};
const searchform = document.querySelector(".search-form");
const searchbox = document.querySelector("#search-box");
document.querySelector("#search-button").onclick = () => {
  searchform.classList.toggle("active");
};

const hamburger = document.querySelector("#hamburger-menu");

document.addEventListener("click", function (e) {
  if (!hamburger.contains(e.target) && !navbarnav.contains(e.target)) {
    navbarnav.classList.remove("active");
  }
});
