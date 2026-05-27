feather.replace();

const menu = document.querySelector("#menu");
const navbarnav = document.querySelector(".navbar-nav");
const navbar = document.querySelector(".navbar");

menu.addEventListener("click", function (e) {
  e.preventDefault();
  navbarnav.classList.toggle("active");
});

document.addEventListener("click", function (e) {
  if (!menu.contains(e.target) && !navbar.contains(e.target)) {
    navbarnav.classList.remove("active");
  }
});
