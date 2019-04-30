// Mobile Navigation Bar Function
var btn = document.getElementById("nav-btn");
var nav = document.getElementById("nav");

function toggleNav() {
  var toggled = nav.style.display == "block";

  if (toggled) {
    nav.style.display = "none";
  } else {
    nav.style.display = "block";
  }
}

btn.addEventListener("click", toggleNav, false);
