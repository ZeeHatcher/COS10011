// Mobile Navbar Button
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

var sPath = window.location.pathname;
var sPage = sPath.substring(sPath.lastIndexOf("/") + 1);

if (sPage == "product1.html" || sPage == "product2.html" || sPage == "product3.html") {
  // product*.html category change
  var displays = document.getElementsByClassName("display");
  var btns = document.getElementsByClassName("ctgry__item");

  function changeDisplay(id) {
    id++;
    var target_id = "display_" + id.toString();
    var btn_id = "ctgry_" + id.toString();
    var element = document.getElementById(target_id);
    var btn = document.getElementById(btn_id);

    var i;
    for (i = 0; i < displays.length; i++) {
      displays[i].style.display = "none";
      btns[i].className = "ctgry__item";
    }

    element.style.display = "block";
    btn.className = "ctgry__item ctgry__item--active";
  }

  var i;
  for (i = 0; i < btns.length; i++) {
    let index = i;
    btns[index].addEventListener("click", function() { changeDisplay(index) }, false)
  }

  changeDisplay(0);
}
